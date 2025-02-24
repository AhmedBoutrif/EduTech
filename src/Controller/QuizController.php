<?php

namespace App\Controller;
use Symfony\Component\Serializer\SerializerInterface;

use App\Entity\Quiz;
use App\Form\QuizType;
use App\Repository\QuizRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/quiz')]
final class QuizController extends AbstractController
{
    #[Route(name: 'app_quiz_index', methods: ['GET'])]
    public function index(QuizRepository $quizRepository): Response
    {
        return $this->render('quiz/index.html.twig', [
            'quizzes' => $quizRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_quiz_new', methods: ['GET', 'POST'])]
public function new(Request $request, EntityManagerInterface $entityManager): Response
{
    // Créer une nouvelle instance de Quiz
    $quiz = new Quiz();

    // Créer le formulaire pour Quiz
    $form = $this->createForm(QuizType::class, $quiz);
    $form->handleRequest($request);

    // Vérifier si le formulaire a été soumis et est valide
    if ($form->isSubmitted()) {
        if ($form->isValid()) {
            // Si le formulaire est valide, enregistrer l'objet Quiz en base de données
            $entityManager->persist($quiz);
            $entityManager->flush();

            // Rediriger vers l'index des quiz après l'ajout
            return $this->redirectToRoute('app_quiz_index');
        } else {
            // Si le formulaire n'est pas valide, vous pouvez afficher les erreurs de validation
            $this->addFlash('error', 'Le formulaire contient des erreurs. Veuillez corriger les champs.');
        }
    }

    // Rendre la vue avec le formulaire
    return $this->render('quiz/new.html.twig', [
        'quiz' => $quiz,
        'form' => $form->createView(),
    ]);
}


    
#[Route('/quiz/{id}/result', name: 'app_quiz_result', methods: ['GET'])]
public function result(Quiz $quiz): Response
{
    return $this->render('quiz/result.html.twig', [
        'quiz' => $quiz,
    ]);
}


#[Route('/{id}', name: 'app_quiz_show', methods: ['GET'])]
public function show(Quiz $quiz): Response
{
    // Supposons que ces méthodes retournent déjà des tableaux
    $questions = $quiz->getQuestions() ?? [];
    $options = $quiz->getOptions() ?? [];
    $reponsesCorrectes = $quiz->getReponsesCorrectes() ?? [];
    $reponsesUtilisateur = $quiz->getReponsesUtilisateur() ?? [];

    return $this->render('quiz/show.html.twig', [
        'quiz' => $quiz,
        'questions' => $questions,
        'options' => $options,
        'reponsesCorrectes' => $reponsesCorrectes,
        'reponsesUtilisateur' => $reponsesUtilisateur,
    ]);
}

#[Route('/{id}', name: 'app_quiz_delete', requirements: ['id' => '\\d+'], methods: ['DELETE', 'POST'])]
public function delete(Request $request, Quiz $quiz, EntityManagerInterface $entityManager): Response
{
    // Vérifier le token CSRF
    if ($this->isCsrfTokenValid('delete' . $quiz->getId(), $request->request->get('_token'))) {
        // Supprimer l'entité Quiz de la base de données
        $entityManager->remove($quiz);
        $entityManager->flush();

        // Ajouter un message de succès
        $this->addFlash('success', 'Quiz supprimé avec succès !');
    } else {
        // Ajouter un message d'erreur si le token CSRF est invalide
        $this->addFlash('error', 'Token CSRF invalide. La suppression a échoué.');
    }

    // Rediriger vers la liste des quiz
    return $this->redirectToRoute('app_quiz_index');
}
    #[Route('/{id}/edit', name: 'app_quiz_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Quiz $quiz, EntityManagerInterface $entityManager): Response
    {
        // Créez le formulaire de modification pour le quiz
        $form = $this->createForm(QuizType::class, $quiz);
    
        // Gérer la soumission du formulaire
        $form->handleRequest($request);
    
        // Si le formulaire est soumis et valide, effectuez les modifications
        if ($form->isSubmitted() && $form->isValid()) {
            // Sauvegarde des changements dans la base de données
            $entityManager->flush();
    
            // Rediriger vers la liste des quiz après la mise à jour
            return $this->redirectToRoute('app_quiz_index', [], Response::HTTP_SEE_OTHER);
        }
    
        // Récupérer les données nécessaires pour le template
        $questions = $quiz->getQuestions() ?? [];
        $options = $quiz->getOptions() ?? [];
        $reponsesCorrectes = $quiz->getReponsesCorrectes() ?? [];
        $reponsesUtilisateur = $quiz->getReponsesUtilisateur() ?? [];
    
        // Passer l'objet Quiz, le formulaire et les données au template
        return $this->render('quiz/edit.html.twig', [
            'quiz' => $quiz,
            'form' => $form->createView(),
            'questions' => $questions,
            'options' => $options,
            'reponsesCorrectes' => $reponsesCorrectes,
            'reponsesUtilisateur' => $reponsesUtilisateur,
        ]);
    }

    #[Route('/quiz/{id}/play', name: 'app_quiz_play', methods: ['GET', 'POST'])]
    public function playAction(Request $request, Quiz $quiz, EntityManagerInterface $entityManager): Response
    {
        // Initialisation de la note
        $note = 0;
    
        // Traitement du formulaire soumis
        if ($request->isMethod('POST')) {
            // Récupérer les réponses de l'utilisateur
            $reponsesUtilisateur = $request->request->all()['reponsesUtilisateur'] ?? [];
    
            // Comparer les réponses et calculer la note
            foreach ($quiz->getQuestions() as $question) {
                $questionId = $question->getId();
                if (isset($reponsesUtilisateur[$questionId])) {
                    if ($reponsesUtilisateur[$questionId] === $question->getReponseCorrecte()) {
                        $note += 5; // 5 points par réponse correcte
                    }
                }
            }
    
            // Sauvegarder la note dans l'entité Quiz
            $quiz->setNote($note);
            $entityManager->flush();
        }
    
        // Afficher le formulaire et les résultats
        return $this->render('quiz/play.html.twig', [
            'quiz' => $quiz,
            'note' => $note,
            'prixPiece' => 10, // Exemple de prix de la pièce
        ]);
    }






















#[Route('/back/quiz', name: 'app_quizb_index', methods: ['GET'])]
public function indexb(QuizRepository $quizRepository): Response
{
    return $this->render('back/quiz/index.html.twig', [
        'quizzes' => $quizRepository->findAll(),
    ]);
}

#[Route('/back/new', name: 'app_quizb_new', methods: ['GET', 'POST'])]
    public function newb(Request $request, EntityManagerInterface $entityManager): Response
    {
        $quiz = new Quiz();
        $form = $this->createForm(QuizType::class, $quiz);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($quiz);
            $entityManager->flush();

            return $this->redirectToRoute('app_quizb_index');
        }

        return $this->render('/back/quiz/new.html.twig', [
            'quiz' => $quiz,
            'form' => $form->createView(),
        ]);
    }

    
#[Route('/back/quiz/{id}/result', name: 'app_quizb_result', methods: ['GET'])]
public function resultb(Quiz $quiz): Response
{
    return $this->render('/back/quiz/result.html.twig', [
        'quiz' => $quiz,
    ]);
}


#[Route('/back/{id}', name: 'app_quizb_show', methods: ['GET'])]
public function showb(Quiz $quiz): Response
{
    // Supposons que ces méthodes retournent déjà des tableaux
    $questions = $quiz->getQuestions() ?? [];
    $options = $quiz->getOptions() ?? [];
    $reponsesCorrectes = $quiz->getReponsesCorrectes() ?? [];
    $reponsesUtilisateur = $quiz->getReponsesUtilisateur() ?? [];

    return $this->render('/back/quiz/show.html.twig', [
        'quiz' => $quiz,
        'questions' => $questions,
        'options' => $options,
        'reponsesCorrectes' => $reponsesCorrectes,
        'reponsesUtilisateur' => $reponsesUtilisateur,
    ]);
}

#[Route('/back/{id}', name: 'app_quizb_delete', requirements: ['id' => '\\d+'], methods: ['DELETE', 'POST'])]
public function deleteb(Request $request, Quiz $quiz, EntityManagerInterface $entityManager): Response
{
    // Vérifier le token CSRF
    if ($this->isCsrfTokenValid('delete' . $quiz->getId(), $request->request->get('_token'))) {
        // Supprimer l'entité Quiz de la base de données
        $entityManager->remove($quiz);
        $entityManager->flush();

        // Ajouter un message de succès
        $this->addFlash('success', 'Quiz supprimé avec succès !');
    } else {
        // Ajouter un message d'erreur si le token CSRF est invalide
        $this->addFlash('error', 'Token CSRF invalide. La suppression a échoué.');
    }

    // Rediriger vers la liste des quiz
    return $this->redirectToRoute('app_quizb_index');
}
    #[Route('/back/{id}/edit', name: 'app_quizb_edit', methods: ['GET', 'POST'])]
    public function editb(Request $request, Quiz $quiz, EntityManagerInterface $entityManager): Response
    {
        // Créez le formulaire de modification pour le quiz
        $form = $this->createForm(QuizType::class, $quiz);
    
        // Gérer la soumission du formulaire
        $form->handleRequest($request);
    
        // Si le formulaire est soumis et valide, effectuez les modifications
        if ($form->isSubmitted() && $form->isValid()) {
            // Sauvegarde des changements dans la base de données
            $entityManager->flush();
    
            // Rediriger vers la liste des quiz après la mise à jour
            return $this->redirectToRoute('app_quizb_index', [], Response::HTTP_SEE_OTHER);
        }
    
        // Récupérer les données nécessaires pour le template
        $questions = $quiz->getQuestions() ?? [];
        $options = $quiz->getOptions() ?? [];
        $reponsesCorrectes = $quiz->getReponsesCorrectes() ?? [];
        $reponsesUtilisateur = $quiz->getReponsesUtilisateur() ?? [];
    
        // Passer l'objet Quiz, le formulaire et les données au template
        return $this->render('/back/quiz/edit.html.twig', [
            'quiz' => $quiz,
            'form' => $form->createView(),
            'questions' => $questions,
            'options' => $options,
            'reponsesCorrectes' => $reponsesCorrectes,
            'reponsesUtilisateur' => $reponsesUtilisateur,
        ]);
    }
// Controller
#[Route('/back/quiz/{id}/play', name: 'app_quizb_play', methods: ['GET', 'POST'])]
    public function playActionb(Request $request, Quiz $quiz, EntityManagerInterface $entityManager): Response
    {
        // Récupérer les données du quiz
        $questions = $quiz->getQuestions();
        $options = $quiz->getOptions();
        $reponsesCorrectes = $quiz->getReponsesCorrectes();
    
        // Vérifier si les données sont sérialisées
        try {
            $questions = is_string($questions) ? unserialize($questions) : $questions;
            $options = is_string($options) ? unserialize($options) : $options;
            $reponsesCorrectes = is_string($reponsesCorrectes) ? unserialize($reponsesCorrectes) : $reponsesCorrectes;
        } catch (\Exception $e) {
            // En cas d'erreur de désérialisation, traiter les données comme un tableau
            $questions = is_array($questions) ? $questions : [$questions];
            $options = is_array($options) ? $options : [$options];
            $reponsesCorrectes = is_array($reponsesCorrectes) ? $reponsesCorrectes : [$reponsesCorrectes];
        }
    
        // Organiser les données pour le template
        $quizData = [];
        foreach ($questions as $index => $question) {
            $quizData[] = [
                'question' => $question,
                'options' => $options[$index] ?? [],
                'correctAnswer' => $reponsesCorrectes[$index] ?? null,
            ];
        }
    
        // Traiter la soumission du formulaire
        if ($request->isMethod('POST')) {
            $reponsesUtilisateur = json_decode($request->request->get('reponsesUtilisateur'), true);
    
            // Traiter les réponses de l'utilisateur
            foreach ($reponsesUtilisateur as $questionIndex => $reponse) {
                // Comparer avec la réponse correcte
                if ($reponse === ($reponsesCorrectes[$questionIndex] ?? null)) {
                    // Réponse correcte
                } else {
                    // Réponse incorrecte
                }
            }
    
            // Rediriger ou afficher un message de résultat
            return $this->redirectToRoute('app_quizb_result', ['id' => $quiz->getId()]);
        }
    
        // Afficher le template
        return $this->render('/back/quiz/play.html.twig', [
            'quiz' => $quiz,
            'quizData' => $quizData,
        ]);
    }
    




}