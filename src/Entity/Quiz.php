<?php

namespace App\Entity;

use App\Repository\QuizRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: QuizRepository::class)]
class Quiz
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: 'integer', nullable: true)]
    private ?int $note = null;

    #[ORM\Column(type: 'array')]
    private array $reponse_utilisateur = [];

    /**
     * @var Collection<int, Question>
     */
    #[ORM\OneToMany(targetEntity: Question::class, mappedBy: 'quiz')]
    private Collection $questions;

    public function __construct()
    {
        $this->questions = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNote(): ?int
    {
        return $this->note;
    }

    public function setNote(?int $note): static
    {
        $this->note = $note;
        return $this;
    }

    public function getReponseUtilisateur(): array
{
    return $this->reponse_utilisateur;
}

public function setReponseUtilisateur(array $reponse_utilisateur): self
{
    $this->reponse_utilisateur = $reponse_utilisateur;
    return $this;
}

    /**
     * @return Collection<int, Question>
     */
    public function getQuestions(): Collection
    {
        return $this->questions;
    }

    public function addQuestion(Question $question): static
    {
        if (!$this->questions->contains($question)) {
            $this->questions[] = $question;
            $question->setQuiz($this);
        }
        return $this;
    }

    public function removeQuestion(Question $question): static
    {
        if ($this->questions->removeElement($question)) {
            if ($question->getQuiz() === $this) {
                $question->setQuiz(null);
            }
        }
        return $this;
    }


    public function calculerNote(): int // Méthode pour calculer la note
    {
        $note = 0;
        foreach ($this->questions as $index => $question) {
            if (isset($this->reponseUtilisateur[$index]) && $this->reponseUtilisateur[$index] === $question->getReponseCorrecte()) {
                $note++;
            }
        }
        return $note;
    }
}