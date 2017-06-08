<?php

namespace EGamebookBundle\Controller;

use EGamebookBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Chapter controller.
 *
 */
class ProfilController extends Controller
{
    /**
     * My Profil
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $user = $this->getUser();

        return $this->render('@EGamebook/user/index.html.twig', array(
            'user' => $user,
        ));
    }




}