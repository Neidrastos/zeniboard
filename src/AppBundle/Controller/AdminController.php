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

class AdminController extends Controller
{
    /**
     * Displays the admin dashboard
     *
     * @Route("/admin", name="adminDashboard")
    */
    public function indexAction()
    {
        return $this->render('@AppBundle/admin/index.html.twig');
    }
}