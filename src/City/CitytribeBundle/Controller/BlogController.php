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
    public function indexAction($page)
    {
        $user=$this->get_user();
        if(!$residences=$this->get_user_residences($user->getId())){
            return $this->redirect($this->generateUrl('GeoBundle_resi'));
        }
        if (!$destinations=$this->get_user_destinations($user->getId())){
            return $this->redirect($this->generateUrl('GeoBundle_dest'));
        }
        $em = $this->getDoctrine()->getEntityManager();
        
        $repository = $em->getRepository('CitytribeBundle:Message');

        $nb_messages = $repository->getAllCountry($user->getNationality(),$destinations['country']);
        $nb_messages_page = 2;


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
            'messages' => $messages,
            'page'     => $page,    // On transmet à la vue la page courante,
            'nb_pages' => $nb_pages,
            'user'=>$user // Et le nombre total de pages.
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
                               ->findBy(array('user'=>$id))) 
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
                return $destination;
                }
            }else { return false;}
    }

    public  function get_user_residences( $id)
    {
        $residence=array();
        $em = $this->getDoctrine()->getEntityManager();
        if ($userresidences = $em->getRepository('CityUserBundle:User_residence')
                               ->findBy(array('user'=>$id))) 
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
                return $residence;
                }
            }else { return False;}
    }

}