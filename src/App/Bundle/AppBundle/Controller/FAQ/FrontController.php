<?php

/**
 * This file is part of the RE-7 website.
 *
 * (c) Emeric Kasbarian <emerick42@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

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
