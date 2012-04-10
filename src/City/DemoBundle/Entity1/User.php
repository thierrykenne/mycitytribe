<?php

namespace City\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use City\DemoBundle\Entity\Destination as Destination;
/**
 * City\DemoBundle\Entity\user
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class User
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
     * @var Destination
     * @ORM\ManyToMany(targetEntity="Destination", inversedBy="users", cascade={"persist"})
     */
    private $destinations;


    public function __construct()
    {
        $this->destinations = new \Doctrine\Common\Collections\ArrayCollection;
    }

    public function getDestinations()
    {
        return $this->destinations;
    }

    // Le setter. Attention, on n'a pas un setDestinations() mais un addDestination() sans « s » !
    public function addDestination(Destination $destination)
    {
        // On traite vraiment notre ArrayCollection comme un tableau.
        $this->destinations[] = $destination;
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
}