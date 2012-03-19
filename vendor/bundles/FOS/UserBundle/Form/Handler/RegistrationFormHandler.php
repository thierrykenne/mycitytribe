<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FOS\UserBundle\Form\Handler;

use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;
use FOS\UserBundle\Model\UserManagerInterface;
use FOS\UserBundle\Model\UserInterface;
use FOS\UserBundle\Mailer\MailerInterface;
use City\UserBundle\Entity\ResidenceTribe as ResidenceTribe;
use City\UserBundle\Entity\DestinationTribe as DestinationTribe;
use Doctrine\ORM\EntityManager;

class RegistrationFormHandler
{
    protected $request;
    protected $userManager;
    protected $form;
    protected $mailer;
    protected $em;

    public function __construct(Form $form, Request $request, UserManagerInterface $userManager, MailerInterface $mailer,EntityManager $em)
    {
        $this->form = $form;
        $this->request = $request;
        $this->userManager = $userManager;
        $this->mailer = $mailer;
        $this->em = $em;
    }

    public function process($confirmation = true)
    {
        $user = $this->userManager->createUser();
        $this->form->setData($user);

        if ('POST' == $this->request->getMethod()) {
            $this->form->bindRequest($this->request);

            if ($this->form->isValid()) {
                // j'ai mis ca
                $confirmation=false;
                $this->onSuccess($user, $confirmation);

                return true;
            }
        }

        return false;
    }

    protected function onSuccess(UserInterface $user, $confirmation)
    {
        // to avoid persit error at user registration
        $tribe1 =$this->em->getRepository('CityUserBundle:DestinationTribe')->find(1);  
        $tribe2= $this->em->getRepository('CityUserBundle:ResidenceTribe')->find(1);
        $user->setDestinationTribe($tribe1);
        $user->setResidenceTribe($tribe2);

        $user->setDestinationCity('');
        $user->setDestinationCountry('');
        $user->setDestinationRegion('');
        $user->setDestinationContinent('');

        $user->setResidenceCity('');
        $user->setResidenceCountry('');
        $user->setResidenceRegion('');
        $user->setResidenceContinent('');
        $user->setAboutMe('');
        $user->setSex('n');
        $user->setPremium(1);
        $user->setNumQuestion(0);
        $user->setNumAnswer(0);
        $user->setOccupation('');
        $user->setVisitGoal('');
        $user->setImage('');
        $user->setLanguage('');
        //end
        if ($confirmation) {
            $user->setEnabled(false);
            $this->mailer->sendConfirmationEmailMessage($user);
        } else {
            $user->setConfirmationToken(null);
            $user->setEnabled(true);
        }

        $this->userManager->updateUser($user);
    }
}
