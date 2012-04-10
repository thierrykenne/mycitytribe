<?php

namespace City\CitytribeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class MessageType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('date')
            ->add('titre')
            ->add('contenu')
        ;
    }

    public function getName()
    {
        return 'city_blogbundle_messagetype';
    }
}
