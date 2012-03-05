<?php

namespace City\CitytribeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use FOS\UserBundle\Model\UserInterface;
use Symfony\Component\Form\Form;

use City\Userbundle\Entity\User;
use City\CitytribeBundle\Entity\Avatar;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use City\CitytribeBundle\Form\PersonInfoType;
use City\CitytribeBundle\Form\PersonInfoHandler;

class ProfileController extends Controller
{
    

    public function showAction($type)
    {   
        $user=$this->get_user();
	return $this->render('CitytribeBundle:Default:profile.html.twig',array(
				'type'=>$type,
				'user'=>$user
			   ));
    }

    public function avatarAction()
    {
	$user=$this->get_user();
	$avatar=new Avatar;
	$form =$this->createFormBuilder( $avatar)
	       ->add("name")
	       ->getForm();
	$request = $this->get('request');

	    if ($request->getMethod() == 'POST') {
	      	$form->bindRequest($request); 

	    	if ($form->isValid()) {
		   //Upload of file
	    	    $files=$request->files->get($form->getName());
	    	    $uploadedFile=$files["name"];
				$extention= $uploadedFile->guessExtension();
				$filename='avatar_'.$user->getId().'.'.$extention;
	    	    $uploadedFile->move(
	    	         __DIR__.'/../../../../web/uploads/avatars/',$filename    	        
	    	    );
		//add image name in user table
                    $user->setImage($filename);	
		    $em=$this->getDoctrine()->getEntityManager();	
        	    $em->persist($user);
        	    $em->flush();
	    	    $this->get('session')->setFlash('notice', 'Image updated!');
	    	}
	}
	return $this->render('CitytribeBundle:Default:avatar.html.twig',array(
				'user'=>$user,
				'form'=> $form->createView()
			   ));
   }	
 
    public function editAction()
    {
        $user=$this->get_user(); 
        $form    = $this->createForm(new PersonInfoType, $user); 
        $formHandler = new PersonInfoHandler($form, $this->get('request'), $this->getDoctrine()->getEntityManager());
        if( $formHandler->process() )
        {
            return $this->redirect( $this->generateUrl('CitytribeBundle_profile',array('type'=>'informations') ));
        }

        return $this->render('CitytribeBundle:Default:edit.html.twig', array(
            'form' => $form->createView(),
            'user'=>$user,
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
}


