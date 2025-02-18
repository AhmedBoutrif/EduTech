<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\NotBlank(message: "The first name is required.")]
    private ?string $first_name = null;

    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\NotBlank(message: "The last name is required.")]
    private ?string $last_name = null;

    #[ORM\Column(type: 'string', length: 255, unique: true)]
    #[Assert\NotBlank(message: "The email is required.")]
    #[Assert\Email(message: "The email '{{ value }}' is not valid.")]
    private ?string $email = null;

    #[ORM\Column(type: 'json')]
    private array $roles = [];

    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\NotBlank(message: "The password is required.")]
    private ?string $password = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstName(): ?string
    {
        return $this->first_name;
    }

    public function setFirstName(string $first_name): self
    {
        $this->first_name = $first_name;
        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->last_name;
    }

    public function setLastName(string $last_name): self
    {
        $this->last_name = $last_name;
        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function getRoles(): array
{
    // Ensure a valid role is always returned
    if (empty($this->roles)) {
        return ['ROLE_STUDENT']; // Default to ROLE_STUDENT if no role exists
    }

    return array_unique($this->roles);
}


    

    public function setRoles(array $roles): self
    {
        // Ensure only valid roles are assigned
        $validRoles = ['ROLE_ADMIN', 'ROLE_STUDENT', 'ROLE_TUTOR'];
        $filteredRoles = array_intersect($roles, $validRoles);

        $this->roles = $filteredRoles;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;
        return $this;
    }

    public function eraseCredentials()
    {
        // Symfony requires this method but you can leave it empty.
    }

    public function getUserIdentifier(): string
    {
        return $this->email;
    }
}
