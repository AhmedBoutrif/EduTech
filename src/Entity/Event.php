<?php

namespace App\Entity;

use App\Repository\EventRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert; // Importez les contraintes de validation

#[ORM\Entity(repositoryClass: EventRepository::class)]
class Event
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le titre est obligatoire.")] // Le titre ne peut pas être vide
    #[Assert\Length(
        max: 255,
        maxMessage: "Le titre ne peut pas dépasser {{ limit }} caractères."
    )]
    private ?string $title = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "La description est obligatoire.")] // La description ne peut pas être vide
    #[Assert\Length(
        max: 255,
        maxMessage: "La description ne peut pas dépasser {{ limit }} caractères."
    )]
    private ?string $description = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    #[Assert\NotBlank(message: "La date est obligatoire.")] // La date ne peut pas être vide
    #[Assert\Type(\DateTimeInterface::class, message: "La date doit être une date valide.")]
    private ?\DateTimeInterface $date = null;

    #[ORM\ManyToOne(targetEntity: EventType::class, inversedBy: 'events')]
    #[Assert\NotNull(message: "Le type d'événement est obligatoire.")] // Le type d'événement ne peut pas être null
    private ?EventType $typeEvent = null; // Renommez la propriété pour respecter les conventions camelCase

    // Getters et setters
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;
        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): static
    {
        $this->date = $date;
        return $this;
    }

    public function getTypeEvent(): ?EventType
    {
        return $this->typeEvent;
    }

    public function setTypeEvent(?EventType $typeEvent): static
    {
        $this->typeEvent = $typeEvent;
        return $this;
    }
}
