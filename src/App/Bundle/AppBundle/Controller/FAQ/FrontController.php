<?php

namespace App\Bundle\AppBundle\Controller\FAQ;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
* The controller for front pages of the FAQ
*/
class FrontController extends Controller
{
    /**
    * The action for the front homepage
    *
    * @return \Symfony\Component\HttpFoundation\Response
    */
    public function indexAction()
    {
        return $this->render('AppAppBundle:FAQ/Front:index.html.twig');
    }
}
