<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity]
#[ORM\Table(name: "users")]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\Column(type: 'string', length: 50)]
    #[Assert\NotBlank(message: "The first name is required.")]
    #[Assert\Length(
        min: 2,
        max: 50,
        minMessage: "The first name must be at least {{ limit }} characters long.",
        maxMessage: "The first name cannot be longer than {{ limit }} characters."
    )]
    private ?string $firstName = null;

    #[ORM\Column(type: 'string', length: 50)]
    #[Assert\NotBlank(message: "The last name is required.")]
    #[Assert\Length(
        min: 2,
        max: 50,
        minMessage: "The last name must be at least {{ limit }} characters long.",
        maxMessage: "The last name cannot be longer than {{ limit }} characters."
    )]
    private ?string $lastName = null;

    #[ORM\Column(type: 'string', length: 180, unique: true)]
    #[Assert\NotBlank(message: "The email is required.")]
    #[Assert\Email(message: "The email '{{ value }}' is not valid.")]
    private ?string $email = null;

    #[ORM\Column(type: 'string', length: 20, unique: true)]
    #[Assert\NotBlank(message: "The phone number is required.")]
    #[Assert\Length(
        min: 10,
        max: 20,
        minMessage: "The phone number must be at least {{ limit }} characters long.",
        maxMessage: "The phone number cannot be longer than {{ limit }} characters."
    )]
    private ?string $phoneNumber = null;

    #[ORM\Column(type: 'json')]
    private $roles = [];

    #[ORM\Column(type: 'string')]
    #[Assert\NotBlank(message: "The password is required.")]
    #[Assert\Length(
        min: 8,
        max: 255,
        minMessage: "The password must be at least {{ limit }} characters long.",
        maxMessage: "The password cannot be longer than {{ limit }} characters."
    )]
    private ?string $password = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): static
    {
        $this->firstName = $firstName;
        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): static
    {
        $this->lastName = $lastName;
        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;
        return $this;
    }

    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber(string $phoneNumber): static
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    public function getRoles(): array
    {
        $roles = $this->roles;
        // Ensure it's not empty
        if (empty($roles)) {
            $roles[] = 'ROLE_USER';
        }
        return array_unique($roles);
    }

public function setRoles(array $roles): self
{
    $this->roles = $roles;
    return $this;
}

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;
        return $this;
    }

    public function getUserIdentifier(): string
    {
        return $this->email;
    }

    public function eraseCredentials(): void
    {
    }
}