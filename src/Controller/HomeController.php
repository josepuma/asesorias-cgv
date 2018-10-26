<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return $this->render('frontend/home/index.html.twig', [
            'title' => 'Bienvenido',
        ]);
    }

    /**
     * @Route("/equipo", name="team")
     */
    public function showTeamPage()
    {
        return $this->render('frontend/team/index.html.twig', [
            'title' => 'Equipo',
        ]);
    }

}
