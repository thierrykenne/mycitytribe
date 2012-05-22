<?php

namespace City\CitytribeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * City\CitytribeBundle\Entity\OnlineUser
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="City\CitytribeBundle\Entity\OnlineUserRepository")
 */
class OnlineUser
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
     * @var integer $userId
     *
     * @ORM\Column(name="userId", type="integer")
     */
    private $userId;

    /**
     * @var integer $user_tribe
     *
     * @ORM\Column(name="user_tribe", type="integer")
     */
    private $user_tribe;


    /**
     * @var integer $last_update
     *
     * @ORM\Column(name="last_update", type="integer")
     */
    private $last_update;


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
     * Set userId
     *
     * @param integer $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Get user_tribe
     *
     * @return integer 
     */
    public function getUserTribe()
    {
        return $this->user_tribe;
    }
    /**
     * Set user_tribe
     *
     * @param integer $user_tribe
     */
    public function setUserTribe($user_tribe)
    {
        $this->userId = $user_tribe;
    }

    /**
     * Set last_update
     *
     * @param integer $lastUpdate
     */
    public function setLastUpdate($lastUpdate)
    {
        $this->last_update = $lastUpdate;
    }

    /**
     * Get last_update
     *
     * @return integer 
     */
    public function getLastUpdate()
    {
        return $this->last_update;
    }
}