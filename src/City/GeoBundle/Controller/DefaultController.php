<?php

namespace City\GeoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use FOS\UserBundle\Model\UserInterface;
use Symfony\Component\Form\Form;

use City\Userbundle\Entity\User;
use City\GeoBundle\Form\UserType;
use City\GeoBundle\Form\UserHandler;

class DefaultController extends Controller
{
    
    public function indexAction()
    {
        $user=$this->get_user();
        $username=$user->getUsername();
        $userId=$user->getId();
        //find data of user in database
        $user = $this->getDoctrine() ->getRepository('City\UserBundle\Entity\User')->find($userId);
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
        //find data of user in database
        $user = $this->getDoctrine() ->getRepository('City\UserBundle\Entity\User')->find($userId);
        $form = $this->createFormBuilder( $user)
            ->add('destination_city', 'text')
            ->add('destination_region', 'text')
            ->getForm();
        $formHandler = new UserHandler($form, $this->get('request'), $this->getDoctrine()->getEntityManager());
        if( $formHandler->process() )
        {
            return $this->redirect( $this->generateUrl('homepage' ));
        }

        return $this->render('CityGeoBundle:Default:index.html.twig', array(
            'form' => $form->createView(),
            'name' => $username,
            'destination' => true,
    
        ));
    }





    public function get_user()
    {
        $user = $this->container->get('security.context')->getToken()->getUser();
        
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }
        $userId=$user->getId();
        $em = $this->getDoctrine()->getEntityManager();
        if( ! $user = $em->getRepository('City\UserBundle\Entity\User')->find($userId) )
        {
            throw new NotFoundHttpException('User :'.$userId.'] inexistant');
        }
        return $user;
    }
   






}
