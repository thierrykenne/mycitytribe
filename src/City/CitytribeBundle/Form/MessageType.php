<?php

namespace City\CitytribeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class MessageType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('titre')
            ->add('contenu')
            ->add('nationality','choice',array(
                'choices'=>array(
                        'destination'=>'Destination-Tribe',
                        'residence'=>'Hometown-Tribe'
                )))
        ;
    }

    public function getName()
    {
        return 'messagetype';
    }
}
