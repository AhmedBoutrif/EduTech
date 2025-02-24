<?php
namespace App\Form;

use App\Entity\Certificat;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank; // Ajout de l'importation

class CertificatType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomc', TextType::class, [
                'label' => 'Nom du certificat',
                'required' => true,
                'constraints' => [
                    new NotBlank(['message' => 'Le nom ne peut pas être vide.']),
                ],
            ])
            ->add('descriptionc', TextType::class, [
                'label' => 'Description',
                'required' => false,
                'constraints' => [
                    new NotBlank(['message' => 'La description ne peut pas être vide.']),
                ],
            ])
            ->add('prixc', IntegerType::class, [
                'label' => 'Prix',
                'required' => true,
                'constraints' => [
                    new NotBlank(['message' => 'Le prix ne peut pas être vide.']),
                ],
            ])
            ->add('prix_piece', IntegerType::class, [
                'label' => 'Prix par pièce',
                'required' => true,
                'constraints' => [
                    new NotBlank(['message' => 'Le prix par pièce ne peut pas être vide.']),
                ],
            ])
            ->add('questionc', CollectionType::class, [
                'entry_type' => TextType::class,
                'label' => 'Questions',
                'allow_add' => true,
                'allow_delete' => true,
                'by_reference' => false,
                'constraints' => [
                    new NotBlank(['message' => 'Les questions ne peuvent pas être vides.']),
                ],
            ])
            ->add('options', CollectionType::class, [
                'entry_type' => TextType::class,
                'label' => 'Options',
                'allow_add' => true,
                'allow_delete' => true,
                'by_reference' => false,
            ])
            ->add('reponse_correcte', CollectionType::class, [
                'entry_type' => TextType::class,
                'label' => 'Réponse correcte',
                'allow_add' => true,
                'allow_delete' => true,
                'by_reference' => false,
            ])
            ->add('reponseUtilisateur', CollectionType::class, [
                'entry_type' => TextType::class,
                'allow_add' => true,
                'allow_delete' => true,
                'prototype' => true,
            ])
            ->add('submit', SubmitType::class, [ // Corrected here
                'label' => 'Enregistrer',
                'attr' => ['class' => 'btn btn-primary'],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Certificat::class,
        ]);
    }
}
