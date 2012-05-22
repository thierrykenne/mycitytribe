<?php

namespace City\GeoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * City\GeoBundle\Entity\RegionPolygon
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="City\GeoBundle\Entity\RegionPolygonRepository")
 */
class RegionPolygon
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
     * @var string $country
     *
     * @ORM\Column(name="country", type="string", length=255)
     */
    private $country;

    /**
     * @var string $region
     *
     * @ORM\Column(name="region", type="string", length=255)
     */
    private $region;

    /**
     * @var text $polygon
     *
     * @ORM\Column(name="polygon", type="text")
     */
    private $polygon;


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
     * Set country
     *
     * @param string $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set region
     *
     * @param string $region
     */
    public function setRegion($region)
    {
        $this->region = $region;
    }

    /**
     * Get region
     *
     * @return string 
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set polygon
     *
     * @param text $polygon
     */
    public function setPolygon($polygon)
    {
        $this->polygon = $polygon;
    }

    /**
     * Get polygon
     *
     * @return text 
     */
    public function getPolygon()
    {
        return $this->polygon;
    }
}