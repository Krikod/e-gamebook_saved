<?php

namespace EGamebookBundle\Controller;

use EGamebookBundle\Entity\Book;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use EGamebookBundle\Entity\Chapters;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ViewController extends Controller
{

    public function listBooksAction()
    {
        $em = $this->getDoctrine()->getManager();
        $books = $em->getRepository('EGamebookBundle:Book')->findAll();
        return $this->render('@EGamebook/nonUsers/index.html.twig', array(
            'books' => $books,
        ));
    }
    public function introBookAction()
    {


        return $this->render('@EGamebook/nonUsers/introBook.html.twig');
    }


    public function readBookAction($number, $id)
    {

        $em = $this->getDoctrine()->getManager();
        $chapter = $em->getRepository('EGamebookBundle:Chapters')->getChaptersNumber($number, $id);
        $chaptera = $chapter[0];

        return $this->render('@EGamebook/nonUsers/readBook.html.twig', array(
            'chapter' => $chaptera,
            'idB' => $id
        ));
    }
    public function aboutAction()
    {
        return $this->render('@EGamebook/user/index.html.twig');
    }
    public function firstPageAction()
    {


        return $this->render('@EGamebook/nonUsers/firstPage.html.twig');
    }
}

