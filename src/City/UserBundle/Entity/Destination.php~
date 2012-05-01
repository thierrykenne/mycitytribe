<?php

namespace City\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * City\UserBundle\Entity\Destination
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Destination
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
     * @var string $countryId
     *
     * @ORM\Column(name="countryId", type="string", length=255,nullable=TRUE)
     */
    private $countryId;

    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=255 ,nullable=TRUE)
     */
    private $name;

    /**
     * @var string $type
     *
     * @ORM\Column(name="type", type="string", length=255 ,nullable=TRUE)
     */
    private $type;

    /**
     * @var integer $parentId
     *
     * @ORM\Column(name="parentId", type="integer",nullable=TRUE)
     */
    private $parentId;


    public function __construct() {
        
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
     * Set countryId
     *
     * @param string $countryId
     */
    public function setCountryId($countryId)
    {
        $this->countryId = $countryId;
    }

    /**
     * Get countryId
     *
     * @return string 
     */
    public function getCountryId()
    {
        return $this->countryId;
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
     * Set type
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set parentId
     *
     * @param string $parentId
     */
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;
    }

    /**
     * Get parentId
     *
     * @return string 
     */
    public function getParentId()
    {
        return $this->parentId;
    }
}