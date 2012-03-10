<?php


namespace City\UserBundle\Model;

use DateTime;
use InvalidArgumentException;

/**
 *
 * @author Thierry kenne
 * @ORM\Entity
 *
 * @ORM\Table()
 */

abstract class UserTribe 
{

    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var datetime $create_at
     *
     * @ORM\Column(name="create_at", type="datetime")
     */
    private $create_at;



    public function __construct()
    {
        $this->create_at = new DateTime();
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
     * Set create_at
     *
     * @param datetime $createAt
     */
    public function setCreateAt($createAt)
    {
        $this->create_at = $createAt;
    }

    /**
     * Get create_at
     *
     * @return datetime 
     */
    public function getCreateAt()
    {
        return $this->create_at;
    }

}
