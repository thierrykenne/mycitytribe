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
            ->add('sex','choice', array( 'required' => false, 'choices' => array('m' => 'Male', 'f' => 'Female')))
	    ->add('language','text',array('required' => false))
            ->add('occupation','text',array('required' => false))
            ->add('visit_goal','choice',array( 'required' => false, 
						'choices' => array(
						'studies' => 'Studies',
						'Work' => 'Work',
						'Tourist' => 'Tourist',
						'To live' => 'To live'
				)))
            ->add('about_me','textarea',array('required' => false));
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

