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
 * Place controller.
 *
 * @Route("admin/parameter/place")
 */
class PlaceController extends Controller
{
    /**
     * Displays the list of places
     *
     * @Route("/", name="indexPlace")
     */
    public function indexAction()
    {
        return $this->render('@AppBundle/admin/parameter/place/index.html.twig');
    }

    /**
     * Creates a new place
     *
     * @Route("/new", name="newPlace")
     */
    public function newAction()
    {
        return $this->render('@AppBundle/admin/parameter/place/new.html.twig');
    }

    /**
     * Displays a form to edit an existing Place entity.
     *
     * @Route("/{id}/edit", name="editPlace")
     *
     */
    public function editAction()
    {
        return $this->render('@MediaBundle/admin/parameter/place/edit.html.twig');
    }

    /**
     * Deletes a Place entity.
     *
     * @Route("/{id}", name="deletePlace")
     */
    public function deleteAction()
    {
        return $this->redirectToRoute('indexPlace');
    }

}