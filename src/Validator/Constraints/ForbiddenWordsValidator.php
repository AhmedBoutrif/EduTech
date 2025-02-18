<?php

namespace App\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class ForbiddenWordsValidator extends ConstraintValidator
{
    private array $forbiddenWords = ['disrespectful', 'merde', 'fuck','motherfucker','putin','stupide', 'idiot']; // Liste des mots interdits

    public function validate(mixed $value, Constraint $constraint): void
    {
        if (!$constraint instanceof ForbiddenWords) {
            return;
        }

        if (null === $value || '' === $value) {
            return;
        }

        foreach ($this->forbiddenWords as $word) {
            if (stripos($value, $word) !== false) {
                $this->context->buildViolation($constraint->message)
                    ->setParameter('{{ word }}', $word)
                    ->addViolation();
                return;
            }
        }
    }
}
