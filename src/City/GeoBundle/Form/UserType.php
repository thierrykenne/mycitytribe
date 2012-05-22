<?php

namespace City\GeoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class UserType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
	    $builder
            ->add('residence_city')
            ->add('residence_region')
            ->add('residence_country')
            ->add('residence_continent');
    }

    public function getName()
    {
        return 'city_Geobundle_Usertype';
    }

    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'City\UserBundle\Entity\User',
        );
    }
}

