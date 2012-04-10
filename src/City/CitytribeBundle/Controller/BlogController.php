<?php

namespace City\CitytribeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

use City\CitytribeBundle\Entity\Message;
use City\CitytribeBundle\Form\MessageType;

class BlogController extends Controller
{
    public function indexAction($page)
    {
 
        $repository = $this->getDoctrine()
                           ->getEntityManager()
                           ->getRepository('CitytribeBundle:Message');

        $nb_messages = $repository->getTotal();

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
            array(),                 // Pas de critère
            array('date' => 'desc'), // On tri par date décroissante
            $nb_messages_page,       // On sélectionne $nb_messages_page messages
            $offset                  // A partir du $offset ième
        );

        return $this->render('CitytribeBundle:Blog:index.html.twig', array(
            'messages' => $messages,
            'page'     => $page,    // On transmet à la vue la page courante,
            'nb_pages' => $nb_pages // Et le nombre total de pages.
        ));
    }

    /**
     * Finds and displays a Message entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('CitytribeBundle:Message')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Message entity.');
        }

        return $this->render('CitytribeBundle:Blog:show.html.twig', array(
            'entity'      => $entity,
        ));
    }

    /**
     * Displays a form to create a new Message entity.
     *
     */
    public function newAction()
    {
        $entity = new Message();
        $form   = $this->createForm(new MessageType(), $entity);

        return $this->render('CitytribeBundle:Blog:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Creates a new Message entity.
     *
     */
    public function createAction()
    {
        $entity  = new Message();
        $request = $this->getRequest();
        $form    = $this->createForm(new MessageType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('message_show', array('id' => $entity->getId())));
            
        }

        return $this->render('CitytribeBundle:Blog:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }
    /**
     * Displays a form to edit an existing Message entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('CitytribeBundle:Message')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Message entity.');
        }

        $editForm = $this->createForm(new MessageType(), $entity);

        return $this->render('CitytribeBundle:Blog:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
        ));
    }

    /**
     * Edits an existing Message entity.
     *
     */
    public function updateAction($id)
    {
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
        ));
    }




}