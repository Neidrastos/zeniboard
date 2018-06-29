<?php
/**
 * Created by PhpStorm.
 * User: echauchaix2018
 * Date: 27/06/2018
 * Time: 14:29
 */
namespace AppBundle\Controller;

use AppBundle\Entity\NatureDeplacement;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;

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
    public function newAction(Request $request)
    {
        // creates a task and gives it some dummy data for this example
        $nature = new NatureDeplacement();

        $form = $this->createFormBuilder($nature)
            ->add('nomNatureDeplacement', TextType::class)
            ->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $nature->setNomNatureDeplacement($form['nomNatureDeplacement']->getData());

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($nature);
            $entityManager->flush();

            return $this->redirectToRoute('indexParameter');
        }

        return $this->render('@AppBundle/admin/parameter/nature/new.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Nature entity.
     *
     * @Route("/{id}/edit", name="editNature")
     *
     */
    public function editAction()
    {
        return $this->render('@AppBundle/admin/parameter/nature/edit.html.twig');
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