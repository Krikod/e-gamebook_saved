<?php

namespace EGamebookBundle\Controller;

use EGamebookBundle\Entity\Book;
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

    public function introBooksAction()
    {
        $em = $this->getDoctrine()->getManager();
        $books = $em->getRepository('EGamebookBundle:Book')->findAll();
        return $this->render('@EGamebook/nonUsers/index.html.twig', array(
            'books' => $books,
        ));
    }
    public function pageBookAction(Book $book)
    {


        return $this->render('@EGamebook/nonUsers/pageBook.html.twig', array(
            'book' => $book,
        ));
    }
    public function aboutAction()
    {
        return $this->render('@EGamebook/user/index.html.twig');
    }
}

