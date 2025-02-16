<?php

namespace App\Form;

use App\Entity\Panier;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Validator\Constraints as Assert;

class PanierType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nb_total', NumberType::class, [
                'label' => 'Nombre total d\'articles',
                'attr' => ['class' => 'form-control'],
                'constraints' => [
                    new Assert\NotBlank(message: "Le nombre total d'articles ne peut pas être vide."),
                    new Assert\Positive(message: "Le nombre total d'articles doit être un nombre positif."),
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Panier::class,
        ]);
    }
}
