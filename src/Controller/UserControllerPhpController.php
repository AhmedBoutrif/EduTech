<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserControllerPhpController extends AbstractController
{
    #[Route('/userback', name: 'app_userback')]  
    public function index(): Response
    {
        return $this->render('back/user_controller_php/user.html.twig', [ 
            'controller_name' => 'UserControllerPhpController',
        ]);
    }
}
