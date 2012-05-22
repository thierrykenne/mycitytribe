<?php

namespace City\DemoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class UserType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('name')
            //->add('destinations')
        ;
    }

    public function getName()
    {
        return 'city_demobundle_usertype';
    }
}
