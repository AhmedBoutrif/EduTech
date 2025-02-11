<?php

namespace App\Entity;

use App\Repository\QuizRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: QuizRepository::class)]
class Quiz
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::ARRAY)]
    private array $questions = [];

    #[ORM\Column(type: Types::ARRAY)]
    private array $options = [];

    #[ORM\Column(type: Types::ARRAY)]
    private array $reponsesCorrectes = [];

    #[ORM\Column(length: 255)]
    private ?string $reponsesUtilisateur = null;

    #[ORM\Column]
    private ?int $note = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuestions(): array
    {
        return $this->questions;
    }

    public function setQuestions(array $questions): static
    {
        $this->questions = $questions;

        return $this;
    }

    public function getOptions(): array
    {
        return $this->options;
    }

    public function setOptions(array $options): static
    {
        $this->options = $options;

        return $this;
    }

    public function getReponsesCorrectes(): array
    {
        return $this->reponsesCorrectes;
    }

    public function setReponsesCorrectes(array $reponsesCorrectes): static
    {
        $this->reponsesCorrectes = $reponsesCorrectes;

        return $this;
    }

    public function getReponsesUtilisateur(): ?string
    {
        return $this->reponsesUtilisateur;
    }

    public function setReponsesUtilisateur(string $reponsesUtilisateur): static
    {
        $this->reponsesUtilisateur = $reponsesUtilisateur;

        return $this;
    }

    public function getNote(): ?int
    {
        return $this->note;
    }

    public function setNote(int $note): static
    {
        $this->note = $note;

        return $this;
    }
}
