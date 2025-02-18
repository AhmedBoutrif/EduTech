<?php

namespace App\Controller;

use App\Entity\Avaibility;
use App\Form\AvaibilityType;
use App\Form\AvaibilityEntryType;

use App\Repository\AvaibilityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;


final class AvaibilityController extends AbstractController
{
    #[Route('/Avaibility/showall',name: 'app_Avaibility_index', methods: ['GET'])]
    public function index(AvaibilityRepository $AvaibilityRepository): Response
    {
        return $this->render('Avaibility/index.html.twig', [
            'availabilities' => $AvaibilityRepository->findAll(),
        ]);
    }

    #[Route('/Avaibility/new', name: 'app_Avaibility_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
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
            return $this->redirectToRoute('app_Avaibility_index');
        }
    
        return $this->render('Avaibility/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    #[Route('/Avaibility/{id}', name: 'app_Avaibility_show', methods: ['GET'])]
    public function show(Avaibility $Avaibility): Response
    {
        return $this->render('Avaibility/show.html.twig', [
            'Avaibility' => $Avaibility,
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
            $entityManager->remove($Avaibility);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_Avaibility_index', [], Response::HTTP_SEE_OTHER);
    }

//back


#[Route('admin/Avaibility/showall',name: 'admin_Avaibility_index', methods: ['GET'])]
public function adminIndex(AvaibilityRepository $AvaibilityRepository): Response
{
    return $this->render('back/Avaibility/index.html.twig', [
        'availabilities' => $AvaibilityRepository->findAll(),
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
    return $this->render('back/Avaibility/show.html.twig', [
        'Avaibility' => $Avaibility,
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
        $entityManager->remove($Avaibility);
        $entityManager->flush();
    }

    return $this->redirectToRoute('admin_Avaibility_index', [], Response::HTTP_SEE_OTHER);
}









}