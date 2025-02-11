<?php

namespace App\Form;

use App\Entity\Reservation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReservationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('topic')
            ->add('start_time', DateTimeType::class, [
                'widget' => 'single_text',
                'label' => 'Date de début',
                'html5' => true,
            ])
            ->add('end_time', DateTimeType::class, [
                'widget' => 'single_text',
                'label' => 'Date de fin',
                'html5' => true,
            ])
            ->add('status');
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reservation::class,
        ]);
    }
}
