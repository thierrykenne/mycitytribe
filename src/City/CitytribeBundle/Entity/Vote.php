<?php
// src/MyProject/MyBundle/Entity/Comment.php

namespace City\CitytribeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\CommentBundle\Entity\Vote as BaseVote;
use FOS\CommentBundle\Model\SignedVoteInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use City\UserBundle\Entity\User;


/**
 * @ORM\Entity
 * @ORM\ChangeTrackingPolicy("DEFERRED_EXPLICIT")
 */
class Vote extends BaseVote implements SignedVoteInterface
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\generatedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne( targetEntity="City\UserBundle\Entity\User" )
     */

    protected $voter;

   
    /**
     * Gets the voter of this comment.
     *
     * @return User
     */

       public function getVoter()
       {
           return $this->voter;
       }

    /**
     * Sets the voter of this comment.
     *
     * @return void
     */

       public function setVoter(UserInterface $voter)
       {
           $this->voter = $voter;
       }

    /**
     * Returns the name of the voter.
     *
     * @return string
     */

       public function getVoterName()
       {
           return $this->getvoter() ? $this->getvoter()->getUsername() : 'Anonymous';
       }
    /**
     * Get id
     *
     * @return integer
     */

    public function getId()
    {
        return $this->id;
    }
}