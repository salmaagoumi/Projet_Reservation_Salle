<?php

namespace App\Form;

use App\Entity\Enseignant;
use App\Entity\Matiere;
use App\Entity\Promos;
use App\Entity\Reservation;
use App\Entity\Salle;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReservationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('promos', EntityType::class, [
                'class' => Promos::class,
                'choice_label' => 'nom_promos',
                'choice_value' => 'id',
            ])
            ->add('enseignant', EntityType::class, [
                'class' => Enseignant::class,
                'choice_label' => 'nom',
                'choice_value' => 'id',
            ])
            ->add('matiere', EntityType::class, [
                'class' => Matiere::class,
                'choice_label' => 'nom_matiere',
                'choice_value' => 'id',
            ])
            ->add('salle', EntityType::class, [
                'class' => Salle::class,
                'choice_label' => 'nom_salle',
                'choice_value' => 'id',
            ])

            ->add('jour', null, [
                'widget' => 'single_text',
            ])
            ->add('heur_deb', null, [
                'widget' => 'single_text',
            ])
            ->add('heur_fin', null, [
                'widget' => 'single_text',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reservation::class,
        ]);
    }
}
