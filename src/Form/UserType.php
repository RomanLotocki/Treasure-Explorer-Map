<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\CallbackTransformer;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email')
            ->add('roles', ChoiceType::class, [
                "choices" => [
                    "Admin" => "ROLE_ADMIN",
                    "Superadmin" => "ROLE_SUPERADMIN"
                ],
                "multiple" => false,
                "expanded" => true
            ])
            ->add('password')
            ->add('firstName')
            ->add('lastName')
        ;

        // To allow a radiobutton selection by putting multiple false (choose only one role) we had to convert an array to a string using a CallbackTransformer to transform the datas. In this case it transforms array datas into string datas for the form and changes it back in a array for the DB.
        $builder->get('roles')->addModelTransformer(new CallbackTransformer(
        fn ($rolesAsArray) => count($rolesAsArray) ? $rolesAsArray[0]: null,
        fn ($rolesAsString) => [$rolesAsString]
        ));
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
