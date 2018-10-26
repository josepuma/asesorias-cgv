<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/blog", name="blog")
     */
    public function index()
    {
        return $this->render('frontend/blog/index.html.twig', [
            'title' => 'Blog',
        ]);
    }

    /**
     * @Route("/blog/{id}", name="blog_entry")
     */
    public function showBlogPost($id)
    {
        return $this->render('frontend/blog/post/index.html.twig', [
            'title' => 'Blog',
        ]);
    }

}
