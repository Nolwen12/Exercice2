<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\Article;

final class BlogController extends AbstractController
{
    #[Route('/blog', name: 'blog_list')]
    public function index(): Response
    {
        $liste = [
                ["titre" => "L'art de la dance"], 
                ["titre" => "Thèâtre : Venez voir Roman Doduik"], 
                ["titre" => "Mentaliste"]
                ];
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
            'liste' => $liste,
        ]);
    }

    #[Route('/blog/{id}', name: 'blog_show')]
    public function blog_show(int $id): Response
    {
        $liste = ["L'art de la dance", "Théâtre : Venez voir Roman Doduik", "Mentalistes : Peuvent-ils vraiment entrez dans notre tête"];
        $articles = [
                    ['titre' => $liste[0], 
                        'auteur' => "Victor Hugo",
                        'contenue' => "Visual Studio Code, BootStrap et Wamp",
                        'date' => "2026/01/28"],
                    ['titre' => $liste[1], 
                        'auteur' => "Lamartine",
                        'contenue' => "Spectacle marrant",
                        'date' => " 2025/11/14"],
                    ['titre' => $liste[2], 
                        'auteur' => "Jean de la Fontaine",
                        'contenue' => "Les mentaliste analyse nos réactions et le comportement gestuelle de notre corp. Grâce à des questions bien précises et cette annalyse, ils savent ce que l'on pense.",
                        'date' => "2024/04/03"]
        ];

        if (!isset($articles[$id])) {
            throw $this->createNotFoundException("Article introuvable");
        }
        
        $article = $articles[$id];

        return $this->render('blog/detail.html.twig', [
            'controller_name' => 'BlogController',
            'id' => $id,
            'article' => $article,
        ]);
    }
}
