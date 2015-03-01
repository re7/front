<?php

/**
 * This file is part of the RE-7 website.
 *
 * (c) Emeric Kasbarian <emerick42@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Bundle\AppBundle\Controller\Glossary;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * The controller for pages of the glossary
 */
class MainController extends Controller
{
    /**
     * Display all existing definitions of the glossary
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        $categories = $this->get('app_glossary.reader')->findAll();

        return $this->render('AppAppBundle:Glossary/Main:index.html.twig', [
            'categories' => $categories,
        ]);
    }
}
