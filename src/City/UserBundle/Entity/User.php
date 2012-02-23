<?php
// src/City/UserBundle/Entity/User.php

namespace City\UserBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="city_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string $nationality
     *
     * @ORM\Column(name="nationality", type="string", length=255)
     */
    protected $nationality;

    /**
     * @var string $destination_city
     *
     * @ORM\Column(name="destination_city", type="string", length=255)
     */
   protected $destination_city;

    /**
     * @var string $destination_country
     *
     * @ORM\Column(name="destination_country", type="string", length=255)
     */
   protected $destination_country;


    /**
     * @var string $destination_region
     *
     * @ORM\Column(name="destination_region", type="string", length=255)
     */
   protected $destination_region;

    /**
     * @var string $origin_region
     *
     * @ORM\Column(name="origin_region", type="string", length=255)
     */
   protected $origin_region;



    public function __construct()
    {
        parent::__construct();
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
     * Set destination_city
     *
     * @param string $destination_city
     */
    public function setDestinationCity($destination_city)
    {
        $this->destination_city = $destination_city;
    }

    /**
     * Get destination_city
     *
     * @return string 
     */
    public function getDestinationCity()
    {
        return $this->destination_city;
    }

    /**
     * Set destination_country
     *
     * @param string $destination_country
     */
    public function setDestinationCountry($destination_country)
    {
        $this->destination_country = $destination_country;
    }

    /**
     * Get destination_country
     *
     * @return string 
     */
    public function getDestinationCountry()
    {
        return $this->destination_country;
    }

    /**
     * Set destination_region
     *
     * @param string $destination_region
     */
    public function setDestinationRegion($destination_region)
    {
        $this->destination_region = $destination_region;
    }

    /**
     * Get destination_region
     *
     * @return string 
     */
    public function getDestinationRegion()
    {
        return $this->destination_region;
    }

    /**
     * Set origin_region
     *
     * @param string $origin_region
     */
    public function setOriginRegion($origin_region)
    {
        $this->origin_region = $origin_region;
    }

    /**
     * Get origin_region
     *
     * @return string 
     */
    public function getOriginRegion()
    {
        return $this->origin_region;
    }
}
