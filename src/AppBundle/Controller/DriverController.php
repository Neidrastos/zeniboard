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
 * Vehicle controller.
 *
 * @Route("admin/driver")
 */
class DriverController extends Controller
{
    /**
     * Displays the list of drivers
     *
     * @Route("/", name="indexDriver")
     */
    public function indexAction()
    {
        return $this->render('@AppBundle/admin/driver/index.html.twig');
    }

    /**
     * Creates a new driver
     *
     * @Route("/new", name="newDriver")
     */
    public function newAction()
    {
        return $this->render('@AppBundle/admin/driver/new.html.twig');
    }

    /**
     * Displays a form to edit an existing driver entity.
     *
     * @Route("/{id}/edit", name="editDriver")
     *
     */
    public function editAction()
    {
        return $this->render('@MediaBundle/admin/driver/edit.html.twig');
    }

    /**
     * Deletes a driver entity.
     *
     * @Route("/{id}", name="deleteDriver")
     */
    public function deleteAction()
    {
        return $this->redirectToRoute('indexDriver');
    }
}