<?php

namespace App\Entity;

use App\Repository\FeedRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FeedRepository::class)]
class Feed
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $publications = null;

    #[ORM\Column(type: Types::ARRAY)]
    private array $puclications = [];

    /**
     * @var Collection<int, commentaire>
     */
    #[ORM\OneToMany(targetEntity: commentaire::class, mappedBy: 'feed')]
    private Collection $commentaire;

    public function __construct()
    {
        $this->commentaire = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPublications(): ?string
    {
        return $this->publications;
    }

    public function setPublications(string $publications): static
    {
        $this->publications = $publications;

        return $this;
    }

    public function getPuclications(): array
    {
        return $this->puclications;
    }

    public function setPuclications(array $puclications): static
    {
        $this->puclications = $puclications;

        return $this;
    }

    /**
     * @return Collection<int, commentaire>
     */
    public function getCommentaire(): Collection
    {
        return $this->commentaire;
    }

    public function addCommentaire(commentaire $commentaire): static
    {
        if (!$this->commentaire->contains($commentaire)) {
            $this->commentaire->add($commentaire);
            $commentaire->setFeed($this);
        }

        return $this;
    }

    public function removeCommentaire(commentaire $commentaire): static
    {
        if ($this->commentaire->removeElement($commentaire)) {
            // set the owning side to null (unless already changed)
            if ($commentaire->getFeed() === $this) {
                $commentaire->setFeed(null);
            }
        }

        return $this;
    }
}
