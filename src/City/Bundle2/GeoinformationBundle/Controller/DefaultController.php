<?php

namespace City\Bundle\GeoinformationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('GeoinformationBundle:Default:index.html.twig', array('name' => $name));
    }
}
