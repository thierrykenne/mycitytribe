<?php

namespace City\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use City\UserBundle\Entity\User as User;
use City\UserBundle\Entity\Residence as Residence;

/**
 * City\UserBundle\Entity\User_residence
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class User_residence
{
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="User")
     */
    private $user;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Residence")
     */
    private $residence;

    /**
     * @var boolean $activated
     *
     * @ORM\Column(name="activated", type="boolean")
     */
    private $activated =true;


    public function getUser()
    {
        return $this->user;
    }
    public function setUser(User $user)
    {
        $this->user = $user;
    }

    public function getResidence()
    {
        return $this->residence;
    }
    public function setResidence(Residence $residence)
    {
        $this->residence = $residence;
    }

    /**
     * Set activated
     *
     * @param boolean $activated
     */
    public function setActivated($activated)
    {
        $this->activated = $activated;
    }

    /**
     * Get activated
     *
     * @return boolean 
     */
    public function getActivated()
    {
        return $this->activated;
    }
}