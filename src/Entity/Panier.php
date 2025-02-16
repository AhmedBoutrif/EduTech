<?php

namespace App\Entity;

use App\Repository\PanierRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: PanierRepository::class)]
class Panier
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;


    #[ORM\Column]
    private ?int $nb_total = null;

    public function getId(): ?int { return $this->id; }
    
   
    public function getNbTotal(): ?int { return $this->nb_total; }
    public function setNbTotal(int $nb_total): static { $this->nb_total = $nb_total; return $this; }
}
