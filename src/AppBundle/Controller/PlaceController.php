<?php
/**
 * Created by PhpStorm.
 * User: echauchaix2018
 * Date: 27/06/2018
 * Time: 14:29
 */
namespace AppBundle\Controller;

use AppBundle\Entity\LieuReception;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;

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
    public function newAction(Request $request)
    {
        // creates a task and gives it some dummy data for this example
        $place = new LieuReception();

        $form = $this->createFormBuilder($place)
            ->add('nomLieuReception', TextType::class)
            ->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $place->setNomLieuReception($form['nomLieuReception']->getData());

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($place);
            $entityManager->flush();

            return $this->redirectToRoute('indexParameter');
        }

        return $this->render('@AppBundle/admin/parameter/place/new.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Place entity.
     *
     * @Route("/{id}/edit", name="editPlace")
     *
     */
    public function editAction()
    {
        return $this->render('@AppBundle/admin/parameter/place/edit.html.twig');
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