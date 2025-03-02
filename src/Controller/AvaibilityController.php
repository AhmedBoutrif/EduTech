<?php

// src/Controller/AvaibilityController.php

namespace App\Controller;

use App\Entity\Avaibility;
use App\Form\AvaibilityType;
use App\Form\AvaibilityEntryType;
use App\Repository\AvaibilityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Reservation;

use Symfony\Component\HttpFoundation\JsonResponse;


final class AvaibilityController extends AbstractController
{
    #[Route('/Avaibility/showall', name: 'app_Avaibility_index', methods: ['GET'])]
    public function index(AvaibilityRepository $AvaibilityRepository): Response
    {
        return $this->render('Avaibility/index.html.twig', [
            'availabilities' => $AvaibilityRepository->findRecentAvailabilities(),
        ]);
    }

    #[Route('/Avaibility/new', name: 'app_Avaibility_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $availabilities = []; // Utiliser un tableau si pas d'entité parent

        $form = $this->createForm(AvaibilityType::class, ['availabilities' => []]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Get the form data (collection of Avaibility entities)
            $availabilities = $form->get('availabilities')->getData();

            // Persist each Avaibility entity
            foreach ($availabilities as $Avaibility) {
                $entityManager->persist($Avaibility);
            }

            $entityManager->flush();

            $this->addFlash('success', 'Disponibilités enregistrées avec succès!');
            return $this->redirectToRoute('app_Avaibility_index');
        }

