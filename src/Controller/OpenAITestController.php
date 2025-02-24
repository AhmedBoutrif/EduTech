<?php

namespace App\Controller;
namespace App\Controller;

use App\Service\OpenAIService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OpenAITestController extends AbstractController
{
    #[Route('/test-ai', name: 'test_ai')]
    public function test(OpenAIService $openAIService): Response
    {
        $question = "Explique-moi la gravité en physique.";
        $response = $openAIService->generateResponse($question);

        return new Response('<pre>' . htmlspecialchars($response) . '</pre>');
    }
}
