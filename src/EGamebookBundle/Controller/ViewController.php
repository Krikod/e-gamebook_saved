<?php

namespace EGamebookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use EGamebookBundle\Entity\Chapters;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ViewController extends Controller
{
    public function chapAction(Chapters $chapter, $number)
    {

        $em = $this->getDoctrine()->getManager();
        $chapter = $em->getRepository('EGamebookBundle:Chapters')->findOneByNumber($number);

        return $this->render('@EGamebook/user/index.html.twig', array('chapter' => $chapter));
    }

    public function introAction()
    {
        return $this->render('@EGamebook/index.html.twig');
    }

    public function aboutAction()
    {
        return $this->render('@EGamebook/user/index.html.twig');
    }
}