        return $this->render('Avaibility/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/Avaibility/{id}', name: 'app_Avaibility_show', methods: ['GET'])]
    public function show(Avaibility $Avaibility): Response
    {
        $isPast = $Avaibility->getDate() < new \DateTime(); // Comparaison avec la date actuelle

        return $this->render('Avaibility/show.html.twig', [
            'Avaibility' => $Avaibility,
            'isPast' => $isPast, // Ajout de la variable pour Twig
        ]);
    }

    #[Route('/Avaibility/{id}/edit', name: 'app_Avaibility_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Avaibility $Avaibility, EntityManagerInterface $entityManager): Response
    {
        // Use the correct form class: AvaibilityEntryType
        $form = $this->createForm(AvaibilityEntryType::class, $Avaibility);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            $this->addFlash('success', 'Disponibilité mise à jour avec succès!');
            return $this->redirectToRoute('app_Avaibility_index');
        }

        return $this->render('Avaibility/edit.html.twig', [
            'Avaibility' => $Avaibility,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/Avaibility/{id}', name: 'app_Avaibility_delete', methods: ['POST'])]
    public function delete(Request $request, Avaibility $Avaibility, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$Avaibility->getId(), $request->getPayload()->getString('_token'))) {
            // Récupérer toutes les réservations associées
            $reservations = $Avaibility->getReservations();

            foreach ($reservations as $reservation) {
                $reservation->setStatus('canceled'); // Met à jour le statut
                $reservation->setAvaibility(null);   // Dissocie la réservation
            }

            $entityManager->flush(); // Sauvegarde les modifications

            // Supprimer l'`Avaibility`
            $entityManager->remove($Avaibility);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_Avaibility_index', [], Response::HTTP_SEE_OTHER);
    }
    
   // Keep your original calendar route as-is
#[Route('/calendar/{id}', name: 'app_calendar', methods: ['GET'])]
public function showCalendar(Avaibility $avaibility, ManagerRegistry $doctrine): Response
{
    $entityManager = $doctrine->getManager();
    
    // Charger explicitement les réservations liées à l'avaibility
    $reservations = $entityManager->getRepository(Reservation::class)
        ->findBy(['Avaibility' => $avaibility]);
    
    return $this->render('Avaibility/calendar.html.twig', [
        'Avaibility' => $avaibility,
        'reservations' => $reservations,
    ]);
}

// Make sure this API endpoint works only for XMLHttpRequest calls
#[Route('/api/calendar-data/{id}', name: 'api_calendar_data', methods: ['GET'])]
public function getCalendarData(Request $request, Avaibility $avaibility, ManagerRegistry $doctrine): JsonResponse
{
    // Only respond to AJAX requests
    if (!$request->isXmlHttpRequest()) {
        return $this->json(['success' => false, 'message' => 'Only AJAX requests are allowed'], 400);
    }
    
    $entityManager = $doctrine->getManager();
    
    // Fetch reservations for this availability
    $reservations = $entityManager->getRepository(Reservation::class)
        ->findBy(['Avaibility' => $avaibility]);
    
    $formattedReservations = [];
    
    foreach ($reservations as $reservation) {
        if ($reservation->getStatus() !== 'canceled') {
            $startTime = $reservation->getStartTime();
            $endTime = (clone $startTime)->modify("+" . $reservation->getDuration() . " minutes");
            
            $formattedReservations[] = [
                'id' => $reservation->getId(),
                'startTime' => $startTime->format('Y-m-d\TH:i:s'),
                'endTime' => $endTime->format('Y-m-d\TH:i:s'),
                'startTimeFormatted' => $startTime->format('H:i'),
                'endTimeFormatted' => $endTime->format('H:i'),
                'status' => $reservation->getStatus(),
                'duration' => $reservation->getDuration()
            ];
        }
    }
    
    return $this->json([
        'success' => true,
        'reservations' => $formattedReservations
    ]);
} 
    #[Route('/toggle-reservation/{id}', name: 'toggle_reservation', methods: ['POST'])]
public function toggleReservation(int $id, ManagerRegistry $doctrine): JsonResponse
{
    $entityManager = $doctrine->getManager();
    $reservation = $doctrine->getRepository(Reservation::class)->find($id);

    if (!$reservation) {
        return $this->json(['success' => false, 'message' => 'Reservation not found'], 404);
    }

    // Toggle status
    $newStatus = ($reservation->getStatus() === 'confirmed') ? 'not confirmed' : 'confirmed';
    $reservation->setStatus($newStatus);
    
    $entityManager->persist($reservation);
    $entityManager->flush();

    return $this->json(['success' => true, 'status' => $reservation->getStatus()]);
}

   
    // Back

    #[Route('admin/Avaibility/showall', name: 'admin_Avaibility_index', methods: ['GET'])]
    public function adminIndex(AvaibilityRepository $AvaibilityRepository): Response
    {
        $currentDate = new \DateTime(); // Get current date and time
        $availabilities = $AvaibilityRepository->findRecentAvailabilities();

        return $this->render('back/Avaibility/index.html.twig', [
            'availabilities' => $availabilities,
        ]);
    }

    #[Route('admin/Avaibility/new', name: 'admin_Avaibility_new', methods: ['GET', 'POST'])]
    public function adminNew(Request $request, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(AvaibilityType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Get the form data (collection of Avaibility entities)
            $availabilities = $form->get('availabilities')->getData();

            // Persist each Avaibility entity
            foreach ($availabilities as $Avaibility) {
                $entityManager->persist($Avaibility);
            }

            $entityManager->flush();

            $this->addFlash('success', 'Disponibilités enregistrées avec succès!');
            return $this->redirectToRoute('admin_Avaibility_index');
        }

        return $this->render('back/Avaibility/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('admin/Avaibility/{id}', name: 'admin_Avaibility_show', methods: ['GET'])]
    public function adminShow(Avaibility $Avaibility): Response
    {
        $isPast = $Avaibility->getDate() < new \DateTime(); // Comparaison avec la date actuelle

        return $this->render('back/Avaibility/show.html.twig', [
            'Avaibility' => $Avaibility,
            'isPast' => $isPast, // Ajout de la variable pour Twig
        ]);
    }

    #[Route('admin/Avaibility/{id}/edit', name: 'admin_Avaibility_edit', methods: ['GET', 'POST'])]
    public function adminEdit(Request $request, Avaibility $Avaibility, EntityManagerInterface $entityManager): Response
    {
        // Use the correct form class: AvaibilityEntryType
        $form = $this->createForm(AvaibilityEntryType::class, $Avaibility);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            $this->addFlash('success', 'Disponibilité mise à jour avec succès!');
            return $this->redirectToRoute('admin_Avaibility_index');
        }

        return $this->render('back/Avaibility/edit.html.twig', [
            'Avaibility' => $Avaibility,
            'form' => $form->createView(),
        ]);
    }

    #[Route('admin/Avaibility/{id}', name: 'admin_Avaibility_delete', methods: ['POST'])]
    public function adminDelete(Request $request, Avaibility $Avaibility, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$Avaibility->getId(), $request->getPayload()->getString('_token'))) {
            // Récupérer toutes les réservations associées
            $reservations = $Avaibility->getReservations();

            foreach ($reservations as $reservation) {
                $reservation->setStatus('canceled'); // Met à jour le statut
                $reservation->setAvaibility(null);   // Dissocie la réservation
            }

            $entityManager->flush(); // Sauvegarde les modifications

            // Supprimer l'`Avaibility`
            $entityManager->remove($Avaibility);
            $entityManager->flush();
        }

        return $this->redirectToRoute('admin_Avaibility_index', [], Response::HTTP_SEE_OTHER);
    }
}
