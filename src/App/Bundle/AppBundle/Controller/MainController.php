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

    /**
     * The action to render the piwik tracking code
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function piwikAction()
    {
        $siteId     = $this->container->hasParameter('piwik.site_id') ? $this->container->getParameter('piwik.site_id') : null;
        $trackerUrl = $this->container->hasParameter('piwik.tracker_url') ? $this->container->getParameter('piwik.tracker_url') : null;

        return $this->render('AppAppBundle:Main:piwik.html.twig', [
            'siteId'     => $siteId,
            'trackerUrl' => $trackerUrl,
        ]);
    }
}
