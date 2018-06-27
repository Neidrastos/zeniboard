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
 * @Route("admin/vehicle")
 */
class VehicleController extends Controller
{
    /**
     * Displays the list of vehicles
     *
     * @Route("/", name="indexVehicle")
     */
    public function indexAction()
    {
        return $this->render('@AppBundle/admin/vehicle/index.html.twig');
    }

    /**
     * Creates a new vehicle
     *
     * @Route("/new", name="newVehicle")
     */
    public function newAction()
    {
        return $this->render('@AppBundle/admin/vehicle/new.html.twig');
    }

    /**
     * Displays a form to edit an existing vehicle entity
     *
     * @Route("/{id}/edit", name="editVehicle")
     *
     */
    public function editAction()
    {
        return $this->render('@MediaBundle/admin/vehicle/edit.html.twig');
    }

    /**
     * Deletes a vehicle entity.
     *
     * @Route("/{id}", name="deleteVehicle")
     */
    public function deleteAction()
    {
        return $this->redirectToRoute('indexVehicle');
    }
}