<?php

namespace City\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('date')
            ->add('titre')
            ->add('contenu')
            ->add('pseudo')
            ->add('tags', 'collection', array('type' => new TagType))
        ;
    }

    public function getName()
    {
        return 'city_blogbundle_articletype';
    }

    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'City\BlogBundle\Entity\Article',
        );
    }
}
