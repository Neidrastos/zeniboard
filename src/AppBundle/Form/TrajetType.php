<?php

namespace AppBundle\Form;


use AppBundle\Entity\LieuReception;
use AppBundle\Entity\NatureDeplacement;
use AppBundle\Entity\Utilisateur;

use AppBundle\Entity\Vehicule;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class TrajetType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('utilisateur', EntityType::class, array(

                'class' => Utilisateur::class,

                'choice_label' => function($utilisateur) {
                    return $utilisateur->getNomUtilisateur() . " " . $utilisateur->getPrenomUtilisateur();},
                'label' => 'Nom et Prénom'
            ))

            ->add('dateTrajet', DateTimeType::class, array(
                    'label' => 'Date du trajet :')
            )

            ->add('natureDeplacement', EntityType::class, array(
                'class' => NatureDeplacement::class,
                'choice_label' => 'getNomNatureDeplacement',
                'label' => 'Nature de votre déplacement : '
            ))

            ->add('lieuReception', EntityType::class, array(
                'class' => LieuReception::class,
                'choice_label' => 'getNomLieuReception',
                'label' => 'Votre lieu de départ : '
            ))
            ->add('nomDestinationTrajet', TextType::class, array(
                'constraints' => array(
                    new NotBlank()),
                'label' => 'Votre Destination : '
            ))

            ->add('vehicule', EntityType::class, array(
                'class' => Vehicule::class,
                'choice_label' => 'getImmatriculationVehicule',
                'label' => 'Immatriculation Véhicule'
            ))
            ->add('kilometrage', NumberType::class, array(
                    'label' => 'Kilométrage du véhicule à l arrivée : ',
                    'constraints' => array(
                        new NotBlank()),
                    'mapped' => false
            ))

            ->add('commentaireTrajet', TextareaType::class, array(
                'required' => false ,
                'constraints' => array(
                    new Length(array('max' => '255'))
                )

            ))
            ->add('Envoyer', SubmitType::class);

    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Trajet'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_trajet';
    }


}
