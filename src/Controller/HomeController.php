<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    #[Route('/home', name: 'home')]
    public function index(): Response
    {
        $role = [
            ["role" => "administrateur"],
            ["role" => "modérateur"],
            ["role" => "dévéloppeur"],
            ["role" => "user"]
        ];
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'role' => $role,
        ]);
    }
}
