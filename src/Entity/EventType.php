<?php

namespace App\Entity;

use App\Repository\EventTypeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: EventTypeRepository::class)]
class EventType
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le champ Backend ne peut pas être vide.")]
    #[Assert\Length(
        min: 3,
        max: 255,
        minMessage: "Le backend doit contenir au moins {{ limit }} caractères.",
        maxMessage: "Le backend ne peut pas dépasser {{ limit }} caractères."
    )]
    private ?string $backend = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le champ Frontend ne peut pas être vide.")]
    #[Assert\Length(
        min: 3,
        max: 255,
        minMessage: "Le frontend doit contenir au moins {{ limit }} caractères.",
        maxMessage: "Le frontend ne peut pas dépasser {{ limit }} caractères."
    )]
    private ?string $frontend = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le champ API ne peut pas être vide.")]
    #[Assert\Length(
        min: 3,
        max: 255,
        minMessage: "L'API doit contenir au moins {{ limit }} caractères.",
        maxMessage: "L'API ne peut pas dépasser {{ limit }} caractères."
    )]
    private ?string $api = null;

    #[ORM\OneToMany(targetEntity: Event::class, mappedBy: 'typeEvent')]
    private Collection $events;

    public function __construct()
    {
        $this->events = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBackend(): ?string
    {
        return $this->backend;
    }

    public function setBackend(string $backend): static
    {
        $this->backend = $backend;
        return $this;
    }

    public function getFrontend(): ?string
    {
        return $this->frontend;
    }

    public function setFrontend(string $frontend): static
    {
        $this->frontend = $frontend;
        return $this;
    }

    public function getApi(): ?string
    {
        return $this->api;
    }

    public function setApi(string $api): static
    {
        $this->api = $api;
        return $this;
    }

    /**
     * @return Collection<int, Event>
     */
    public function getEvents(): Collection
    {
        return $this->events;
    }

    public function addEvent(Event $event): static
    {
        if (!$this->events->contains($event)) {
            $this->events->add($event);
            $event->setTypeEvent($this);
        }

        return $this;
    }

    public function removeEvent(Event $event): static
    {
        if ($this->events->removeElement($event)) {
            if ($event->getTypeEvent() === $this) {
                $event->setTypeEvent(null);
            }
        }

        return $this;
    }
}
