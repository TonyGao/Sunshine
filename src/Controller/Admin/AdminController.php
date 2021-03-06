<?php

namespace App\Controller\Admin;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller
{
    /**
     * @Route("/admin/admin", name="admin_admin")
     */
    public function index()
    {
        return $this->render('admin/admin/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
}
