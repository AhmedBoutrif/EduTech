<?php
namespace App\Controller;

use App\Service\HuggingFaceService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ChatController extends AbstractController
{
    #[Route('/chat', name: 'chat')]
    public function chat(HuggingFaceService $huggingFaceService, Request $request): Response
    {
        $responseText = '';
        $error = '';

        if ($request->isMethod('POST')) {
            $message = $request->request->get('message', '');
            if (empty($message)) {
                $error = 'Erreur : Le message ne peut pas être vide.';
            } else {
                try {
                    $responseText = $huggingFaceService->generateResponse($message);
                } catch (\Exception $e) {
                    $error = 'Erreur : ' . $e->getMessage();
                }
            }
        }

        return $this->render('chat/index.html.twig', [
            'response' => $responseText,
            'error' => $error,
        ]);
    }
}