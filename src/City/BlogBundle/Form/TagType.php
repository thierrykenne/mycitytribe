<?php

namespace City\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class TagType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('nom')
        ;
    }

    public function getName()
    {
        return 'city_blogbundle_tagtype';
    }

    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'City\BlogBundle\Entity\Tag',
        );
    }
}
