<?php

namespace City\GeoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use FOS\UserBundle\Model\UserInterface;
use Symfony\Component\Form\Form;

use City\UserBundle\Entity\Residence;
use City\UserBundle\Entity\User;
use City\UserBundle\Entity\User_residence;
use City\GeoBundle\Entity\Locality;

use City\GeoBundle\Form\LocalityType;
/**
 * Residence controller.
 *
 */
class ResidenceController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $user=$this->get_user()->getId();
        $locality = New Locality();
        if ($userresidences = $em->getRepository('CityUserBundle:User_residence')
                           ->findBy(array('user'=>$user))) 
        {
            foreach ($userresidences as $userresidence) {
                
                switch ($userresidence->getResidence()->getType()) {
                    case 'country':
                        $locality->setCountry($userresidence->getResidence()->getName());
                        break;
                    case 'state':
                         $locality->setState($userresidence->getResidence()->getName());
                        break;
                    case 'region':
                         $locality->setRegion($userresidence->getResidence()->getName());
                        break;
                    case 'city':
                         $locality->setCity($userresidence->getResidence()->getName());
                        break;                   
                }
            }
            $create=False;
        }
         else {
            $create=True;
        }
        
        $editForm   = $this->createForm(new LocalityType(), $locality);

        return $this->render('CityGeoBundle:Residence:index.html.twig', array(
            'form' => $editForm->createView(),
            'create'=>$create,
            'locality'=>$locality,
            'user'=>$this->get_user()
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
            //Set all the residences 
            $residence_country=$this->new_country($country);
            $residence_state=$this->new_state($country,$state);
            $residence_region=$this->new_region($state,$region);
            $residence_city=$this->new_city($region,$city);
            // link a user to his residences
            $user_residence_country = new User_residence();
            $user_residence_country->setUser($user);
            $user_residence_country->setResidence($residence_country);
            $em->persist($user_residence_country); 

            $user_residence_state = new User_residence();
            $user_residence_state->setUser($user);
            $user_residence_state->setResidence($residence_state);
            $em->persist($user_residence_state);

            $user_residence_region = new User_residence();
            $user_residence_region->setUser($user); 
            $user_residence_region->setResidence($residence_region);
            $em->persist($user_residence_region);

            $user_residence_city = new User_residence();
            $user_residence_city->setUser($user); 
            $user_residence_city->setResidence($residence_city);  
            $em->persist($user_residence_city);           
            $em->flush();
            return $this->redirect($this->generateUrl('GeoBundle_dest'));
            
        }
        return new Response('Sorry !');           
        
    }


    /**
     * Edits an existing Residence entity.
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
            //Set all the residences 
            $residence_country=$this->new_country($country);
            $residence_state=$this->new_state($country,$state);
            $residence_region=$this->new_region($state,$region);
            $residence_city=$this->new_city($region,$city);

            // link a user to his residences
            $userresidences = $em->getRepository('CityUserBundle:User_residence')
                           ->findBy(array('user'=>$userId));

            foreach ($userresidences as $userresidence) {
                $userresidence->setUser($user);
                switch ($userresidence->getResidence()->getType()) {
                    case 'country':
                        $userresidence->setResidence($residence_country);
                        break;
                    case 'state':
                         $userresidence->setResidence($residence_state);
                        break;
                    case 'region':
                         $userresidence->setResidence($residence_region);
                        break;
                    case 'city':
                         $userresidence->setResidence($residence_city);
                        break;                   
                }
            $em->persist($userresidence);    
            }      
            $em->flush();

            return $this->redirect($this->generateUrl('Cityblog_home'));
            
        }
        return new Response('Sorry!');           
        
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
        if ($residence_country=$em->getRepository('CityUserBundle:Residence')->findOneBy(
                            array('name' => $country, 'type'=>'country'))) {
            return $residence_country;
        } else {
            $residence_country  = new Residence(); 
            $residence_country->setName($country);
            $residence_country->setType('country');
            $residence_country->setParentId(0);
            $em->persist($residence_country);
            $em->flush();
            return $residence_country;
        }
    }
    public function new_state($country,$state)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $lastCountry =$em->getRepository('CityUserBundle:Residence')->findBy(
                            array('name' => $country), array('id' => 'desc'),1,0);

        if ($residence_state=$em->getRepository('CityUserBundle:Residence')->findOneBy(
                            array('name' => $state, 'type'=>'state'))) {
            return $residence_state;
        } else {
            $residence_state  = new Residence(); 
            $residence_state->setName($state);
            $residence_state->setType('state');
            $residence_state->setParentId($lastCountry[0]->getId());
            $em->persist($residence_state);
            $em->flush();
            return $residence_state;
        }
    }
        
    public function new_region($state,$region)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $lastState =$em->getRepository('CityUserBundle:Residence')->findBy(
                                array('name' => $state));

        if ($residence_region=$em->getRepository('CityUserBundle:Residence')->findOneBy(
                            array('name' => $region, 'type'=>'region'))) {
            return $residence_region;
            
        } else {
            $residence_region  = new Residence(); 
            $residence_region->setName($region);
            $residence_region->setType('region');
            $residence_region->setParentId($lastState[0]->getId());
            $em->persist($residence_region);
            $em->flush();
            return $residence_region;
        }
    }

    public function new_city($region,$city)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $lastRegion =$em->getRepository('CityUserBundle:Residence')->findBy(
                                array('name' => $region), array('id' => 'desc'),1,0);

        if ($residence_city=$em->getRepository('CityUserBundle:Residence')->findOneBy(
                            array('name' => $city, 'type'=>'city'))) {
            return $residence_city;
        } else {
            $residence_city  = new Residence(); 
            $residence_city->setName($city);
            $residence_city->setType('city');
            $residence_city->setParentId($lastRegion[0]->getId());
            $em->persist($residence_city);
            $em->flush(); 
            return $residence_city;           
        }
    }   
}
