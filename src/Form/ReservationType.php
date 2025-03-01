<?php

namespace App\Form;

use App\Entity\Reservation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Callback;
use Symfony\Component\Validator\Context\ExecutionContextInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class ReservationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('topic', TextType::class, [ // Explicitly set TextType
            'label' => 'Sujet',
            'attr' => [
                'class' => 'form-control',
                'maxlength' => '255',
            ],
            'required' => false, // Adjust if needed
        ])
          
            ->add('hour', TimeType::class, [
                'widget' => 'single_text',
                'input' => 'datetime',
                'mapped' => false,
                'data' => $options['current_hour'] ?? null,
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez sélectionner une heure']),
                    new Callback([$this, 'validateTimeRange'])
                ],
                'attr' => [
                    'class' => 'form-control time-picker',
                    'min' => $options['start_time'] ? $options['start_time']->format('H:i') : '00:00',
                    'max' => $options['end_time'] ? $options['end_time']->format('H:i') : '23:59',
                ],
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
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reservation::class,
            'date' => null,
            'start_time' => null,
            'end_time' => null,
            'current_hour' => null,
        ]);
    }

    public function validateTimeRange($value, ExecutionContextInterface $context)
    {
        $form = $context->getRoot();
        $startTime = $form->getConfig()->getOption('start_time');
        $endTime = $form->getConfig()->getOption('end_time');

        if (!$value || !$startTime || !$endTime) {
            return;
        }

        $selectedTime = $value->format('H:i');
        $startTimeStr = $startTime->format('H:i');
        $endTimeStr = $endTime->format('H:i');

        $selectedMinutes = $this->timeToMinutes($selectedTime);
        $startMinutes = $this->timeToMinutes($startTimeStr);
        $endMinutes = $this->timeToMinutes($endTimeStr);

        if ($selectedMinutes < $startMinutes || $selectedMinutes > $endMinutes) {
            $context->buildViolation('Veuillez sélectionner une heure entre {{ start }} et {{ end }}')
                ->setParameters([
                    '{{ start }}' => $startTimeStr,
                    '{{ end }}' => $endTimeStr
                ])
                ->addViolation();
        }
    }

    private function timeToMinutes(string $time): int
    {
        list($hours, $minutes) = explode(':', $time);
        return ($hours * 60) + $minutes;
    }
}
