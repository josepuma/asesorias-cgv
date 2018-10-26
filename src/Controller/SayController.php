<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SayController extends AbstractController
{
    /**
     * @Route("/say", name="say")
     */
    public function index()
    {
        return $this->render('say/index.html.twig', [
            'title' => 'Say',
        ]);
    }
}
