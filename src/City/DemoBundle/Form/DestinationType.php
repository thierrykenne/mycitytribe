<?php

namespace City\DemoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class DestinationType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('countryId')
            ->add('name')
            ->add('type')
            ->add('parentId')
            //->add('users','entity', array('class'=>'City\DemoBundle\Entity\User', 'property'=>'id','multiple'=>true))
        ;
    }

    public function getName()
    {
        return 'city_demobundle_destinationtype';
    }
}
