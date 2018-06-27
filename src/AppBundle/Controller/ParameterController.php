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
 * @Route("admin/parameters")
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
        return $this->render('@AppBundle/admin/parameter/index.html.twig');
    }
}