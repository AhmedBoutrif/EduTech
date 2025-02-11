<?php

namespace App\Entity;

use App\Repository\CommentaireRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert; // Importer les contraintes

#[ORM\Entity(repositoryClass: CommentaireRepository::class)]
class Commentaire
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 500)]
    #[Assert\NotBlank(message: "Le contenu du commentaire ne peut pas être vide.")] // Validation pour le contenu
    #[Assert\Length(
        max: 500,
        maxMessage: "Le contenu ne peut pas dépasser {{ limit }} caractères."
    )] // Validation pour la longueur maximale
    private ?string $contenu = null;

    #[ORM\ManyToOne(inversedBy: 'Commentaire')]
    private ?Feed $feed = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): static
    {
        $this->contenu = $contenu;

        return $this;
    }

    public function getFeed(): ?Feed
    {
        return $this->feed;
    }

    public function setFeed(?Feed $feed): static
    {
        $this->feed = $feed;

        return $this;
    }
}