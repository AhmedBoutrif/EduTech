<?php

namespace App\Entity;

use App\Repository\OrdreRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OrdreRepository::class)]
class Ordre
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $totalPrice = null;

    #[ORM\ManyToOne(inversedBy: 'ordres')]
    private ?USer $user = null;

    /**
     * @var Collection<int, certification>
     */
    #[ORM\ManyToMany(targetEntity: certification::class, inversedBy: 'ordres')]
    private Collection $certifications;

    public function __construct()
    {
        $this->certifications = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTotalPrice(): ?string
    {
        return $this->totalPrice;
    }

    public function setTotalPrice(string $totalPrice): static
    {
        $this->totalPrice = $totalPrice;

        return $this;
    }

    public function getUser(): ?USer
    {
        return $this->user;
    }

    public function setUser(?USer $user): static
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @return Collection<int, certification>
     */
    public function getCertifications(): Collection
    {
        return $this->certifications;
    }

    public function addCertification(certification $certification): static
    {
        if (!$this->certifications->contains($certification)) {
            $this->certifications->add($certification);
        }

        return $this;
    }

    public function removeCertification(certification $certification): static
    {
        $this->certifications->removeElement($certification);

        return $this;
    }
}
