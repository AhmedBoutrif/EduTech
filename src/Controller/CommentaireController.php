<?php

namespace App\Controller;
use App\Entity\Feed;
use App\Entity\Commentaire;
use App\Form\CommentaireType;
use App\Repository\CommentaireRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;


#[Route('/commentaire')]
final class CommentaireController extends AbstractController
{
    private CommentaireRepository $commentaireRepository;
    private EntityManagerInterface $entityManager;

    public function __construct(CommentaireRepository $commentaireRepository, EntityManagerInterface $entityManager)
    {
        $this->commentaireRepository = $commentaireRepository;
        $this->entityManager = $entityManager;
    }

 #[Route(name: 'app_commentaire_index', methods: ['GET'])]
public function index(EntityManagerInterface $entityManager): Response
{
    return $this->render('commentaire/index.html.twig', [
        'commentaires' => $entityManager->getRepository(Commentaire::class)->findAll(),
        'feeds' => $entityManager->getRepository(Feed::class)->findAll(), // ✅ Add this line
        'commentaire'=> !empty($commentaires) ? $commentaires[0] : null, // ✅ Définit un commentaire
    ]);
}

    
    // 🚀 BACKOFFICE - Afficher la liste des commentaires
    #[Route('/back', name: 'app_commentaireb_index', methods: ['GET'])]
    public function indexBack(): Response
    {
        return $this->render('back/commentaire/indexb.html.twig', [
            'commentaires' => $this->commentaireRepository->findAll(),
        ]);
    }

    #[Route('/feed/{id}/commentaire/new', name: 'app_commentaire_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ValidatorInterface $validator, EntityManagerInterface $entityManager, $id): Response
    {
        $feed = $entityManager->getRepository(Feed::class)->find($id);
        
        if (!$feed) {
            throw new NotFoundHttpException('Feed not found');
        }
    
        // Créer un nouveau commentaire et l'associer au Feed
        $commentaire = new Commentaire();
        $commentaire->setFeed($feed);
    
        // Créer et gérer le formulaire
        $form = $this->createForm(CommentaireType::class, $commentaire);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            if ($this->commentaireRepository->findDuplicateComment($commentaire->getContenu())) {
                $this->addFlash('error', 'Ce commentaire a déjà été publié.');
            } else {
                $this->entityManager->persist($commentaire);
                $this->entityManager->flush();
    
                $this->addFlash('success', 'Commentaire ajouté avec succès!');
                return $this->redirectToRoute('app_commentaire_index'); // ✅ Always return a Response
            }
        }
    
        // ✅ Always return a Response to avoid the error
        return $this->render('commentaire/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    

    
    

    // 🚀 BACKOFFICE - Ajouter un commentaire
    #[Route('/back/new', name: 'app_commentaireb_new', methods: ['GET', 'POST'])]
    public function newBack(Request $request, ValidatorInterface $validator): Response
    {
        $commentaire = new Commentaire();
        $form = $this->createForm(CommentaireType::class, $commentaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if ($this->commentaireRepository->findDuplicateComment($commentaire->getContenu())) {
                $this->addFlash('error', 'Ce commentaire a déjà été publié.');
            } else {
                $this->entityManager->persist($commentaire);
                $this->entityManager->flush();

                $this->addFlash('success', 'Commentaire ajouté avec succès!');
                return $this->redirectToRoute('app_commentaireb_index');
            }
        }

        return $this->render('back/commentaire/newb.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    // 🚀 FRONTEND - Voir un commentaire
    #[Route('/{id}', name: 'app_commentaire_show', methods: ['GET'])]
    public function show(Commentaire $commentaire): Response
    {
        return $this->render('commentaire/show.html.twig', [
            'commentaire' => $commentaire,
        ]);
    }

    // 🚀 BACKOFFICE - Voir un commentaire
    #[Route('/back/{id}', name: 'app_commentaireb_show', methods: ['GET'])]
    public function showBack(Commentaire $commentaire): Response
    {
        return $this->render('back/commentaire/showb.html.twig', [
            'commentaire' => $commentaire,
        ]);
    }

    // 🚀 FRONTEND - Modifier un commentaire
    #[Route('/{id}/edit', name: 'app_commentaire_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Commentaire $commentaire, ValidatorInterface $validator): Response
    {
        $form = $this->createForm(CommentaireType::class, $commentaire);
        $form->handleRequest($request);
        

        if ($form->isSubmitted() && $form->isValid()) {
            if ($this->commentaireRepository->findDuplicateComment($commentaire->getContenu())) {
                $this->addFlash('error', 'Ce commentaire existe déjà.');
            } else {
                $this->entityManager->flush();
                $this->addFlash('success', 'Commentaire mis à jour avec succès!');
                return $this->redirectToRoute('app_commentaire_index');
            }
        }

        return $this->render('commentaire/edit.html.twig', [
            'form' => $form->createView(),
            'commentaire' => $commentaire,
        ]);
    }

    // 🚀 BACKOFFICE - Modifier un commentaire
    #[Route('/back/{id}/edit', name: 'app_commentaireb_edit', methods: ['GET', 'POST'])]
    public function editBack(Request $request, Commentaire $commentaire, ValidatorInterface $validator): Response
    {
        $form = $this->createForm(CommentaireType::class, $commentaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if ($this->commentaireRepository->findDuplicateComment($commentaire->getContenu())) {
                $this->addFlash('error', 'Ce commentaire existe déjà.');
            } else {
                $this->entityManager->flush();
                $this->addFlash('success', 'Commentaire mis à jour avec succès!');
                return $this->redirectToRoute('app_commentaireb_index');
            }
        }

        return $this->render('back/commentaire/editb.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    // 🚀 FRONTEND - Supprimer un commentaire
    #[Route('/{id}', name: 'app_commentaire_delete', methods: ['POST'])]
    public function delete(Request $request, Commentaire $commentaire): Response
    {
        if ($this->isCsrfTokenValid('delete' . $commentaire->getId(), $request->request->get('_token'))) {
            $this->entityManager->remove($commentaire);
            $this->entityManager->flush();
        }

        return $this->redirectToRoute('app_commentaire_index');
    }

    // 🚀 BACKOFFICE - Supprimer un commentaire
    #[Route('/back/{id}', name: 'app_commentaireb_delete', methods: ['POST'])]
    public function deleteBack(Request $request, Commentaire $commentaire): Response
    {
        if ($this->isCsrfTokenValid('delete' . $commentaire->getId(), $request->request->get('_token'))) {
            $this->entityManager->remove($commentaire);
            $this->entityManager->flush();
        }

        return $this->redirectToRoute('app_commentaireb_index');
    }
}
