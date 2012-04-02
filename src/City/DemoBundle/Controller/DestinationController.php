<?php

namespace City\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use City\DemoBundle\Entity\Destination;
use City\DemoBundle\Form\DestinationType;

/**
 * Destination controller.
 *
 */
class DestinationController extends Controller
{
    /**
     * Lists all Destination entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('CityDemoBundle:Destination')->findAll();

        return $this->render('CityDemoBundle:Destination:index.html.twig', array(
            'entities' => $entities
        ));
    }

    /**
     * Finds and displays a Destination entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('CityDemoBundle:Destination')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Destination entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CityDemoBundle:Destination:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),

        ));
    }

    /**
     * Displays a form to create a new Destination entity.
     *
     */
    public function newAction()
    {
        $entity = new Destination();
        $form   = $this->createForm(new DestinationType(), $entity);

        return $this->render('CityDemoBundle:Destination:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Creates a new Destination entity.
     *
     */
    public function createAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $user = $em->getRepository('CityDemoBundle:User')->find(4);
        
        $entity  = new Destination(); 
        $entity->addUser($user);
        $request = $this->getRequest();
        $form    = $this->createForm(new DestinationType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('dest_show', array('id' => $entity->getId())));
            
        }

        return $this->render('CityDemoBundle:Destination:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Displays a form to edit an existing Destination entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('CityDemoBundle:Destination')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Destination entity.');
        }

        $editForm = $this->createForm(new DestinationType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CityDemoBundle:Destination:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Destination entity.
     *
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('CityDemoBundle:Destination')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Destination entity.');
        }

        $editForm   = $this->createForm(new DestinationType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('dest_edit', array('id' => $id)));
        }

        return $this->render('CityDemoBundle:Destination:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Destination entity.
     *
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('CityDemoBundle:Destination')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Destination entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('dest'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
