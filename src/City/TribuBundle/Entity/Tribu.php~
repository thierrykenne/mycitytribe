<?php

namespace City\TribuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * City\TribuBundle\Entity\Tribu
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="City\TribuBundle\Entity\TribuRepository")
 */
class Tribu
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
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string $nationality
     *
     * @ORM\Column(name="nationality", type="string", length=255)
     */
    private $nationality;

    /**
     * @var string $destination
     *
     * @ORM\Column(name="destination", type="string", length=255)
     */
    private $destination;

    /**
     * @var integer $tribu_id
     *
     * @ORM\Column(name="tribu_id", type="integer")
     */
    private $tribu_id;


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
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
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
     * Set destination
     *
     * @param string $destination
     */
    public function setDestination($destination)
    {
        $this->destination = $destination;
    }

    /**
     * Get destination
     *
     * @return string 
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * Set tribu_id
     *
     * @param integer $tribuId
     */
    public function setTribuId($tribuId)
    {
        $this->tribu_id = $tribuId;
    }

    /**
     * Get tribu_id
     *
     * @return integer 
     */
    public function getTribuId()
    {
        return $this->tribu_id;
    }
}