<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PricingController extends AbstractController
{
    /**
     * @Route("/planes", name="pricing")
     */
    public function index()
    {
        return $this->render('frontend/pricing/index.html.twig', [
            'title' => 'Planes',
        ]);
    }
}
