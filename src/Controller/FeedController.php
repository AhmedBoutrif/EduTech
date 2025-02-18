<?php

namespace App\Controller;

use App\Entity\Feed;
use App\Form\FeedType;
use App\Repository\FeedRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;

#[Route('/feed')]
final class FeedController extends AbstractController
{
    // 🚀 FRONTEND - Afficher la liste des feeds
    #[Route(name: 'app_feed_index', methods: ['GET'])]
    public function index(FeedRepository $feedRepository): Response
    {
        return $this->render('feed/index.html.twig', [
            'feeds' => $feedRepository->findAll(),
        ]);
    }

    // 🚀 BACKOFFICE - Afficher la liste des feeds
    #[Route('/back', name: 'app_feedb_index', methods: ['GET'])]
    public function indexBack(FeedRepository $feedRepository): Response
    {
        return $this->render('back/feed/indexb.html.twig', [
            'feeds' => $feedRepository->findAll(),
        ]);
    }

    // 🚀 FRONTEND - Ajouter un feed
    #[Route('/new', name: 'app_feed_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, ValidatorInterface $validator): Response
    {
        $feed = new Feed();
        $form = $this->createForm(FeedType::class, $feed);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $errors = $validator->validate($feed);

            if (count($errors) > 0) {
                foreach ($errors as $error) {
                    $this->addFlash('error', $error->getMessage());
                }
            } else {
                $entityManager->persist($feed);
                $entityManager->flush();

                $this->addFlash('success', 'Publication ajoutée avec succès!');
                return $this->redirectToRoute('app_feed_index');
            }
        }

        return $this->render('feed/new.html.twig', [
            'feed' => $feed,
            'form' => $form->createView(),
        ]);
    }

    // 🚀 BACKOFFICE - Ajouter un feed
    #[Route('/back/new', name: 'app_feedb_new', methods: ['GET', 'POST'])]
    public function newBack(Request $request, EntityManagerInterface $entityManager, ValidatorInterface $validator): Response
    {
        $feed = new Feed();
        $form = $this->createForm(FeedType::class, $feed);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $errors = $validator->validate($feed);

            if (count($errors) > 0) {
                foreach ($errors as $error) {
                    $this->addFlash('error', $error->getMessage());
                }
            } else {
                $entityManager->persist($feed);
                $entityManager->flush();

                $this->addFlash('success', 'Publication ajoutée avec succès!');
                return $this->redirectToRoute('app_feedb_index');
            }
        }

        return $this->render('back/feed/newb.html.twig', [
            'feed' => $feed,
            'form' => $form->createView(),
        ]);
    }

    // 🚀 FRONTEND - Voir un feed
    #[Route('/{id}', name: 'app_feed_show', methods: ['GET'])]
    public function show(Feed $feed): Response
    {
        return $this->render('feed/show.html.twig', [
           'feed' => $feed,
        ]);
       // return $this->redirectToRoute('app_feed_show', ['id' => $feed->getId()]);
    }

    // 🚀 BACKOFFICE - Voir un feed
    #[Route('/back/{id}', name: 'app_feedb_show', methods: ['GET'])]
    public function showBack(Feed $feed): Response
    {
        return $this->render('back/feed/showb.html.twig', [
            'feed' => $feed,
        ]);
    }

    // 🚀 FRONTEND - Modifier un feed
    #[Route('/{id}/edit', name: 'app_feed_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Feed $feed, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(FeedType::class, $feed);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            return $this->redirectToRoute('app_feed_index');
        }

        return $this->render('feed/edit.html.twig', [
            'feed' => $feed,
            'form' => $form->createView(),
        ]);
    }

    // 🚀 BACKOFFICE - Modifier un feed
    #[Route('/back/{id}/edit', name: 'app_feedb_edit', methods: ['GET', 'POST'])]
    public function editBack(Request $request, Feed $feed, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(FeedType::class, $feed);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            return $this->redirectToRoute('app_feedb_index');
        }

        return $this->render('back/feed/editb.html.twig', [
            'feed' => $feed,
            'form' => $form->createView(),
        ]);
    }

    // 🚀 FRONTEND - Supprimer un feed
    #[Route('/{id}', name: 'app_feed_delete', methods: ['POST'])]
    public function delete(Request $request, Feed $feed, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $feed->getId(), $request->request->get('_token'))) {
            $entityManager->remove($feed);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_feed_index');
    }

    // 🚀 BACKOFFICE - Supprimer un feed
    #[Route('/back/{id}', name: 'app_feedb_delete', methods: ['POST'])]
    public function deleteBack(Request $request, Feed $feed, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $feed->getId(), $request->request->get('_token'))) {
            $entityManager->remove($feed);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_feedb_index');
    }
}