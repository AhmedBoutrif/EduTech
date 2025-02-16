<?php

namespace App\Controller;

use App\Entity\Panier;
use App\Form\PanierType;
use App\Repository\PanierRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/controller/panier')]
final class ControllerPanierController extends AbstractController
{
    #[Route(name: 'app_controller_panier_index', methods: ['GET'])]
    public function index(PanierRepository $panierRepository): Response
    {
        return $this->render('controller_panier/index.html.twig', [
            'paniers' => $panierRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_controller_panier_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $panier = new Panier();  // Création d'une nouvelle instance de Panier
        $form = $this->createForm(PanierType::class, $panier);  // Création du formulaire
        $form->handleRequest($request);  // Traitement de la requête du formulaire

        if ($form->isSubmitted() && $form->isValid()) {
            // Pas d'ID à définir, on persiste simplement l'objet Panier
            $entityManager->persist($panier);
            $entityManager->flush();  // Sauvegarde en base de données

            // Redirection vers la page d'index après création
            return $this->redirectToRoute('app_controller_panier_index', [], Response::HTTP_SEE_OTHER);
        }

        // Si le formulaire est invalide ou non soumis, afficher la vue du formulaire
        return $this->render('controller_panier/new.html.twig', [
            'panier' => $panier,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_controller_panier_show', methods: ['GET'])]
    public function show(Panier $panier): Response
    {
        return $this->render('controller_panier/show.html.twig', [
            'panier' => $panier,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_controller_panier_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Panier $panier, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(PanierType::class, $panier);  // Création du formulaire pour l'édition
        $form->handleRequest($request);  // Traitement de la requête du formulaire

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();  // Sauvegarde des modifications en base de données

            // Redirection vers la page d'index après l'édition
            return $this->redirectToRoute('app_controller_panier_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('controller_panier/edit.html.twig', [
            'panier' => $panier,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_controller_panier_delete', methods: ['POST'])]
    public function delete(Request $request, Panier $panier, EntityManagerInterface $entityManager): Response
    {
        // Vérification du token CSRF pour la suppression
        if ($this->isCsrfTokenValid('delete' . $panier->getId(), $request->request->get('_token'))) {
            $entityManager->remove($panier);  // Suppression du panier
            $entityManager->flush();  // Sauvegarde des changements en base de données
        }

        // Redirection vers la page d'index après suppression
        return $this->redirectToRoute('app_controller_panier_index', [], Response::HTTP_SEE_OTHER);
    }
}
