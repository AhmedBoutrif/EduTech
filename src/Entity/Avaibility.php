<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use App\Entity\Reservation;
use App\Repository\AvaibilityRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

#[ORM\Entity(repositoryClass: AvaibilityRepository::class)]
class Avaibility
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\GreaterThanOrEqual("today", message: "The date cannot be in the past.")]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $start_time = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $end_time = null;

    #[ORM\OneToMany(mappedBy: 'Avaibility', targetEntity: Reservation::class)]
    private Collection $reservations;

    public function __construct()
    {
        $this->reservations = new ArrayCollection(); // Assurez-vous d'utiliser ArrayCollection
    }

    public function getReservations(): Collection
    {
        return $this->reservations;
    }

    public function getId(): ?int
    {
        return $this->id;
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

    #[Assert\Callback]
    public function validateDateWithinOneMonth(ExecutionContextInterface $context, $payload)
    {
        if ($this->date !== null) {
            $today = new \DateTime();
            $oneMonthLater = (clone $today)->modify('+1 month');

            if ($this->date > $oneMonthLater) {
                $context->buildViolation('The date must be within one month from today.')
                    ->atPath('date')
                    ->addViolation();
            }
        }
    }

    #[Assert\Callback]
    public function validateTimeRange(ExecutionContextInterface $context, $payload)
    {
        $minTime = new \DateTime('08:00');
        $maxTime = new \DateTime('21:00');

        if ($this->start_time !== null) {
            $startTime = (new \DateTime())->setTime((int)$this->start_time->format('H'), (int)$this->start_time->format('i'));
            if ($startTime < $minTime || $startTime > $maxTime) {
                $context->buildViolation('The start time must be between 8 AM and 9 PM.')
                    ->atPath('start_time')
                    ->addViolation();
            }
        }

        if ($this->end_time !== null) {
            $endTime = (new \DateTime())->setTime((int)$this->end_time->format('H'), (int)$this->end_time->format('i'));
            if ($endTime < $minTime || $endTime > $maxTime) {
                $context->buildViolation('The end time must be between 8 AM and 9 PM.')
                    ->atPath('end_time')
                    ->addViolation();
            }
        }
    }
}
