<?php

namespace City\CitytribeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use FOS\UserBundle\Model\UserInterface;
use Symfony\Component\Form\Form;

use City\Userbundle\Entity\User;

class DefaultController extends Controller
{
    
    public function indexAction()
    {
        $user=$this->get_user();
        // check geografical coordinates
        if( $user->getResidenceRegion()=='')
            return $this->redirect( $this->generateUrl('CityGeoBundle_origin_region' ));

        if ($user->getDestinationCity()=='' || $user->getDestinationRegion()==''|| $user->getDestinationCountry()=='')
             $this->get('session')->setFlash('notice', 'Your destination region is not set! You can change it on Profile');


        return $this->render('CitytribeBundle:Default:index.html.twig');
    }


    public function get_user()
    {
        $user = $this->container->get('security.context')->getToken()->getUser();
        
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }
        return $user;
    }
}


