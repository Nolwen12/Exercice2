<?php

namespace App\Entity;

use App\Repository\ArticleRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ArticleRepository::class)]
class Article
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;
    private string $titre = "j'ai";
    private string $auteur = "changé ";
    private string $contenue = "de variable";
    private string $date = "alors laiisse moi tranquille";

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): string
    {
        return $this->titre;
    }

    public function setTitre($titre) : string
    {
        $this->titre = $titre;
        return $this->titre;
    }

    public function getAuteur(): string
    {
        return $this->auteur;
    }

    public function setAuteur($auteur) : string
    {
        $this->auteur = $auteur;
        return $this->auteur;
    }

    public function getContenue(): string
    {
        return $this->contenue;
    }

    public function setContenue($contenue) : string
    {
        $this->contenue = $contenue;
        return $this->contenue;
    }

    public function getDate(): string
    {
        return $this->date;
    }

    public function setDate($date) : string
    {
        $this->date = $date;
        return $this->date;
    }
}
