<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(): Response
    {
        // Check if user is authenticated
        if (!$this->getUser()) {
            // Not logged in
            return $this->redirectToRoute('app_login');
        }
        
        // Dump user roles for debugging
        $roles = $this->getUser()->getRoles();
        // Uncomment for debugging: dump($roles);
        
        return $this->render('home/index.html.twig', [
            'title' => 'Bienvenue sur Symfony !',
            'message' => 'Ceci est la page accueil.',
            'user_roles' => $roles, // Pass to template for display
        ]);
    }

    #[Route('/services', name: 'app_services')]
    public function services(): Response
    {
        return $this->render('home/services.html.twig', []);
    }

    #[Route('/pricing', name: 'app_pricing')]
    public function pricing(): Response
    {
        return $this->render('home/pricing.html.twig', []);
    }

    #[Route('/team', name: 'app_team')]
    public function team(): Response
    {
        return $this->render('home/team.html.twig', []);
    }

    #[Route('/portfolio', name: 'app_portfolio')]
    public function portfolio(): Response
    {
        return $this->render('home/portfolio.html.twig', []);
    }

    #[Route('/blog', name: 'app_blog')]
    public function blog(): Response
    {
        return $this->render('home/blog.html.twig', []);
    }
}
