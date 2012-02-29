<?php

namespace City\CitytribeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class PersonInfoType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
	    $builder
            ->add('username')
            ->add('email','email')
            ->add('sex','choice', array( 'choices' => array('m' => 'Male', 'f' => 'Female'))
            ->add('birth_year')
            ->add('occupation')
            ->add('visit_goal')
            ->add('avatar')
            ->add('about_me','textarea');
    }

    public function getName()
    {
        return 'city_citytribe_personinfotype';
    }

    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'City\UserBundle\Entity\User',
        );
    }
}

