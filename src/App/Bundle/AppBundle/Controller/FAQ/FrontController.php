<?php

namespace App\Bundle\AppBundle\Controller\FAQ;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
* The controller for front pages of the FAQ
*/
class FrontController extends Controller
{
    /**
     * Display all existing questions of the FAQ
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        $categories = $this->get('app_faq.reader')->findAll();

        return $this->render('AppAppBundle:FAQ/Front:index.html.twig', [
            'categories' => $categories,
        ]);
    }
}
