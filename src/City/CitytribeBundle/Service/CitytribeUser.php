<?php

namespace City\CitytribeBundle\Service;

use Symfony\Component\Security\Core\SecurityContextInterface;
use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Doctrine\ORM\EntityManager;
/**
 * Recuperer un User.
 *
 * @author Thierry Kenne
 */
class CitytribeUser 
{
    protected $securityContext;

    public function __construct()
    {
               
    }
    public function getUser(SecurityContextInterface $securityContext )
    { 
        $this->securityContext = $securityContext;
        $user=$this->securityContext->getToken()->getUser();         
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }
        return $user;
    }
}

