<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ReservationRepository::class)]
class Reservation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le sujet de la réservation ne peut pas être vide.")]
    #[Assert\Length(
        min: 20,
        minMessage: "Le sujet doit contenir au moins {{ limit }} caractères.",
        max: 255,
        maxMessage: "Le sujet ne peut pas dépasser {{ limit }} caractères."
    )]
    private ?string $topic = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    //#[Assert\NotNull(message: "L'heure de début est requise.")]
    #[Assert\Type(\DateTimeInterface::class, message: "L'heure de début doit être une date valide.")]
    #[Assert\GreaterThanOrEqual(
        "today",
        message: "La date de début ne peut pas être antérieure à la date actuelle."
    )]
    #[Assert\LessThanOrEqual(
        "+2 weeks",
        message: "La date de début ne peut pas être plus de deux semaines dans le futur."
    )]
    private ?\DateTimeInterface $start_time = null;

    #[ORM\Column(type: Types::INTEGER)]
    #[Assert\NotNull(message: "La durée est requise.")]
    #[Assert\Choice(
        choices: [15, 20, 30],
        message: "La durée doit être de 15, 20 ou 30 minutes."
    )]
    private ?int $duration = null; // Duration in minutes

    #[ORM\Column(length: 255)]
    private ?string $status = null;

    #[ORM\ManyToOne(targetEntity: Avaibility::class)]    
    #[ORM\JoinColumn(nullable: true)]
    private ?Avaibility $Avaibility = null;

    
    public function __construct()
    {
        $this->status = 'not confirmed';
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTopic(): ?string
    {
        return $this->topic;
    }

    public function setTopic(string $topic): static
    {
        $this->topic = $topic;
        return $this;
    }

    public function getStartTime(): ?\DateTimeInterface
    {
        return $this->start_time;
    }

    public function setStartTime(\DateTimeInterface $start_time): static
    {
        $this->start_time = $start_time;
        return $this;
    }

    public function getDuration(): ?int
    {
        return $this->duration;
    }

    public function setDuration(int $duration): static
    {
        $this->duration = $duration;
        return $this;
    }

    public function getEndTime(): ?\DateTimeInterface
    {
        if ($this->start_time && $this->duration) {
            $endTime = clone $this->start_time;
            $endTime->modify("+{$this->duration} minutes");
            return $endTime;
        }
        return null;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        $this->status = $status;
        return $this;
    }

    public function getAvaibility(): ?Avaibility
    {
        return $this->Avaibility;
    }
    
    public function setAvaibility(?Avaibility $Avaibility): static
    {
        $this->Avaibility = $Avaibility;
        return $this;
    }
    
}