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
use City\Citytribebundle\Entity\OnlineUser;

class OnlineUserController extends Controller
{
    
    public function onlineusersAction()
    {
        $user=$this->get_user();
        $userTribeId=$user->getResidenceTribe();
        $em = $this->getDoctrine()->getEntityManager();
        $repository =$em->getRepository('CitytribeBundle:OnlineUser')
        if ($userOnline = $repository->findOneBy(array('userId' => $user->getId())))
        {
            $this->storeUser($user->getId(),$user->getResidenceTribe());

        }
        else
        {
            $this->storeUser($user->getId(),$user->getResidenceTribe());
        }
            return new Response((string)$polygon->getPolygon()); 
    else    return new Response(0);
        return $this->render('CitytribeBundle:Default:index.html.twig', array('comment' => $commentId)
            );
    }

    public function editAction()
    {

    }

    public function get_user()
    {
        $user = $this->container->get('security.context')->getToken()->getUser();
        
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }
        return $user;
    }
    protected function storeUser($userId,$tribeId)
    {
        $userOnline=New OnlineUser;
        $em = $this->getDoctrine()->getEntityManager();

        $userOnline->setUserId($userId);
        $userOnline->setUserTribe($tribeId);
        $userOnline->setLastUpdate(time());

        $em->persist($userOnline);
        $em->flush();

    }
}


