<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class BlogController extends AbstractController
{
    #[Route('/blog', name: 'blog_list')]
    public function index(): Response
    {
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }

    #[Route('/blog/{id}', name: 'blog_show')]
    public function blog_show(): Response
    {
        return $this->render('blog/detail.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }
}
