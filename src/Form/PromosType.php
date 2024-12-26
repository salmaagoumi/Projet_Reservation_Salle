<?php

namespace App\Form;

use App\Entity\Filiere;
use App\Entity\Promos;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PromosType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom_promos')
            ->add('nbr_eleves')
            ->add('filiere', EntityType::class, [
                'class' => Filiere::class,
                'choice_label' => 'nom_filiere',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Promos::class,
        ]);
    }
}
