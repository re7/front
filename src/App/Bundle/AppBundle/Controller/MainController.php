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
        return $this->render(':App/Main:index.html.twig');
    }
}
