<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CountryType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('countryCode', Type\CountryType::class, [
                'required' => true,
            ])
            ->add('capacity', Type\NumberType::class, [
                'required' => true,
                'attr' => [
                    'min' => 0,
                ],
            ])
            ->add('save', Type\SubmitType::class, [
                'label' => 'Submit',
            ])
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'AppBundle\Entity\Country',
        ]);
    }

    /**
     * {@inheritdoc}
     */
     public function getName()
     {
         return null;
     }
}
