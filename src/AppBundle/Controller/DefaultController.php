<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Kilometrage;
use AppBundle\Entity\Vehicule;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Trajet;
use AppBundle\Form\TrajetType;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     * @Route("/admin/traject/new", name="newTraject")
     *
     * @Template
     */
    public function indexAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $trajet= new Trajet();

        $form = $this->createForm(TrajetType::class, $trajet);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {

            $kilometrage = new Kilometrage();
            $vehicule = $form->get("vehicule")->getData();
            $vehicule->getId();

            $valueKilometrage = $form->get("kilometrage")->getData();
            $kilometrage->setValeurKilometrage($valueKilometrage);
            $trajet->setKilometrage($kilometrage);
            $kilometrage->setVehicule($vehicule);

            $em->persist($kilometrage);
            $em->persist($trajet);

            $em->flush();

            $this->addFlash('formSuccess', 'Trajet envoyé');
            if ($request->get('_route') == 'newTraject') {
                return $this->redirectToRoute('indexTraject');
            } else {
                return $this->redirectToRoute('homepage');
            }
        }

        return ['form' => $form->createView()];
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
