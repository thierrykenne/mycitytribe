<?php

namespace City\CitytribeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class PlacesType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
	    $builder
            ->add('username')
            ->add('email')
            ->add('sex')
            ->add('occupation')
            ->add('visit_goal')
            ->add('avatar')
            ->add('about_me');
    }

    public function getName()
    {
        return 'city_citytribe_placestype';
    }

    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'City\UserBundle\Entity\User',
        );
    }
}

