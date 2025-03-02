<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BackController extends AbstractController
{
    #[Route('/base', name: 'app_base')]
    public function index(): Response
    {
        return $this->render('back/back_controller_php/indexB.html.twig', [
            'controller_name' => 'BackController',
        ]);
    }
}
