<?php
/**
 * Created by PhpStorm.
 * User: echauchaix2018
 * Date: 27/06/2018
 * Time: 10:48
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Parameter controller.
 *
 * @Route("admin/parameter")
 */
class ParameterController extends Controller
{
    /**
     * Displays the lists of parameters
     *
     * @Route("/", name="indexParameter")
    */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $natureRepo = $em->getRepository('AppBundle:NatureDeplacement');
        $naturesTab = $natureRepo->findAll();

        $placeRepo = $em->getRepository('AppBundle:LieuReception');
        $placesTab = $natureRepo->findAll();

        $userRepo = $em->getRepository('AppBundle:Utilisateur');
        $usersTab = $userRepo->findAll();

        if(empty($naturesTab)) {
            $this->addFlash('info', "Aucune nature de déplacement n'a été créée pour le moment !");
        }
        if(empty($placesTab)) {
            $this->addFlash('info', "Aucun lieu de réception n'a été créé pour le moment !");
        }

        return $this->render('@AppBundle/admin/parameter/index.html.twig', [
            'natures' => $natureRepo->findAll(),
            'places' => $placeRepo->findAll(),
            'users' => $userRepo->findAll()
        ]);
    }
}