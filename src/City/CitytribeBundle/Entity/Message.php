<?php

namespace City\CitytribeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * City\CitytribeBundle\Entity\Message
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="City\CitytribeBundle\Entity\MessageRepository")
 */
class Message
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var datetime $date
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string $titre
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var text $contenu
     *
     * @ORM\Column(name="contenu", type="text")
     */
    private $contenu;

    /**
     * @ORM\ManyToOne( targetEntity="\City\UserBundle\Entity\User", inversedBy="messages")
     */
    private $author;

    /**
     * @ORM\OneToOne( targetEntity="City\CitytribeBundle\Entity\Thread",cascade={"remove", "persist"} )
     */
    private $thread;

    /**
     * @ORM\ManyToMany(targetEntity="City\CitytribeBundle\Entity\Tag")
     */
    private $tags;


    public function __construct()
    {
        $this->tags = new \Doctrine\Common\Collections\ArrayCollection();
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

    /**
     * Set date
     *
     * @param datetime $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * Get date
     *
     * @return datetime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set titre
     *
     * @param string $titre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set contenu
     *
     * @param text $contenu
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;
    }

    /**
     * Get contenu
     *
     * @return text
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set author
     *
     * @param string $author
     */
    public function setAuthor(\City\UserBundle\Entity\User $author)
    {
        $this->author = $author;
    }

    /**
     * Get author
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    public function getThread()
    {
        return $this->thread;
    }

    public function setThread(\City\UserBundle\Entity\Thread $thread)
    {
        $this->thread = $thread;
    }

    /**
     * Add tags
     *
     * @param City\CitytribeBundle\Entity\Tag $tags
     */
    public function addTag(\City\CitytribeBundle\Entity\Tag $tags)
    {
        $this->tags[] = $tags;
    }

    /**
     * Get tags
     *
     * @return Doctrine\Common\Collections\Collection
     */
    public function getTags()
    {
        return $this->tags;
    }
}