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
     * add a registration form
     *
     * @Route("/new", name="newAdministrator")
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
            $user->setRoles(['ROLE_ADMIN']);

            // 5) save the User!
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('indexAdministrator');
        }

        return $this->render(
            '@AppBundle/admin/parameter/administrator/new.html.twig',
            array('form' => $form->createView())
        );
    }

    /**
     * Displays a form to edit an existing Administrator entity.
     *
     * @Route("/{id}/edit", name="editAdministrator")
     *
     */
    public function editAction()
    {
        return $this->render('@AppBundle/admin/parameter/administrator/edit.html.twig');
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