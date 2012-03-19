<?php
// src/City/CitytribeBundle/Menu/Builder.php
namespace City\CitytribeBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

class Builder extends ContainerAware
{
    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');
        $menu->setCurrentUri($this->container->get('request')->getRequestUri());

        $menu->addChild('Home', array('route' => 'CitytribeBundle_homepage'));
        $menu->addChild('Profile');
        $menu['Profile']->setUri('#comments');
        $menu['Profile']->addChild('informations', array(
            'route' => 'CitytribeBundle_profile',
            'routeParameters' => array('type' => 'informations')
            ));
        $menu['Profile']->addChild('places', array(
            'route' => 'CitytribeBundle_profile',
            'routeParameters' => array('type' => 'places')
            ));
        $menu['Profile']->addChild('Avatar', array('route' => 'CitytribeBundle_avatar'));
        /* $menu->addChild('About Me', array(
            'route' => 'page_show',
            'routeParameters' => array('id' => 42)
        ));
        // ... add more children*/


        return $menu;
    }
}