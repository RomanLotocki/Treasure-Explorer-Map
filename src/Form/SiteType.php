<?php

namespace App\Form;

use App\Entity\Site;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class SiteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'nom du site'
            ])
            ->add('image', TextType::class, [
                'label' => 'lien de l\'image'
            ])
            ->add('site_description', TextareaType::class, [
                'label' => 'description du site'
            ])
            ->add('site_culture', TextType::class, [
                'label' => 'culture ou période'
            ])
            ->add('site_country', TextType::class, [
                'label' => 'pays'
            ])
            ->add('site_latitude', TextType::class, [
                'label' => 'latitude'
            ])
            ->add('site_longitude', TextType::class, [
                'label' => 'longitude'
            ])
            ->add('site_url', TextType::class, [
                'label' => 'lien du site officiel'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Site::class,
        ]);
    }
}
