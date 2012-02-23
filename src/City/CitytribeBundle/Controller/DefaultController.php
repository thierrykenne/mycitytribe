<?php

namespace City\CitytribeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('CitytribeBundle:Default:index.html.twig');
    }
}
