<?php

namespace App\Controller;

use App\Entity\Reservation;
use App\Form\ReservationType;
use App\Repository\ReservationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\AvaibilityRepository;
use Symfony\Component\Form\FormError;

//#[Route('/reservation')]
final class ReservationController extends AbstractController
{
    #[Route('/reservation/showall',name: 'app_reservation_index', methods: ['GET'])]
    public function index(ReservationRepository $reservationRepository): Response
    {
        $reservations = $reservationRepository->findAll();
        
        // Ajoute ces lignes pour voir ce qui est envoyé à Twig
        dump($reservations); 
  
    
        return $this->render('reservation/index.html.twig', [
            'reservations' => $reservations,
        ]);
    }
    

    #[Route('reservation/new/{AvaibilityId}', name: 'app_reservation_new', methods: ['GET', 'POST'])]
public function new(
    Request $request, 
    EntityManagerInterface $entityManager, 
    AvaibilityRepository $AvaibilityRepository, 
    int $AvaibilityId
): Response {
    $Avaibility = $AvaibilityRepository->find($AvaibilityId);
    
    if (!$Avaibility) {
        throw $this->createNotFoundException("Disponibilité introuvable.");
    }

    $reservation = new Reservation();
    $reservation->setAvaibility($Avaibility);

    $form = $this->createForm(ReservationType::class, $reservation, [
        'start_time' => $Avaibility->getStartTime(),
        'end_time' => $Avaibility->getEndTime(),
    ]);
    
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $hour = $form->get('hour')->getData();
        if ($hour) {
            $dateTime = \DateTimeImmutable::createFromFormat(
                'Y-m-d H:i',
                $Avaibility->getDate()->format('Y-m-d') . ' ' . $hour->format('H:i')
            );
            $reservation->setStartTime($dateTime);
        }

        $entityManager->persist($reservation);
        $entityManager->flush();
        return $this->redirectToRoute('app_Avaibility_index');
    }

    return $this->render('reservation/new.html.twig', [
        'reservation' => $reservation,
        'form' => $form->createView(),
    ]);
}

    
    // Helper method to convert time string to minutes since midnight
    private function timeToMinutes(string $time): int
    {
        list($hours, $minutes) = explode(':', $time);
        return ($hours * 60) + $minutes;
    }
    
    
    

    #[Route('/reservation/{id}', name: 'app_reservation_show', methods: ['GET'])]
    public function show(   
        Reservation $reservation
    ): Response
    {
        return $this->render('reservation/show.html.twig', [
            'reservation' => $reservation,
        ]);
    }

    #[Route('/reservation/{id}/edit', name: 'app_reservation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Reservation $reservation, EntityManagerInterface $entityManager): Response
    {
        if ($reservation->getStatus() === 'canceled') {
            $this->addFlash('warning', 'Vous ne pouvez pas modifier une réservation annulée.');
            return $this->redirectToRoute('app_reservation_index');
        }
    
        $avaibility = $reservation->getAvaibility();
        $currentHour = new \DateTime($reservation->getStartTime()->format('H:i'));

        $form = $this->createForm(ReservationType::class, $reservation, [
       
            'start_time' => $avaibility->getStartTime(),
            'end_time' => $avaibility->getEndTime(),
            'current_hour' => $currentHour,
        ]);
        
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $hour = $form->get('hour')->getData();
            if ($hour) {
                $dateTime = \DateTimeImmutable::createFromFormat(
                    'Y-m-d H:i',
                    $avaibility->getDate()->format('Y-m-d') . ' ' . $hour->format('H:i')
                );
                $reservation->setStartTime($dateTime);
            }
    
            $entityManager->flush();
            $this->addFlash('success', 'La réservation a été modifiée avec succès.');
            return $this->redirectToRoute('app_reservation_show', ['id' => $reservation->getId()]);
        }
    
        return $this->render('reservation/edit.html.twig', [
            'reservation' => $reservation,
            'form' => $form->createView(),
        ]);
    }
    

    #[Route('/reservation/{id}', name: 'app_reservation_delete', methods: ['POST'])]
    public function delete(Request $request, Reservation $reservation, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reservation->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($reservation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_reservation_index', [], Response::HTTP_SEE_OTHER);
    }


#[Route('/reservation/avaibility/{AvaibilityId}', name: 'app_reservation_showbyavaibility', methods: ['GET'])]
public function showByAvaibility(int $AvaibilityId, ReservationRepository $reservationRepository): Response
{
    $reservations = $reservationRepository->findBy(['Avaibility' => $AvaibilityId]);

    return $this->render('reservation/showbyAvaibility.html.twig', [
        'reservations' => $reservations,
        'AvaibilityId' => $AvaibilityId,
    ]);
}

#[Route('/reservation/avaibility/{AvaibilityId}', name: 'app_reservation_showbyavaibility_calendar', methods: ['GET'], format: 'json')]
public function showByAvaibilityCalendar(int $AvaibilityId, ReservationRepository $reservationRepository): JsonResponse
{
    $reservations = $reservationRepository->findBy(['Avaibility' => $AvaibilityId]);

    $events = [];
    foreach ($reservations as $reservation) {
        $events[] = [
            'title' => $reservation->getTopic(), // Change selon ton entité Reservation
            'start' => $reservation->getHour()->format('Y-m-d H:i:s'), // Format correct pour FullCalendar
            'end' => $reservation->getHour()->modify('+'.$reservation->getDuration().' minutes')->format('Y-m-d H:i:s'),
        ];
    }

    return new JsonResponse($events);
}


//back functions
#[Route('/admin/new//{AvaibilityId}', name: 'admin_reservation_new', methods: ['GET', 'POST'])]
public function adminNew(
    Request $request, 
    EntityManagerInterface $entityManager, 
    AvaibilityRepository $AvaibilityRepository, 
    int $AvaibilityId
): Response {
    $Avaibility = $AvaibilityRepository->find($AvaibilityId);
    
    if (!$Avaibility) {
        throw $this->createNotFoundException("Disponibilité introuvable.");
    }

    $reservation = new Reservation();
    $reservation->setAvaibility($Avaibility);

    $form = $this->createForm(ReservationType::class, $reservation, [
        'start_time' => $Avaibility->getStartTime(),
        'end_time' => $Avaibility->getEndTime(),
    ]);
    
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $hour = $form->get('hour')->getData();
        if ($hour) {
            $dateTime = \DateTimeImmutable::createFromFormat(
                'Y-m-d H:i',
                $Avaibility->getDate()->format('Y-m-d') . ' ' . $hour->format('H:i')
            );
            $reservation->setStartTime($dateTime);
        }

        $entityManager->persist($reservation);
        $entityManager->flush();
        return $this->redirectToRoute('admin_Avaibility_index');
    }

    return $this->render('back/reservation/new.html.twig', [
        'reservation' => $reservation,
        'form' => $form->createView(),
    ]);
}
#[Route('/admin/showall',name: 'admin_reservation_index', methods: ['GET'])]
public function adminindex(ReservationRepository $reservationRepository): Response
{
    $reservations = $reservationRepository->findAll();
    
    // Ajoute ces lignes pour voir ce qui est envoyé à Twig
    dump($reservations); 


    return $this->render('back/reservation/index.html.twig', [
        'reservations' => $reservations,
    ]);
}

