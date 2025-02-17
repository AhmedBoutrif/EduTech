<?php

namespace App\Controller;

use App\Entity\Favorite;
use App\Entity\User;
use App\Entity\Certification;
use App\Form\FavoriteType;
use App\Repository\FavoriteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/favorite')]
final class FavoriteController extends AbstractController
{
    #[Route(name: 'app_favorite_index', methods: ['GET'])]
    public function index(FavoriteRepository $favoriteRepository): Response
    {
        return $this->render('home/favorite.html.twig', [
            'favorites' => $favoriteRepository->findFavoritesByUserId(1),
        ]);
    }

    #[Route('/new', name: 'app_favorite_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, FavoriteRepository $favoriteRepository): Response
    {
       
        $user = 1 ; 
        $certificationId = $request->get('certification_id');

        $certification1 = $entityManager->getRepository(Certification::class)->find($certificationId);

        if (!$certification1) {
            $this->addFlash('error', 'Certification non trouvée.');
            return $this->redirectToRoute('app_certification_index');
        }


        $existingFavorite = $favoriteRepository->findOneByUserAndCertification($user, $certification1);

        if ($existingFavorite) {
            $this->addFlash('info', 'Cette certification est déjà dans vos favoris.');
            return $this->redirectToRoute('app_certification_index');
        }
        $user = $entityManager->getRepository(User::class)->find(1);

        $favorite = new Favorite();
        $favorite->setUserId($user); 
        $favorite->setCertification($certification1);

        $entityManager->persist($favorite);
        $entityManager->flush();

        $this->addFlash('success', 'Certification ajoutée à vos favoris !');

        return $this->redirectToRoute('app_certification_index');
    }



    #[Route('/{id}', name: 'app_favorite_show', methods: ['GET'])]
    public function show(Favorite $favorite): Response
    {
        return $this->render('favorite/show.html.twig', [
            'favorite' => $favorite,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_favorite_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Favorite $favorite, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(FavoriteType::class, $favorite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_favorite_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('favorite/edit.html.twig', [
            'favorite' => $favorite,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_favorite_delete', methods: ['POST'])]
    public function delete(Request $request, Favorite $favorite, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $favorite->getId(), $request->request->get('_token'))) {
            $entityManager->remove($favorite);
            $entityManager->flush();
            $this->addFlash('success', 'Certification supprimée de vos favoris !');
        } else {
            $this->addFlash('error', 'Token CSRF invalide.');
        }
    
        return $this->redirectToRoute('app_favorite_index');
    }
    
}
