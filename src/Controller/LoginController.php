<?php 

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\User\UserInterface;

class LoginController extends AbstractController
{
    #[Route('/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        if ($this->getUser()) {
            return $this->redirectToRoute('app_redirect_after_login');
        }

        return $this->render('security/login.html.twig', [
            'last_username' => $authenticationUtils->getLastUsername(),
            'error' => $authenticationUtils->getLastAuthenticationError(),
        ]);
    }

    #[Route('/logout', name: 'app_logout')]
    public function logout(): void
    {
        throw new \LogicException('This method is intercepted by Symfony’s security firewall.');
    }

    #[Route('/redirect', name: 'app_redirect_after_login')]
    public function redirectAfterLogin(): Response
    {
        $user = $this->getUser();
        
        if (!$user) {
            return $this->redirectToRoute('app_login'); // Fallback in case of failure
        }

        $roles = $user->getRoles();
        
        if (in_array('ROLE_ADMIN', $roles)) {
            return $this->redirectToRoute('app_base'); // Redirect Admin to Back-office
        } elseif (in_array('ROLE_TUTOR', $roles) || in_array('ROLE_STUDENT', $roles)) {
            return $this->redirectToRoute('app_home'); // Redirect Tutors/Students to Front-office
        }
    }
}
