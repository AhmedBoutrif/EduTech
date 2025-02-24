<?php
namespace App\Form;

use App\Entity\Quiz;
use App\Entity\Cours;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Validator\Constraints\NotBlank;

class QuizType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('questions', CollectionType::class, [
                'entry_type' => TextType::class, // Utilisez EntityType::class si vous avez une entité Question
                'allow_add' => true,
                'allow_delete' => true,
                'prototype' => true,
                'by_reference' => false,
                'label' => 'Questions',
                'entry_options' => [
                    'constraints' => [
                        new NotBlank(['message' => 'La question ne peut pas être vide.']),
                    ],
                ],
            ])
            ->add('options', CollectionType::class, [
                'entry_type' => TextType::class, // Utilisez EntityType::class si vous avez une entité Option
                'allow_add' => true,
                'allow_delete' => true,
                'prototype' => true,
                'by_reference' => false,
                'label' => 'Options',
                'entry_options' => [
                    'constraints' => [
                        new NotBlank(['message' => 'L\'option ne peut pas être vide.']),
                    ],
                ],
            ])
            ->add('reponsesCorrectes', CollectionType::class, [
                'entry_type' => TextType::class, // Utilisez EntityType::class si vous avez une entité RéponseCorrecte
                'allow_add' => true,
                'allow_delete' => true,
                'prototype' => true,
                'by_reference' => false,
                'label' => 'Réponses Correctes',
                'entry_options' => [
                    'constraints' => [
                        new NotBlank(['message' => 'La réponse correcte ne peut pas être vide.']),
                        
                    ],
                ],
            ])
            ->add('reponsesUtilisateur', CollectionType::class, [
                'entry_type' => TextType::class, // Utilisez EntityType::class si vous avez une entité RéponseUtilisateur
                'allow_add' => true,
                'allow_delete' => true,
                'prototype' => true,
                'by_reference' => false,
                'label' => 'Réponses Utilisateur',
                'entry_options' => [
                    'constraints' => [
                        new NotBlank(['message' => 'La réponse utilisateur ne peut pas être vide.']),
                    ],
                ],
            ])
            ->add('cours', EntityType::class, [
                'class' => Cours::class,
                'choice_label' => 'titre',
                'label' => 'Cours associé',
                'placeholder' => 'Sélectionnez un cours', // Optionnel
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Quiz::class,
        ]);
    }
}