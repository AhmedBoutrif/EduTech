<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\AbonnementRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'title' => 'Bienvenue sur Symfony !',
            'message' => 'Ceci est une page d’accueil simple.',
        ]);
    }

    #[Route('/services', name: 'app_services')]
    public function services(): Response
    {
        return $this->render('home/services.html.twig');
    }

    #[Route('/team', name: 'app_team')]
    public function team(): Response
    {
        return $this->render('home/team.html.twig');
    }

    #[Route('/portfolio', name: 'app_portfolio')]
    public function portfolio(): Response
    {
        return $this->render('home/portfolio.html.twig');
    }

    #[Route('/blog', name: 'app_blog')]
    public function blog(): Response
    {
        return $this->render('home/blog.html.twig');
    }

    #[Route('/pricing', name: 'app_pricing')]
    public function pricing(AbonnementRepository $abonnementRepository, PaginatorInterface $paginator, Request $request): Response
    {
        // Récupération des abonnements sous forme de Query
        $query = $abonnementRepository->createQueryBuilder('a')->getQuery();
    
        // Pagination
        $pagination = $paginator->paginate(
            $query,  // Utiliser la query et non findAll()
            $request->query->getInt('page', 1),
            3 // Nombre d'abonnements par page
        );
    
        return $this->render('home/pricing.html.twig', [
            'pagination' => $pagination
        ]);
    }
    

}
