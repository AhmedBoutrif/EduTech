<?php

namespace App\Form;

use App\Entity\Reservation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReservationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('topic', null, [
            'attr' => [
                'id' => 'reservation_topic',
                'class' => 'form-control',
            ],
        ])
            ->add('start_time', DateTimeType::class, [
                'widget' => 'single_text',
                'label' => 'Date de début',
                'html5' => true,
                'input' => 'datetime', // Permet d'éviter les conversions étranges
                'required' => true, // Empêche l'envoi de NULL

            ])
            ->add('duration', ChoiceType::class, [
                'choices' => [
                    '15 minutes' => 15,
                    '20 minutes' => 20,
                    '30 minutes' => 30,
                ],
                'label' => 'Durée',
                'required' => true,
            ]);
          //  ->add('status')
          
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reservation::class,
        ]);
    }
}