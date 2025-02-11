<?php

namespace App\Entity;

use App\Repository\CertificatRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CertificatRepository::class)]
class Certificat
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $titre = null;

    #[ORM\Column]
    private ?int $coutPoints = null;

    #[ORM\Column]
    private ?int $coutpieces = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): static
    {
        $this->titre = $titre;

        return $this;
    }

    public function getCoutPoints(): ?int
    {
        return $this->coutPoints;
    }

    public function setCoutPoints(int $coutPoints): static
    {
        $this->coutPoints = $coutPoints;

        return $this;
    }

    public function getCoutpieces(): ?int
    {
        return $this->coutpieces;
    }

    public function setCoutpieces(int $coutpieces): static
    {
        $this->coutpieces = $coutpieces;

        return $this;
    }
}
