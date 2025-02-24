<?php
namespace App\Form;

use App\Entity\Certificat;
use App\Entity\Cours;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Validator\Constraints\File;

class CoursType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('titre')
        ->add('contenu', FileType::class, [
            'label' => 'Fichier PDF du cours',
            'mapped' => true, 
            'required' => false,
            'data_class' => null, 
            'constraints' => [
                new File([
                    'maxSize' => '5M',
                    'mimeTypes' => ['application/pdf'],
                    'mimeTypesMessage' => 'Veuillez télécharger un fichier PDF valide.',
                ]),
            ],
        ])
        
        ->add('categorie', TextType::class, [
            'label' => 'Catégorie du cours',
            'required' => false, // La catégorie est optionnelle
        ])
        ->add('certificat', EntityType::class, [
            'class' => Certificat::class,
            'choice_label' => 'id',
            'required' => false, // Si le certificat est optionnel
        ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Cours::class,
        ]);
    }
}