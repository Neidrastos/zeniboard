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
 * Administrator controller.
 *
 * @Route("admin/parameter/administrator")
 */
class AdministratorController extends Controller
{
    /**
     * Displays the list of administrators
     *
     * @Route("/", name="indexAdministrator")
     */
    public function indexAction()
    {
        return $this->render('@AppBundle/admin/parameter/administrator/index.html.twig');
    }

    /**
     * Creates a new administrator
     *
     * @Route("/new", name="newAdministrator")
     */
    public function newAction()
    {
        return $this->render('@AppBundle/admin/parameter/administrator/new.html.twig');
    }

    /**
     * Displays a form to edit an existing Administrator entity.
     *
     * @Route("/{id}/edit", name="editAdministrator")
     *
     */
    public function editAction()
    {
        return $this->render('@MediaBundle/admin/parameter/administrator/edit.html.twig');
    }

    /**
     * Deletes a Administrator entity.
     *
     * @Route("/{id}", name="deleteAdministrator")
     */
    public function deleteAction()
    {
        return $this->redirectToRoute('indexAdministrator');
    }

}