<?php

namespace City\CitytribeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use FOS\UserBundle\Model\UserInterface;

use City\CitytribeBundle\Entity\Message;
use City\CitytribeBundle\Entity\Thread;
use City\CitytribeBundle\Form\MessageType;

class BlogController extends Controller
{
    public function indexAction($page,$type)
    {
        $session = $this->getRequest()->getSession();
        $user=$this->get_user();
        if(!$residences=$this->get_user_residences($user->getId())){
            $session->set('notice','new User');
            return $this->redirect($this->generateUrl('GeoBundle_resi'));
        }
        if (!$destinations=$this->get_user_destinations($user->getId())){
            $session->set('notice','new User');
            return $this->redirect($this->generateUrl('GeoBundle_dest'));
        }
        $em = $this->getDoctrine()->getEntityManager();
        
        $repository = $em->getRepository('CitytribeBundle:Message');
        if ($type =="destination")
        {
            $nb_messages = $repository->getAllCountry($user->getNationality(),$destinations['country']);
            $session->set('type', 'destination');
            $session->set('country_tribe', array('d'=>'destination',
                                                'c'=>$destinations['country']));
            $session->set('country_tribe2', array('d'=>'residence',
                                                  'c'=>$residences['country']));
        }
        elseif ($type =="residence") {
             $nb_messages = $repository->getAllCountry($user->getNationality(),$residences['country']);
             $session->set('country_tribe', array('d'=>'residence',
                                                  'c'=>$residences['country']));
             $session->set('country_tribe2', array('d'=>'destination',
                                                    'c'=>$destinations['country']));
             $session->set('type', 'residence');
        }
        else { throw $this->createNotFoundException('Page unfound (type = '.$type.')');}

        $nb_messages_page = 10;


        $nb_pages = ceil($nb_messages/$nb_messages_page);

        $offset = ($page-1) * $nb_messages_page;
        if ($page!=1) {
            if( $page < 1 OR $page > $nb_pages )
            {
                throw $this->createNotFoundException('Page unfound (page = '.$page.')');
            }
        }    

        $messages = $repository->findBy(
            array(
                'nationality'=>$user->getNationality(),
                'country_tribe'=>$destinations['country']
                ),                 
            array('date' => 'desc'), // On tri par date décroissante
            $nb_messages_page,       // On sélectionne $nb_messages_page messages
            $offset                  // A partir du $offset ième
        );

        return $this->render('CitytribeBundle:Blog:index.html.twig', array(
            'messages'      => $messages,
            'page'          => $page,    
            'nb_pages'      => $nb_pages,
            'user'          => $user,
            'type'          =>$type 
        ));
    }

    /**
     * Finds and displays a Message entity.
     *
     */
    public function showAction($id)
    {
        $user= $this->get_user();
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('CitytribeBundle:Message')->find($id);
        $numComments=$entity->getThread()->getNumComments();

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Message entity.');
        }

