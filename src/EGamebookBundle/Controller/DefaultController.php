<?php

namespace EGamebookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EGamebookBundle:Default:index.html.twig');
    }
}
