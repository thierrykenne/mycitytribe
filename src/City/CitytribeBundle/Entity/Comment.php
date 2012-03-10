<?php
// src/MyProject/MyBundle/Entity/Comment.php

namespace City\CitytribeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\CommentBundle\Entity\Comment as BaseComment;
use FOS\CommentBundle\Model\SignedCommentInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use City\UserBundle\Entity\User;


/**
 * @ORM\Entity
 * @ORM\ChangeTrackingPolicy("DEFERRED_EXPLICIT")
 */
class Comment extends BaseComment implements SignedCommentInterface
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\generatedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * Thread of this comment
     *
     * @var Thread
     * @ORM\ManyToOne(targetEntity="City\CitytribeBundle\Entity\Thread")
     */
    protected $thread;

    /**
     * @ORM\ManyToOne( targetEntity="City\UserBundle\Entity\User" )
     */

    protected $author;

   
    /**
     * Gets the author of this comment.
     *
     * @return User
     */

       public function getAuthor()
       {
           return $this->author;
       }

    /**
     * Sets the author of this comment.
     *
     * @return void
     */

       public function setAuthor(UserInterface $author)
       {
           $this->author = $author;
       }

    /**
     * Returns the name of the author.
     *
     * @return string
     */

       public function getAuthorName()
       {
           return $this->getAuthor() ? $this->getAuthor()->getUsername() : 'Anonymous';
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