        return $this->render('CitytribeBundle:Blog:show.html.twig', array(
            'message'      => $entity,
            'user'         => $user,
            'num'          => $numComments,
        ));
    }

    /**
     * Displays a form to create a new Message entity.
     *
     */
    public function newAction()
    {
        $user= $this->get_user();
        $entity = new Message();
        $form   = $this->createForm(new MessageType(), $entity);

        return $this->render('CitytribeBundle:Blog:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'user'=>$user
        ));
    }

    /**
     * Creates a new Message entity.
     *
     */
    public function createAction()
    {
        $user= $this->get_user();
        $entity  = new Message();
        $request = $this->getRequest();
        $form    = $this->createForm(new MessageType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {

    //manage thread        
            $thread = new Thread();
            $thread->setId(uniqid());
            $thread->setPermalink('empty');
    //find user destinations
            $user=$this->get_user();
            $em = $this->getDoctrine()->getEntityManager();
            if($entity->getNationality()=='destination'){


                if ($userdestinations = $em->getRepository('CityUserBundle:User_destination')
                                   ->findBy(array('user'=>$user->getId()))) 
                {
                    foreach ($userdestinations as $userdestination) {
                        
                        switch ($userdestination->getDestination()->getType()) {
                            case 'country':
                                $entity->setCountryTribe($userdestination->getDestination()->getName());
                                break;
                            case 'state':
                                 $entity->setStateTribe($userdestination->getDestination()->getName());
                                break;
                            case 'region':
                                 $entity->setRegionTribe($userdestination->getDestination()->getName());
                                break;
                            case 'city':
                                 $entity->setCityTribe($userdestination->getDestination()->getName());
                                break;                   
                        }
                    }
                }
            }
            elseif($entity->getNationality()=='residence')
            { 
                if ($residences = $em->getRepository('CityUserBundle:User_residence')
                                   ->findBy(array('user'=>$user->getId()))) 
                {
                    foreach ($residences as $residence) {
                        
                        switch ($residence->getDestination()->getType()) {
                            case 'country':
                                $entity->setCountryTribe($residence->getDestination()->getName());
                                break;
                            case 'state':
                                 $entity->setStateTribe($residence->getDestination()->getName());
                                break;
                            case 'region':
                                 $entity->setRegionTribe($residence->getDestination()->getName());
                                break;
                            case 'city':
                                 $entity->setCityTribe($residence->getDestination()->getName());
                                break;                   
                        }
                    }
                }
            }
            else{
                 throw new AccessDeniedException('You are not allow to change Parameters!');
            }
            $entity->setNationality($user->getNationality());
            $entity->setThread($thread);
            $entity->setAuthor($user);

            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('message_show', array('id' => $entity->getId())));
            
        }

        return $this->render('CitytribeBundle:Blog:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'user'=>$user
        ));
    }
    /**
     * Displays a form to edit an existing Message entity.
     *
     */
    public function editAction($id)
    {
        $user= $this->get_user();
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('CitytribeBundle:Message')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Message entity.');
        }

        $editForm = $this->createForm(new MessageType(), $entity);

        return $this->render('CitytribeBundle:Blog:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'user'=>$user
        ));
    }

    /**
     * Edits an existing Message entity.
     *
     */
    public function updateAction($id)
    {
        $user= $this->get_user();
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('CitytribeBundle:Message')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Message entity.');
        }

        $editForm   = $this->createForm(new MessageType(), $entity);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('message_show', array('id' => $id)));
        }

        return $this->render('CitytribeBundle:Blog:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'user'=>$user
        ));
    }

    public function get_user()
    {
        $user = $this->container->get('security.context')->getToken()->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }
        return $user;
    }
   
    public  function get_user_destinations( $id)
    {
        $destination=array();
        $em = $this->getDoctrine()->getEntityManager();
        if ($userdestinations = $em->getRepository('CityUserBundle:User_destination')
                                        ->findByUser($id))
            {
                foreach ($userdestinations as $userdestination) {
                    
                    switch ($userdestination->getDestination()->getType()) {
                        case 'country':
                            $destination['country']=$userdestination->getDestination()->getName();
                            break;
                        case 'state':
                             $destination['state']=$userdestination->getDestination()->getName();
                            break;
                        case 'region':
                             $destination['region']=$userdestination->getDestination()->getName();
                            break;
                        case 'city':
                             $destination['city']=$userdestination->getDestination()->getName();
                            break;                   
                    }
                
                }
                return $destination;
            }else { return false;}
    }

    public  function get_user_residences( $id)
    {
        $residence=array();
        $em = $this->getDoctrine()->getEntityManager();
        if (
                $userresidences = $em->getRepository('CityUserBundle:User_residence')
                                        ->findByUser($id)
            ) 
            {  
                foreach ($userresidences as $userresidence) {
                    switch ($userresidence->getResidence()->getType()) {
                        case 'country':
                            $residence['country']=$userresidence->getResidence()->getName();
                            break;
                        case 'state':
                             $residence['state']=$userresidence->getResidence()->getName();
                            break;
                        case 'region':
                             $residence['region']=$userresidence->getResidence()->getName();
                            break;
                        case 'city':
                             $residence['city']=$userresidence->getResidence()->getName();
                            break;                   
                    }
                }
                return $residence;
            }else { return False;}
    }

    public function usersAction($type){
        $user=$this->get_user();
        if(!$residences=$this->get_user_residences($user->getId())){
            return $this->redirect($this->generateUrl('GeoBundle_resi'));
        }
        if (!$destinations=$this->get_user_destinations($user->getId())){
            return $this->redirect($this->generateUrl('GeoBundle_dest'));
        }
        $em = $this->getDoctrine()->getEntityManager();
        if ($type=='destination'){
            $userdestinations = $em->getRepository('CityUserBundle:User_destination')
                               ->findBy(array('user'=>$user->getId(),'activated'=>True),array(),1,0);
            $destination =$userdestinations[0]->getDestination()->getId();

            $TribeUsers = $em->getRepository('CityUserBundle:User_destination')
                               ->findBy(array('destination'=>$destination,'activated'=>True)); 
            $allTribeUsers=array(); 

        // This Method is too bad To change in the next version

            foreach ($TribeUsers as $tribeUser) {
                
                if($user->getNationality() == $tribeUser->getUser()->getNationality()) 
                {
                    $numComments=$em->getRepository('CitytribeBundle:Comment')
                        ->getAuthorNumComments($tribeUser->getUser());

                    $numMsg=$em->getRepository('CitytribeBundle:Message')
                                ->getTotalUser($tribeUser->getUser());

                    $allTribeUsers[]=array(
                                            'user'          =>$tribeUser->getUser(),
                                            'numComments'   =>$numComments,
                                            'numMsg'        =>$numMsg
                                            );            
                }
                    
            }    
        }
        else
        {
            $userresidence = $em->getRepository('CityUserBundle:User_residence')
                               ->findBy(array('user'=>$user->getId(),'activated'=>True),array(),1,0);
            $residence =$userresidence[0]->getResidence()->getId();

            $TribeUsers = $em->getRepository('CityUserBundle:User_residence')
                               ->findBy(array('residence'=>$residence,'activated'=>True)); 
            $allTribeUsers=array();                   
            foreach ($TribeUsers as $tribeUser) {
                
                if($user->getNationality() == $tribeUser->getUser()->getNationality()) 
                {
                    $numComments=$em->getRepository('CitytribeBundle:Comment')
                        ->getAuthorNumComments($tribeUser->getUser());

                    $numMsg=$em->getRepository('CitytribeBundle:Message')
                                ->getTotalUser($tribeUser->getUser());

                    $allTribeUsers[]=array(
                                            'user'          =>$tribeUser->getUser(),
                                            'numComments'   =>$numComments,
                                            'numMsg'        =>$numMsg
                                            );            
                }
            }
                
        }      
        
        return $this->render('CitytribeBundle:users:show.html.twig', array(
                "userdestinations"  =>$userdestinations,
                "users"             =>$allTribeUsers,
                'user'              =>$user
                ));
    }

    public function tribesAction($type){
        $user=$this->get_user();
        
        if ($type =="destination")
        {
            if (!$destinations=$this->get_user_destinations($user->getId())){
                return $this->redirect($this->generateUrl('GeoBundle_dest'));
            }
             $country_tribe = $destinations['country'];
             $state_tribe = $destinations['state'];
             $region_tribe = $destinations['region'];
             $city_tribe = $destinations['city'];
        
           
        }
        elseif ($type =="residence") {
            if(!$residences=$this->get_user_residences($user->getId())){
                return $this->redirect($this->generateUrl('GeoBundle_resi'));
            }
             $country_tribe = $residences['country'];
             $state_tribe= $residences['region'];
             $region_tribe= $residences['region'];
             $city_tribe=$residences['city'];
        }
        else { throw $this->createNotFoundException('Page unfound (type = '.$type.')');}

        return $this->render('CitytribeBundle:Blog:tribes.html.twig', array(
            'user'          =>$user,
            'country_tribe' =>$country_tribe,
            'state_tribe'   =>$state_tribe,
            'region_tribe'  =>$region_tribe,
            'city_tribe'    =>$city_tribe,
        ));
    }

}
