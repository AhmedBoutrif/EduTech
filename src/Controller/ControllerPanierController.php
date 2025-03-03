<?php

namespace App\Controller;

use App\Entity\Certification;
use App\Repository\PanierRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;

final class ControllerPanierController extends AbstractController
{
    #[Route('/cart/add/{id}', name: 'app_cart_add')]
    public function addToCart(int $id, SessionInterface $session): RedirectResponse
    {
        $cart = $session->get('cart', []);

        if (in_array($id, $cart)) {
           $this->addFlash('error', 'Certification déjà ajoutée au panier !');
        } else {
            $cart[] = $id;
            $session->set('cart', $cart);
            $this->addFlash('success', 'Certification ajoutée au panier avec succès !');
        }
        return $this->redirectToRoute('app_certification_index');
    }

    #[Route('/cart', name: 'app_cart')]
    public function showCart(SessionInterface $session, PanierRepository $panierRepository): Response
    {
        $cart = $session->get('cart', []);
        
        // Récupérer les certifications triées
        $certifications = $panierRepository->findSortedCertifications($cart);

        $products = array_map(function ($certification) {
            return [
                'id' => $certification->getId(),
                'name' => $certification->getName(),
                'price' => $certification->getPrix(),
                'image' => $certification->getImg()
            ];
        }, $certifications);

        $totalPrice = array_sum(array_column($products, 'price'));

        return $this->render('home/panier.html.twig', [
            'products' => $products,
            'totalPrice' => $totalPrice,
        ]);
    }

    #[Route('/cart/remove/{id}', name: 'app_cart_remove')]
    public function removeFromCart(int $id, SessionInterface $session): RedirectResponse
    {
        $cart = $session->get('cart', []);

        if (($key = array_search($id, $cart)) !== false) {
            unset($cart[$key]);
            $session->set('cart', $cart);

            $this->addFlash('success', 'Certification supprimée du panier !');
        } else {
            $this->addFlash('error', 'Certification introuvable dans le panier !');
        }

        return $this->redirectToRoute('app_cart');
    }
}
