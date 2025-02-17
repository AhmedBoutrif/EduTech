<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserRepository::class)]
class User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $first_name = null;



    #[ORM\ManyToOne(inversedBy: 'users')]
    private ?Abonnement $abonnement = null;

    /**
     * @var Collection<int, certification>
     */
    #[ORM\ManyToMany(targetEntity: Certification::class, inversedBy: 'users')]
    private Collection $certifications_id;

    /**
     * @var Collection<int, Favorite>
     */
    #[ORM\OneToMany(targetEntity: Favorite::class, mappedBy: 'user_id')]
    private Collection $favorites;

    /**
     * @var Collection<int, Ordre>
     */
    #[ORM\OneToMany(targetEntity: Ordre::class, mappedBy: 'user')]
    private Collection $ordres;




    public function __construct()
    {
        $this->certifications_id = new ArrayCollection();
        $this->favorites = new ArrayCollection();
        $this->ordres = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstName(): ?string
    {
        return $this->first_name;
    }

    public function setFirstName(string $first_name): static
    {
        $this->first_name = $first_name;

        return $this;
    }


    public function getAbonnement(): ?Abonnement
    {
        return $this->abonnement;
    }

    public function setAbonnement(?Abonnement $abonnement): static
    {
        $this->abonnement = $abonnement;

        return $this;
    }

    /**
     * @return Collection<int, certification>
     */
    public function getCertificationsId(): Collection
    {
        return $this->certifications_id;
    }

    public function addCertificationsId(certification $certificationsId): static
    {
        if (!$this->certifications_id->contains($certificationsId)) {
            $this->certifications_id->add($certificationsId);
        }

        return $this;
    }

    public function removeCertificationsId(certification $certificationsId): static
    {
        $this->certifications_id->removeElement($certificationsId);

        return $this;
    }

    /**
     * @return Collection<int, Favorite>
     */
    public function getFavorites(): Collection
    {
        return $this->favorites;
    }

    public function addFavorite(Favorite $favorite): static
    {
        if (!$this->favorites->contains($favorite)) {
            $this->favorites->add($favorite);
            $favorite->setUserId($this);
        }

        return $this;
    }

    public function removeFavorite(Favorite $favorite): static
    {
        if ($this->favorites->removeElement($favorite)) {
            // set the owning side to null (unless already changed)
            if ($favorite->getUserId() === $this) {
                $favorite->setUserId(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Ordre>
     */
    public function getOrdres(): Collection
    {
        return $this->ordres;
    }

    public function addOrdre(Ordre $ordre): static
    {
        if (!$this->ordres->contains($ordre)) {
            $this->ordres->add($ordre);
            $ordre->setUser($this);
        }

        return $this;
    }

    public function removeOrdre(Ordre $ordre): static
    {
        if ($this->ordres->removeElement($ordre)) {
            // set the owning side to null (unless already changed)
            if ($ordre->getUser() === $this) {
                $ordre->setUser(null);
            }
        }

        return $this;
    }









 
}
