<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('firstName', TextType::class, [
                'label' => 'First Name',
                'required' => true,
                'attr' => ['class' => 'form-control'],
            ])
            ->add('lastName', TextType::class, [
                'label' => 'Last Name',
                'required' => true,
                'attr' => ['class' => 'form-control'],
            ])
            ->add('email', EmailType::class, [
                'label' => 'Email',
                'required' => true,
                'attr' => ['class' => 'form-control'],
            ])
            ->add('phoneNumber', TextType::class, [
                'label' => 'Phone Number',
                'required' => true,
                'attr' => ['class' => 'form-control'],
            ])
            ->add('roles', ChoiceType::class, [
                'label' => 'Roles',
                'choices' => [
                    'Admin' => 'ROLE_ADMIN',
                    'Teacher' => 'ROLE_TEACHER',
                    'Student' => 'ROLE_STUDENT',
                ],
                'multiple' => false,  // If you want to allow multiple roles
                'expanded' => true,
                'data'=>'ROLE_STUDENT',
                'choice_filter' => function($choice) {
                    if (is_string($choice)) {
                        return [$choice];
                    }
                    return $choice;
                }
            ])
            ->add('password', RepeatedType::class, [
                'type' => PasswordType::class,
                'first_options' => ['label' => 'Password', 'attr' => ['class' => 'form-control']],
                'second_options' => ['label' => 'Confirm Password', 'attr' => ['class' => 'form-control']],
            
            ]);
            $builder->get('roles')
    ->addModelTransformer(new CallbackTransformer(
        function ($rolesArray) {
            // Vérifier si $rolesArray est bien un tableau avant d'utiliser count()
            return is_array($rolesArray) && count($rolesArray) ? $rolesArray[0] : null;
        },
        function ($rolesString) {
            // Toujours renvoyer un tableau, même si une seule valeur est sélectionnée
            return is_string($rolesString) ? [$rolesString] : [];
        }
    ));

    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
} 