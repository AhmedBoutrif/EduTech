<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReservationRepository::class)]
class Reservation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $topic = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $start_time = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $end_time = null;

    #[ORM\Column(length: 255)]
    private ?string $status = null;

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
    

    public function getEndTime(): ?\DateTimeInterface
    {
        return $this->end_time;
    }

    public function setEndTime(\DateTimeInterface $end_time): static
    {
        $this->end_time = $end_time;

        return $this;
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
}
