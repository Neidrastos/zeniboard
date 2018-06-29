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
 * Nature controller.
 *
 * @Route("admin/parameter/nature")
 */
class NatureController extends Controller
{
    /**
     * Displays the list of natures
     *
     * @Route("/", name="indexNature")
     */
    public function indexAction()
    {
        return $this->render('@AppBundle/admin/parameter/nature/index.html.twig');
    }

    /**
     * Creates a new nature
     *
     * @Route("/new", name="newNature")
     */
    public function newAction()
    {
        return $this->render('@AppBundle/admin/parameter/nature/new.html.twig');
    }

    /**
     * Displays a form to edit an existing Nature entity.
     *
     * @Route("/{id}/edit", name="editNature")
     *
     */
    public function editAction()
    {
        return $this->render('@MediaBundle/admin/parameter/nature/edit.html.twig');
    }

    /**
     * Deletes a Nature entity.
     *
     * @Route("/{id}", name="deleteNature")
     */
    public function deleteAction()
    {
        return $this->redirectToRoute('indexNature');
    }

}