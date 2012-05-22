<?php

namespace City\GeoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use FOS\UserBundle\Model\UserInterface;
use Symfony\Component\Form\Form;

use City\Userbundle\Entity\User;
use City\GeoBundle\Entity\RegionPolygon;
use City\GeoBundle\Form\UserType;
use City\GeoBundle\Form\UserHandler;

class DefaultController extends Controller
{
    
    public function residenceAction()
    {
        $user=$this->get_user();
        $username=$user->getUsername();
        $userId=$user->getId();
        $form    = $this->createForm(new UserType, $user);
        $formHandler = new UserHandler($form, $this->get('request'), $this->getDoctrine()->getEntityManager());
        if( $formHandler->process() )
        {
            return $this->redirect( $this->generateUrl('CityGeoBundle_destination' ));
        }

        return $this->render('CityGeoBundle:Default:index.html.twig', array(
            'form' => $form->createView(),
            'name'=>$username,
        ));
    }

    public function destinationAction()
    { 
        $user=$this->get_user();
        $username=$user->getUsername();
        $userId=$user->getId();
        $form = $this->createFormBuilder( $user)
            ->add('destination_city', 'text', array('required' => false))
            ->add('destination_region', 'text' , array('required' => false))
            ->add('destination_country', 'text', array('required' => false))
            ->add('destination_continent', 'text', array('required' => false))
            ->getForm();
        $formHandler = new UserHandler($form, $this->get('request'), $this->getDoctrine()->getEntityManager());
            if( $formHandler->process() )
            {
                return $this->redirect( $this->generateUrl('CitytribeBundle_homepage' ));
            }
        return $this->render('CityGeoBundle:Default:index.html.twig', array(
            'form' => $form->createView(),
            'name' => $username,
            'destination' => true,
    
        ));
    }
    // return coordinates of a region
    public function polygonAction()
    {
     	$request = $this->get('request');
   	    $country=$request->request->get('country');
        $region=$request->request->get('region');
        $repository = $this->getDoctrine()->getEntityManager()->getRepository('CityGeoBundle:RegionPolygon');
        if ($polygon = $repository->findOneBy(array('country' => $country,'region'=>$region)))
        	return new Response((string)$polygon->getPolygon()); 
	else    return new Response(0);
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
