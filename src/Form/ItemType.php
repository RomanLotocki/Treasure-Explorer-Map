<?php

namespace App\Form;

use App\Entity\Item;
use App\Entity\Site;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ItemType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('item_name')
            ->add('item_image')
            ->add('item_description')
            ->add('discovery_description')
            ->add('creation_date')
            ->add('discovery_date')
            ->add('item_latitude')
            ->add('item_longitude')
            ->add('item_country')
            ->add('item_culture')
            ->add('item_materials')
            ->add('item_conservation_site')
            ->add('item_conservation_site_url')
            ->add('site', EntityType::class, [
                'class' => Site::class,
                'choice_label' => 'name',
                "multiple" => false,
                "expanded" => false
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