#[Route('/admin/{id}', name: 'admin_reservation_show', methods: ['GET'])]
public function adminshow(Reservation $reservation): Response
{
    return $this->render('back/reservation/show.html.twig', [
        'reservation' => $reservation,
    ]);
}



#[Route('/admin/{id}/edit', name: 'admin_reservation_edit', methods: ['GET', 'POST'])]
public function adminedit(Request $request, Reservation $reservation, EntityManagerInterface $entityManager): Response
    {
        if ($reservation->getStatus() === 'canceled') {
            $this->addFlash('warning', 'Vous ne pouvez pas modifier une réservation annulée.');
            return $this->redirectToRoute('app_reservation_index');
        }
    
        $avaibility = $reservation->getAvaibility();
        $currentHour = new \DateTime($reservation->getStartTime()->format('H:i'));

        $form = $this->createForm(ReservationType::class, $reservation, [
       
            'start_time' => $avaibility->getStartTime(),
            'end_time' => $avaibility->getEndTime(),
            'current_hour' => $currentHour,
        ]);
        
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $hour = $form->get('hour')->getData();
            if ($hour) {
                $dateTime = \DateTimeImmutable::createFromFormat(
                    'Y-m-d H:i',
                    $avaibility->getDate()->format('Y-m-d') . ' ' . $hour->format('H:i')
                );
                $reservation->setStartTime($dateTime);
            }
    
            $entityManager->flush();
            $this->addFlash('success', 'La réservation a été modifiée avec succès.');
            return $this->redirectToRoute('admin_reservation_show', ['id' => $reservation->getId()]);
        }
    
        return $this->render('back/reservation/edit.html.twig', [
            'reservation' => $reservation,
            'form' => $form->createView(),
        ]);
    }

#[Route('admin/{id}', name: 'admin_reservation_delete', methods: ['POST'])]
public function adminDelete(Request $request, Reservation $reservation, EntityManagerInterface $entityManager): Response
{
    if ($this->isCsrfTokenValid('delete'.$reservation->getId(), $request->getPayload()->getString('_token'))) {
        $entityManager->remove($reservation);
        $entityManager->flush();
    }

    return $this->redirectToRoute('admin_reservation_index', [], Response::HTTP_SEE_OTHER);
}
#[Route('admin/reservation/avaibility/{AvaibilityId}', name: 'admin_reservation_showbyavaibility', methods: ['GET'])]
public function adminshowByAvaibility(int $AvaibilityId, ReservationRepository $reservationRepository): Response
{
    $reservations = $reservationRepository->findBy(['Avaibility' => $AvaibilityId]);

    return $this->render('back/reservation/showbyAvaibility.html.twig', [
        'reservations' => $reservations,
        'AvaibilityId' => $AvaibilityId,
    ]);
}






}
