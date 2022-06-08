<?php

namespace App\Form;

use App\Entity\Item;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ItemType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            ->add('image')
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
            ->add('site')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Item::class,
        ]);
    }
}
