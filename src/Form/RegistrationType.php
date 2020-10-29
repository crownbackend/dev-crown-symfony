<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username', TextType::class, [
                'attr' => [
                    'class' => 'h-full-width'
                ],
                'label' => "Nom d'utilisateur"
            ])
            ->add('email', EmailType::class, [
                'attr' => [
                    'class' => 'h-full-width',
                    "placeholder" => "Emain de confirmation vous sera envoyer"
                ],
                'label' => "Email"
            ])
            ->add('password', PasswordType::class, [
                'attr' => [
                    "class" => "h-full-width"
                ],
                'label' => "Mot de passe"
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
