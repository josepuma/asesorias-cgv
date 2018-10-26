<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ServicesController extends AbstractController
{
    /**
     * @Route("/areas/juridico", name="services-juridico")
     */
    public function index()
    {
        return $this->render('frontend/services/juridico/index.html.twig', [
            'title' => 'Jurídico',
        ]);
    }

    /**
     * @Route("/areas/administracion", name="services-admin")
     */
    public function showAdminServices()
    {
        return $this->render('frontend/services/administracion/index.html.twig', [
            'title' => 'Administración',
        ]);
    }
}
