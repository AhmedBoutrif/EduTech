<?php

namespace App\Controller;

use App\Entity\Quiz; // Assurez-vous d'importer votre entité Quiz
use App\Repository\QuizRepository; 
use App\Entity\Cours;
use App\Form\CoursType;
use App\Repository\CoursRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;

#[Route('/cours')]
final class CoursController extends AbstractController
{
    // Front-end routes
    #[Route(name: 'app_cours_index', methods: ['GET'])]
    public function index(CoursRepository $coursRepository): Response
    {
        return $this->render('cours/index.html.twig', [
            'cours' => $coursRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_cours_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $cours = new Cours();
        $form = $this->createForm(CoursType::class, $cours, [
            'csrf_protection' => false, // Disable CSRF protection
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $pdfFile */
            $pdfFile = $form->get('contenu')->getData(); // Utilisez 'contenu' ici

            // Enregistrez d'abord le cours sans le fichier
            $entityManager->persist($cours);
            $entityManager->flush(); // Cela va générer l'ID du cours

            if ($pdfFile) {
                $originalFilename = pathinfo($pdfFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = 'cours_' . $cours->getId() . '-' . $safeFilename . '.' . $pdfFile->guessExtension(); // Enregistre le nom du fichier avec l'ID du cours

                try {
                    $pdfFile->move(
                        $this->getParameter('pdf_directory'),
                        $newFilename
                    );
                    $cours->setContenu($newFilename); // Enregistre le nom du fichier PDF
                } catch (FileException $e) {
                    $this->addFlash('error', 'Erreur lors du téléchargement du fichier PDF.');
                    return $this->redirectToRoute('app_cours_new');
                }

                // Mettez à jour l'entité avec le nouveau nom de fichier
                $entityManager->flush(); // Enregistrez les modifications
            }

            $this->addFlash('success', 'Cours ajouté avec succès !');
            return $this->redirectToRoute('app_cours_index');
        }

        return $this->render('cours/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    

    #[Route('/{id}', name: 'app_cours_show', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function show(Cours $cours): Response
    {
        // Chemin complet vers le fichier PDF
        $filePath = $this->getParameter('pdf_directory') . '/' . $cours->getContenu();
        // Vérifiez si le fichier existe
        $fileExists = file_exists($filePath);

        return $this->render('cours/show.html.twig', [
            'cours' => $cours,
            'fileExists' => $fileExists, // Passez l'information à la vue
        ]);
    }

    #[Route('/{id}', name: 'app_cours_delete', requirements: ['id' => '\\d+'], methods: ['DELETE', 'POST'])]
    public function delete(Request $request, Cours $cours, EntityManagerInterface $entityManager): Response
    {
        // Delete the associated file if it exists
        $filePath = $this->getParameter('pdf_directory') . '/' . $cours->getContenu();
        if (file_exists($filePath)) {
            unlink($filePath); // Delete the file from the server
        }

        // Remove the entity from the database
        $entityManager->remove($cours);
        $entityManager->flush();

        $this->addFlash('success', 'Cours supprimé avec succès !');
        return $this->redirectToRoute('app_cours_index');
    }

    #[Route('/{id}/edit', name: 'app_cours_edit', requirements: ['id' => '\d+'], methods: ['GET', 'POST'])]
    public function edit(Request $request, Cours $cours, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $form = $this->createForm(CoursType::class, $cours, [
            'csrf_protection' => false, // Disable CSRF protection
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile|null $pdfFile */
            $pdfFile = $form->get('contenu')->getData(); // Get the uploaded file

            // Handle file upload only if a new file is provided
            if ($pdfFile) {
                $originalFilename = pathinfo($pdfFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = 'cours_' . $cours->getId() . '-' . $safeFilename . '.' . $pdfFile->guessExtension();

                try {
                    $pdfFile->move(
                        $this->getParameter('pdf_directory'),
                        $newFilename
                    );
                    $cours->setContenu($newFilename); // Update the file name in the entity
                } catch (FileException $e) {
                    $this->addFlash('error', 'Erreur lors du téléchargement du fichier PDF.');
                    return $this->redirectToRoute('app_cours_edit', ['id' => $cours->getId()]);
                }
            }

            $entityManager->flush();

            $this->addFlash('success', 'Cours modifié avec succès !');
            return $this->redirectToRoute('app_cours_index');
        }

        return $this->render('cours/edit.html.twig', [
            'cours' => $cours,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/cours/{id}/blogdetails', name: 'app_cours_blogdetails')]
public function details(
    int $id,
    CoursRepository $coursRepository
): Response {
    // Récupérer le cours
    $cours = $coursRepository->find($id);

    if (!$cours) {
        throw $this->createNotFoundException('Cours non trouvé');
    }

    // Récupérer les quiz associés au cours via la relation OneToMany
    $quizzes = $cours->getQuizzes();

    // Récupérer le certificat associé au cours
    $certificat = $cours->getCertificat();

    // Passer les données au template
    return $this->render('cours/blog-details.html.twig', [
        'cours' => $cours,
        'quizzes' => $quizzes, // Passer les quiz au template
        'certificat' => $certificat, // Passer le certificat au template
    ]);
}

    #[Route('/afficherblog', name: 'app_blog', methods: ['GET'])]
    public function affichier(CoursRepository $coursRepository): Response
    {
        return $this->render('cours/blog.html.twig', [
            'cours' => $coursRepository->findAll(),
        ]);
    }
















































    // Back-office routes
    #[Route('/back', name: 'app_coursb_index', methods: ['GET'])]
    public function indexBack(CoursRepository $coursRepository): Response
    {
        return $this->render('back/cours/coursb.html.twig', [
            'cours' => $coursRepository->findAll(),
        ]);
    }

    #[Route('/back/new', name: 'app_coursb_new', methods: ['GET', 'POST'])]
    public function newBack(Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $cours = new Cours();
        $form = $this->createForm(CoursType::class, $cours, [
            'csrf_protection' => false, // Disable CSRF protection
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $pdfFile */
            $pdfFile = $form->get('contenu')->getData(); // Utilisez 'contenu' ici

            // Enregistrez d'abord le cours sans le fichier
            $entityManager->persist($cours);
            $entityManager->flush(); // Cela va générer l'ID du cours

            if ($pdfFile) {
                $originalFilename = pathinfo($pdfFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = 'cours_' . $cours->getId() . '-' . $safeFilename . '.' . $pdfFile->guessExtension(); // Enregistre le nom du fichier avec l'ID du cours

                try {
                    $pdfFile->move(
                        $this->getParameter('pdf_directory'),
                        $newFilename
                    );
                    $cours->setContenu($newFilename); // Enregistre le nom du fichier PDF
                } catch (FileException $e) {
                    $this->addFlash('error', 'Erreur lors du téléchargement du fichier PDF.');
                    return $this->redirectToRoute('app_coursb_new');
                }

                // Mettez à jour l'entité avec le nouveau nom de fichier
                $entityManager->flush(); // Enregistrez les modifications
            }

            $this->addFlash('success', 'Cours ajouté avec succès !');
            return $this->redirectToRoute('app_coursb_index');
        }

        return $this->render('back/cours/newb.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/back/{id}', name: 'app_coursb_show', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function showBack(Cours $cours): Response
    {
        // Chemin complet vers le fichier PDF
        $filePath = $this->getParameter('pdf_directory') . '/' . $cours->getContenu();
        // Vérifiez si le fichier existe
        $fileExists = file_exists($filePath);

        return $this->render('back/cours/showb.html.twig', [
            'cours' => $cours,
            'fileExists' => $fileExists, // Passez l'information à la vue
        ]);
    }

    #[Route('/back/{id}/edit', name: 'app_coursb_edit', requirements: ['id' => '\d+'], methods: ['GET', 'POST'])]
    public function editBack(Request $request, Cours $cours, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $form = $this->createForm(CoursType::class, $cours, [
            'csrf_protection' => false, // Disable CSRF protection
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile|null $pdfFile */
            $pdfFile = $form->get('contenu')->getData(); // Get the uploaded file

            // Handle file upload only if a new file is provided
            if ($pdfFile) {
                $originalFilename = pathinfo($pdfFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = 'cours_' . $cours->getId() . '-' . $safeFilename . '.' . $pdfFile->guessExtension();

                try {
                    $pdfFile->move(
                        $this->getParameter('pdf_directory'),
                        $newFilename
                    );
                    $cours->setContenu($newFilename); // Update the file name in the entity
                } catch (FileException $e) {
                    $this->addFlash('error', 'Erreur lors du téléchargement du fichier PDF.');
                    return $this->redirectToRoute('app_coursb_edit', ['id' => $cours->getId()]);
                }
            }

            $entityManager->flush();

            $this->addFlash('success', 'Cours modifié avec succès !');
            return $this->redirectToRoute('app_coursb_index');
        }

        return $this->render('back/cours/editb.html.twig', [
            'cours' => $cours,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/back/{id}', name: 'app_coursb_delete', requirements: ['id' => '\\d+'], methods: ['DELETE', 'POST'])]
    public function deleteBack(Request $request, Cours $cours, EntityManagerInterface $entityManager): Response
    {
        // Delete the associated file if it exists
        $filePath = $this->getParameter('pdf_directory') . '/' . $cours->getContenu();
        if (file_exists($filePath)) {
            unlink($filePath); // Delete the file from the server
        }

        // Remove the entity from the database
        $entityManager->remove($cours);
        $entityManager->flush();

        $this->addFlash('success', 'Cours supprimé avec succès !');
        return $this->redirectToRoute('app_coursb_index');
    }
}