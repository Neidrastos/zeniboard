<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('@AppBundle/default/index.html.twig');
    }
    /**
     * @Route("/contact", name="contact")
     */
    public function contactAction()
    {
        return $this->render('@AppBundle/default/contact.html.twig');
    }
    /**
     * @Route("/mentionslegales", name="mentionsLegales")
     */
    public function legalAction()
    {
        return $this->render('@AppBundle/default/mentionsLegales.html.twig');
    }
}
