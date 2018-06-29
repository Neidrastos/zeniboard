<?php
/**
 * Created by PhpStorm.
 * User: echauchaix2018
 * Date: 27/06/2018
 * Time: 14:29
 */
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Traject controller.
 *
 * @Route("admin/traject")
 */
class TrajectController extends Controller
{
    /**
     * Displays the list of trajects
     *
     * @Route("/", name="indexTraject")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $trajectRepo = $em->getRepository('AppBundle:Trajet');

        $trajectTab = $trajectRepo->findAll();

        if(empty($trajectTab)) {
            $this->addFlash('info', "Aucun trajet n'a été créé pour le moment !");
        }

        return $this->render('@AppBundle/admin/traject/index.html.twig', [
            'trajects' => $trajectRepo->findAll()
        ]);
    }

    /**
     * Creates a new traject
     *
     * @Route("/new", name="newTraject")
     */
    public function newAction()
    {
        return $this->render('@AppBundle/admin/traject/new.html.twig');
    }

    /**
     * Displays a form to edit an existing traject entity.
     *
     * @Route("/{id}/edit", name="editTraject")
     *
     */
    public function editAction()
    {
        return $this->render('@MediaBundle/admin/traject/edit.html.twig');
    }

    /**
     * Deletes a traject entity.
     *
     * @Route("/{id}", name="deleteTraject")
     */
    public function deleteAction()
    {
        return $this->redirectToRoute('indexTraject');
    }
}