<?php

namespace App\Validator\Constraints;

use Attribute;
use Symfony\Component\Validator\Constraint;

#[Attribute] // Ajout de l'attribut pour corriger l'erreur
class ForbiddenWords extends Constraint
{
    public string $message = "Votre publication contient des mots interdits : {{ word }}.";

    public function validatedBy(): string
    {
        return ForbiddenWordsValidator::class;
    }
}
