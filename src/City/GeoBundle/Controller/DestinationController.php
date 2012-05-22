<?php

namespace City\GeoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use FOS\UserBundle\Model\UserInterface;
use Symfony\Component\Form\Form;

use City\UserBundle\Entity\Destination;
use City\UserBundle\Entity\User;
use City\UserBundle\Entity\User_destination;
use City\GeoBundle\Entity\Locality;

use City\GeoBundle\Form\LocalityType;
/**
 * Destination controller.
 *
 */
class DestinationController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $user=$this->get_user()->getId();
        $locality = New Locality();
        if ($userdestinations = $em->getRepository('CityUserBundle:User_destination')
                           ->findBy(array('user'=>$user))) 
        {
            foreach ($userdestinations as $userdestination) {
                
                switch ($userdestination->getDestination()->getType()) {
                    case 'country':
                        $locality->setCountry($userdestination->getDestination()->getName());
                        break;
                    case 'state':
                         $locality->setState($userdestination->getDestination()->getName());
                        break;
                    case 'region':
                         $locality->setRegion($userdestination->getDestination()->getName());
                        break;
                    case 'city':
                         $locality->setCity($userdestination->getDestination()->getName());
                        break;                   
                }
            }
            $create=False;
        }
         else {
            $create=True;
        }
        
        $editForm   = $this->createForm(new LocalityType(), $locality);

        return $this->render('CityGeoBundle:Destination:index.html.twig', array(
            'form' => $editForm->createView(),
            'create'=>$create,
            'locality'=>$locality,
            'user' =>$this->get_user()
        ));
    }

    public function createAction()
    {
        $user=$this->get_user();
        $em = $this->getDoctrine()->getEntityManager();
        $request = $this->getRequest();
        $locality = New Locality();
        $form    = $this->createForm(new LocalityType(), $locality);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $state=$form->getData()->getState();
            $region=$form->getData()->getRegion();
            $country=$form->getData()->getCountry();
            $city=$form->getData()->getCity();
            //Set all the destinations 
            $destination_country=$this->new_country($country);
            $destination_state=$this->new_state($country,$state);
            $destination_region=$this->new_region($state,$region);
            $destination_city=$this->new_city($region,$city);
            // link a user to his destinations
            $user_destination_country = new User_destination();
            $user_destination_country->setUser($user);
            $user_destination_country->setDestination($destination_country);
            $em->persist($user_destination_country); 

            $user_destination_state = new User_destination();
            $user_destination_state->setUser($user);
            $user_destination_state->setDestination($destination_state);
            $em->persist($user_destination_state);

            $user_destination_region = new User_destination();
            $user_destination_region->setUser($user); 
            $user_destination_region->setDestination($destination_region);
            $em->persist($user_destination_region);

            $user_destination_city = new User_destination();
            $user_destination_city->setUser($user); 
            $user_destination_city->setDestination($destination_city);  
            $em->persist($user_destination_city);           
            $em->flush();

            return $this->redirect($this->generateUrl('Cityblog_home'));
            
        }
        return new Response('pas OK');           
        
    }

    public function showAction()
    {
        $user=$this->get_user()->getId();
        $em = $this->getDoctrine()->getEntityManager();
        $userdestinations = $em->getRepository('CityUserBundle:User_destination')
                           ->findBy(array('user'=>$user));
        return $this->render('CityUserBundle:destination:show.html.twig', array(
                "userdestinations"=>$userdestinations
                ));

    }

    /**
     * Edits an existing Destination entity.
     *
     */
public function updateAction()
    {
        $user=$this->get_user();
        $userId=$this->get_user()->getId();
        $em = $this->getDoctrine()->getEntityManager();
        $request = $this->getRequest();
        $locality = New Locality();
        $form    = $this->createForm(new LocalityType(), $locality);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $state=$form->getData()->getState();
            $region=$form->getData()->getRegion();
            $country=$form->getData()->getCountry();
            $city=$form->getData()->getCity();
            //Set all the destinations 
            $destination_country=$this->new_country($country);
            $destination_state=$this->new_state($country,$state);
            $destination_region=$this->new_region($state,$region);
            $destination_city=$this->new_city($region,$city);

            // link a user to his destinations
            $userdestinations = $em->getRepository('CityUserBundle:User_destination')
                           ->findBy(array('user'=>$userId));

            foreach ($userdestinations as $userdestination) {
                $userdestination->setUser($user);
                switch ($userdestination->getDestination()->getType()) {
                    case 'country':
                        $userdestination->setDestination($destination_country);
                        break;
                    case 'state':
                         $userdestination->setDestination($destination_state);
                        break;
                    case 'region':
                         $userdestination->setDestination($destination_region);
                        break;
                    case 'city':
                         $userdestination->setDestination($destination_city);
                        break;                   
                }
                 $em->persist($userdestination);    
            }      
            $em->flush();

             return $this->redirect($this->generateUrl('Cityblog_home'));
            
        }
        return new Response('pas OK');           
        
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
    public function new_country($country){
        $em = $this->getDoctrine()->getEntityManager();
        if ($destination_country=$em->getRepository('CityUserBundle:Destination')->findOneBy(
                            array('name' => $country, 'type'=>'country'))) {
            return $destination_country;
        } else {
            $destination_country  = new Destination(); 
            $destination_country->setName($country);
            $destination_country->setType('country');
            $destination_country->setParentId(0);
            $em->persist($destination_country);
            $em->flush();
            return $destination_country;
        }
    }
    public function new_state($country,$state)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $lastCountry =$em->getRepository('CityUserBundle:Destination')->findBy(
                            array('name' => $country), array('id' => 'desc'),1,0);

        if ($destination_state=$em->getRepository('CityUserBundle:Destination')->findOneBy(
                            array('name' => $state, 'type'=>'state'))) {
            return $destination_state;
        } else {
            $destination_state  = new Destination(); 
            $destination_state->setName($state);
            $destination_state->setType('state');
            $destination_state->setParentId($lastCountry[0]->getId());
            $em->persist($destination_state);
            $em->flush();
            return $destination_state;
        }
    }
        
    public function new_region($state,$region)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $lastState =$em->getRepository('CityUserBundle:Destination')->findBy(
                                array('name' => $state));

        if ($destination_region=$em->getRepository('CityUserBundle:Destination')->findOneBy(
                            array('name' => $region, 'type'=>'region'))) {
            return $destination_region;
            
        } else {
            $destination_region  = new Destination(); 
            $destination_region->setName($region);
            $destination_region->setType('region');
            $destination_region->setParentId($lastState[0]->getId());
            $em->persist($destination_region);
            $em->flush();
            return $destination_region;
        }
    }

    public function new_city($region,$city)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $lastRegion =$em->getRepository('CityUserBundle:Destination')->findBy(
                                array('name' => $region), array('id' => 'desc'),1,0);

        if ($destination_city=$em->getRepository('CityUserBundle:Destination')->findOneBy(
                            array('name' => $city, 'type'=>'city'))) {
            return $destination_city;
        } else {
            $destination_city  = new Destination(); 
            $destination_city->setName($city);
            $destination_city->setType('city');
            $destination_city->setParentId($lastRegion[0]->getId());
            $em->persist($destination_city);
            $em->flush(); 
            return $destination_city;           
        }
    }   
}
