<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class SecurityController extends Controller
{
    /**
     * @Route("/login", name="login")
     *
     * @param $name
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function loginAction()
    {
        $authenticationUtils = $this->get('security.authentication_utils');

        $error = $authenticationUtils->getLastAuthenticationError();

        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render(':security:login.html.twig',
            array(
                'last_username' => $lastUsername,
                'error' => $error,
        ));
    }

    /**
     * @Route("/logout", name="logout")
     * @return \Exception
     */
    public function logoutAction() {
        return new \Exception("Logout");
    }
}
