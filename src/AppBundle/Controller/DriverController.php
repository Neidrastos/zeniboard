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
use AppBundle\Form\UtilisateurType;
use AppBundle\Entity\Utilisateur;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

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
        $em = $this->getDoctrine()->getManager();
        $driverRepo = $em->getRepository('AppBundle:Utilisateur');

        $vehiclesTab = $driverRepo->findAll();

        if(empty($vehiclesTab)) {
            $this->addFlash('info', "Aucun conducteur n'a été créé pour le moment !");
        }

        return $this->render('@AppBundle/admin/driver/index.html.twig', [
            'drivers' => $driverRepo->findAll()
        ]);
    }

    /**
     * @Route("/new", name="newDriver")
     */
    public function newAction(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {

        // 1) build the form
        $user = new Utilisateur();
        $form = $this->createForm(UtilisateurType::class, $user);

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            // 3) Encode the password (you could also do this via Doctrine listener)
            $password = $passwordEncoder->encodePassword($user, $user->getPlainPassword());
            $user->setMotDePasseUtilisateur($password);

            // 4) Add the roles
            $user->setRoles(['ROLE_USER']);

            // 5) save the User!
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('indexDriver');
        }


        return $this->render(
            '@AppBundle/admin/driver/new.html.twig',
            array('form' => $form->createView())
        );
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

    /**
     * Shows a list of trajects of a driver
     *
     * @Route("/{id}/traject", name="showListTrajectDriver")
     */
    public function showTrajectsAction()
    {
        return $this->render('@AppBundle/admin/driver/traject.html.twig');
    }

}