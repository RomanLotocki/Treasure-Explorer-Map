<?php

namespace App\Form;

use App\Entity\Item;
use App\Entity\Site;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ItemType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('item_name', TextType::class, [
                "label" => "nom"
            ])
            ->add('item_image', TextType::class, [
                "label" => "lien de l'image"
            ])
            ->add('item_description', TextareaType::class, [
                "label" => "description de l'objet"
            ])
            ->add('discovery_description', TextareaType::class, [
                "label" => "description de la découverte"
            ])
            ->add('creation_date', TextType::class, [
                "label" => "date de création"
            ])
            ->add('discovery_date', TextType::class, [
                "label" => "date de découverte"
            ])
            ->add('item_latitude', NumberType::class, [
                "label" => "latitude"
            ])
            ->add('item_longitude', NumberType::class, [
                "label" => "longitude"
            ])
            ->add('item_country', TextType::class, [
                "label" => "pays"
            ])
            ->add('item_culture', TextType::class, [
                "label" => "culture ou période"
            ])
            ->add('item_materials', TextType::class, [
                "label" => "matériaux"
            ])
            ->add('item_conservation_site', TextType::class, [
                "label" => "lieu de conservation"
            ])
            ->add('item_conservation_site_url', TextType::class, [
                "label" => "lien du musée"
            ])
            ->add('site', EntityType::class, [
                'class' => Site::class,
                "label" => "site relié",
                // choice-label allow to choose which field will be displayed and chosen by the user
                'choice_label' => 'name',
                "multiple" => false,
                "expanded" => false,
                'placeholder' => 'choisir un site',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Item::class,
        ]);
    }
}
