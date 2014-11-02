<?php

namespace App\Bundle\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * The main controller for front pages
 */
class MainController extends Controller
{
    /**
     * The action for the front homepage
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        return $this->render('AppAppBundle:Main:index.html.twig');
    }
}
