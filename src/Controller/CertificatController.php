<?php

namespace App\Controller;

use App\Entity\Certificat;
use App\Form\CertificatType;
use App\Repository\CertificatRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Validator\Constraints\NotBlank;

#[Route('/certificat')]
final class CertificatController extends AbstractController
{
    #[Route(name: 'app_certificat_index', methods: ['GET'])]
    public function index(CertificatRepository $certificatRepository): Response
    {
        return $this->render('certificat/index.html.twig', [
            'certificats' => $certificatRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_certificat_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $certificat = new Certificat();
        $form = $this->createForm(CertificatType::class, $certificat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $questions = $certificat->getQuestionc();
            $options = $certificat->getOptions();
            $reponses = $certificat->getReponseCorrecte();

            // Structurer les données sous forme d'un tableau organisé
            $structuredData = [];
            for ($i = 0; $i < count($questions); $i++) {
                $structuredData[] = [
                    'question' => $questions[$i] ?? '',
                    'options' => $options[$i] ?? [],
                    'reponse_correcte' => $reponses[$i] ?? '',
                ];
            }

            // Sauvegarde sous forme JSON
            $certificat->setQuestionc($structuredData);
            $entityManager->persist($certificat);
            $entityManager->flush();

            return $this->redirectToRoute('app_certificat_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('certificat/new.html.twig', [
            'certificat' => $certificat,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_certificat_show', methods: ['GET'])]
    public function show(Certificat $certificat): Response
    {
        return $this->render('certificat/show.html.twig', [
            'certificat' => $certificat,
            'questions' => $certificat->getQuestionc(),
            'options' => $certificat->getOptions(),
            'reponsesCorrectes' => $certificat->getReponseCorrecte(),
            'reponsesUtilisateur' => $certificat->getReponseUtilisateur(),
        ]);
    }

    #[Route('/{id}/edit', name: 'app_certificat_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Certificat $certificat, EntityManagerInterface $entityManager): Response
    {
        // Créez le formulaire de modification pour le certificat
        $form = $this->createForm(CertificatType::class, $certificat);

        // Gérer la soumission du formulaire
        $form->handleRequest($request);

        // Si le formulaire est soumis et valide, effectuez les modifications
        if ($form->isSubmitted() && $form->isValid()) {
            // Sauvegarde des changements dans la base de données
            $entityManager->flush();

            // Rediriger vers la liste des certificats après la mise à jour
            return $this->redirectToRoute('app_certificat_index', [], Response::HTTP_SEE_OTHER);
        }

        // Passer l'objet Certificat et le formulaire au template
        return $this->render('certificat/edit.html.twig', [
            'certificat' => $certificat,
            'form' => $form->createView(),
        ]);
    }


    #[Route('/certificat/{id}', name: 'app_certificat_delete', requirements: ['id' => '\\d+'], methods: ['POST'])]
    public function delete(Request $request, Certificat $certificat, EntityManagerInterface $entityManager): Response
    {
        // Vérifier si le token CSRF est valide
        if ($this->isCsrfTokenValid('delete' . $certificat->getId(), $request->request->get('_token'))) {
            // Supprimer l'entité Certificat de la base de données
            $entityManager->remove($certificat);
            $entityManager->flush();
    
            // Ajouter un message flash de succès
            $this->addFlash('success', 'Certificat supprimé avec succès !');
        } else {
            // Ajouter un message flash d'erreur si le token CSRF est invalide
            $this->addFlash('error', 'Token CSRF invalide. La suppression a échoué.');
        }
    
        // Rediriger vers la liste des certificats après suppression
        return $this->redirectToRoute('app_certificat_index');
    }
    


    #[Route('/certificat/{id}/jouer', name: 'app_certificat_jouer')]
    public function jouer(int $id, CertificatRepository $certificatRepository): Response
    {
        $certificat = $certificatRepository->find($id);
    
        if (!$certificat) {
            throw $this->createNotFoundException('Certificat non trouvé');
        }
    
        return $this->render('certificat/jouer.html.twig', [
            'certificat' => $certificat,
        ]);
    }


























    #[Route('/back/certificat', name: 'app_certificatb_index', methods: ['GET'])]
    public function indexb(CertificatRepository $certificatRepository): Response
    {
        return $this->render('back/certificat/index.html.twig', [
            'certificats' => $certificatRepository->findAll(),
        ]);
    }

    #[Route('/back/new', name: 'app_certificatb_new', methods: ['GET', 'POST'])]
    public function newb(Request $request, EntityManagerInterface $entityManager): Response
    {
        $certificat = new Certificat();
        $form = $this->createForm(CertificatType::class, $certificat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $questions = $certificat->getQuestionc();
            $options = $certificat->getOptions();
            $reponses = $certificat->getReponseCorrecte();

            // Structurer les données sous forme d'un tableau organisé
            $structuredData = [];
            for ($i = 0; $i < count($questions); $i++) {
                $structuredData[] = [
                    'question' => $questions[$i] ?? '',
                    'options' => $options[$i] ?? [],
                    'reponse_correcte' => $reponses[$i] ?? '',
                ];
            }

            // Sauvegarde sous forme JSON
            $certificat->setQuestionc($structuredData);
            $entityManager->persist($certificat);
            $entityManager->flush();

            return $this->redirectToRoute('app_certificatb_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('/back/certificat/new.html.twig', [
            'certificat' => $certificat,
            'form' => $form,
        ]);
    }

    #[Route('back/{id}', name: 'app_certificatb_show', methods: ['GET'])]
    public function showb(Certificat $certificat): Response
    {
        return $this->render('/back/certificat/show.html.twig', [
            'certificat' => $certificat,
        ]);
    }

    #[Route('/back/{id}/edit', name: 'app_certificatb_edit', methods: ['GET', 'POST'])]
    public function editb(Request $request, Certificat $certificat, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CertificatType::class, $certificat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_certificat_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('/back/certificat/edit.html.twig', [
            'certificat' => $certificat,
            'form' => $form,
        ]);
    }

    #[Route('/back/{id}', name: 'app_certificatb_delete', methods: ['POST'])]
    public function deleteb(Request $request, Certificat $certificat, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$certificat->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($certificat);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_certificatb_index', [], Response::HTTP_SEE_OTHER);
    }
}
