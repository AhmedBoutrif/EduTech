<?php
namespace App\Service;
use Symfony\Contracts\HttpClient\HttpClientInterface; // Utilisez cette interface

class HuggingFaceService
{
    private HttpClientInterface $httpClient;
    private string $apiToken;

    public function __construct(HttpClientInterface $httpClient, string $apiToken)
    {
        $this->httpClient = $httpClient;
        $this->apiToken = $apiToken;
    }

    public function generateResponse(string $prompt): string
    {
        $response = $this->httpClient->request('POST', 'https://api-inference.huggingface.co/models/gpt2', [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->apiToken,
                'Content-Type' => 'application/json',
            ],
            'json' => [
                'inputs' => $prompt,
            ],
        ]);

        $data = $response->toArray();

        return $data[0]['generated_text'] ?? 'Aucune réponse générée.';
    }
}