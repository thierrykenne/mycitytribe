<?php

namespace City\CitytribeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class MessageType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('titre','text',array('label'=>'Title'))
            ->add('contenu' ,'textarea',array('label'=>'Message'))
            ->add('nationality','text',array(
                'label'=>'Related Tribe'
                ))
        ;
    }

    public function getName()
    {
        return 'messagetype';
    }
}
