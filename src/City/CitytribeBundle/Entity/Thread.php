<?php
// src/MyProject/MyBundle/Entity/Thread.php

namespace City\CitytribeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\CommentBundle\Entity\Thread as BaseThread;
use City\UserBundle\Entity\User;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity
 * @ORM\ChangeTrackingPolicy("DEFERRED_EXPLICIT")
 */
class Thread extends BaseThread
{
    /**
     * @var string $id
     *
     * @ORM\Id
     * @ORM\Column(type="string")
     */
    protected $id;

    /**
     * @ORM\OneToOne( targetEntity="City\UserBundle\Entity\User" )
     */

    protected $last_comment_author;

    /**
     * Set id
     *
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Get id
     *
     * @return string 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Gets the last_comment_author of this comment.
     *
     * @return User
     */

       public function getLastCommentAuthor()
       {
           return $this->last_comment_author;
       }

    /**
     * Sets the last_comment_author of this comment.
     *
     * @return void
     */

       public function setLastCommentAuthor(UserInterface $last_comment_author)
       {
           $this->last_comment_author = $last_comment_author;
       }
}