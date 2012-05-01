<?php

namespace City\CitytribeBundle\Entity;

use DateTime;
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

    /**
     * @var string $nationality
     *
     * @ORM\Column(name="nationality", type="string", length=255)
     */
    private $nationality;

    /**
     * @var string $country_tribe
     *
     * @ORM\Column(name="country_tribe", type="string", length=255)
     */
    private $country_tribe;

    /**
     * @var string $state_tribe
     *
     * @ORM\Column(name="state_tribe", type="string", length=255)
     */
    private $state_tribe;

    /**
     * @var string $region_tribe
     *
     * @ORM\Column(name="region_tribe", type="string", length=255)
     */
    private $region_tribe;

    /**
     * @var string $city_tribe
     *
     * @ORM\Column(name="city_tribe", type="string", length=255)
     */
    private $city_tribe;


    public function __construct()
    {
        $this->tags = new \Doctrine\Common\Collections\ArrayCollection();
        $this->date=new DateTime();
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
        $author->addMessages($this);
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

    public function setThread(\City\CitytribeBundle\Entity\Thread $thread)
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


    /**
     * Set nationality
     *
     * @param string $nationality
     */
    public function setNationality($nationality)
    {
        $this->nationality = $nationality;
    }

    /**
     * Get nationality
     *
     * @return string 
     */
    public function getNationality()
    {
        return $this->nationality;
    }

    /**
     * Set country_tribe
     *
     * @param string $countryTribe
     */
    public function setCountryTribe($countryTribe)
    {
        $this->country_tribe = $countryTribe;
    }

    /**
     * Get country_tribe
     *
     * @return string 
     */
    public function getCountryTribe()
    {
        return $this->country_tribe;
    }

    /**
     * Set state_tribe
     *
     * @param string $stateTribe
     */
    public function setStateTribe($stateTribe)
    {
        $this->state_tribe = $stateTribe;
    }

    /**
     * Get state_tribe
     *
     * @return string 
     */
    public function getStateTribe()
    {
        return $this->state_tribe;
    }

    /**
     * Set region_tribe
     *
     * @param string $regionTribe
     */
    public function setRegionTribe($regionTribe)
    {
        $this->region_tribe = $regionTribe;
    }

    /**
     * Get region_tribe
     *
     * @return string 
     */
    public function getRegionTribe()
    {
        return $this->region_tribe;
    }

    /**
     * Set city_tribe
     *
     * @param string $cityTribe
     */
    public function setCityTribe($cityTribe)
    {
        $this->city_tribe = $cityTribe;
    }

    /**
     * Get city_tribe
     *
     * @return string 
     */
    public function getCityTribe()
    {
        return $this->city_tribe;
    }

}