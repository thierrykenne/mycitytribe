<?php

namespace City\GeoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class LocalityType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
	    $builder
            ->add('state')
            ->add('country')
            ->add('region')
            ->add('city');
    }

    public function getName()
    {
        return 'Geobundle_Localitytype';
    }

    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'City\GeoBundle\Entity\Locality',
        );
    }
}

