<?php
// src/City/UserBundle/Entity/User.php

namespace City\UserBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use City\UserBundle\Entity\ResidenceTribe as ResidenceTribe;
use City\UserBundle\Entity\DestinationTribe as DestinationTribe;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use City\UserBundle\Entity\Destination as Destination;

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
     * @ORM\OneToMany(targetEntity="City\CitytribeBundle\Entity\Message", mappedBy="author")
     */
    private $messages;

    /**
     * @var string $nationality
     *
     * @ORM\Column(type="string",nullable=TRUE)
     */
    protected $nationality;

    /**
     * @var text $about_me
     *
     * @ORM\Column(name="about_me", type="text",nullable=TRUE)
     */
    private $about_me;

    /**
     * @var string $sex
     *
     * @ORM\Column(name="sex", type="string",nullable=TRUE)
     */
    private $sex;

    /**
     * @var boolean $premium
     *
     * @ORM\Column(name="premium", type="boolean",nullable=TRUE)
     */
    private $premium;

    /**
     * @var integer $num_question
     *
     * @ORM\Column(name="num_question", type="integer",nullable=TRUE)
     */
    private $num_question;

    /**
     * @var integer $num_answer
     *
     * @ORM\Column(name="num_answer", type="integer",nullable=TRUE)
     */
    private $num_answer;

    /**
     * @var string $visit_goal
     *
     * @ORM\Column(name="visit_goal", type="string", length=255,nullable=TRUE)
     */
    private $visit_goal;

    /**
     * @var string $occupation
     *
     * @ORM\Column(name="occupation", type="string", length=255,nullable=TRUE)
     */
    private $occupation;

    /**
     * @var string $language
     *
     * @ORM\Column(name="language", type="string", length=255,nullable=TRUE)
     */
    private $language;

    /**
     * @var string $image
     *
     * @ORM\Column(name="image", type="string", length=255,nullable=TRUE)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="facebookId", type="string", length=255,nullable=TRUE)
     */
    protected $facebookId;



    public function __construct()
    {
        parent::__construct();
        $this->messages = new \Doctrine\Common\Collections\ArrayCollection;
    }

    //facebook bundle   
    public function serialize()
    {
        return serialize(array($this->facebookId, parent::serialize()));
    }

    public function unserialize($data)
    {
        list($this->facebookId, $parentData) = unserialize($data);
        parent::unserialize($parentData);
    }

    public function getMessages()
    {
        return $this->messages;
    }

    public function addMessages(\City\CitytribeBundle\Entity\Message $message)
    {
        $this->messages[] = $message;
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
     * Set birth_year
     *
     * @param smallint $birthYear
     */
    public function setBirthYear($birthYear)
    {
        $this->birth_year = $birthYear;
    }

    /**
     * Get birth_year
     *
     * @return smallint 
     */
    public function getBirthYear()
    {
        return $this->birth_year;
    }

    /**
     * Set about_me
     *
     * @param text $aboutMe
     */
    public function setAboutMe($aboutMe)
    {
        $this->about_me = $aboutMe;
    }

    /**
     * Get about_me
     *
     * @return text 
     */
    public function getAboutMe()
    {
        return $this->about_me;
    }

    /**
     * Set sex
     *
     * @param string $sex
     */
    public function setSex($sex)
    {
        $this->sex = $sex;
    }

    /**
     * Get sex
     *
     * @return string 
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * Set premium
     *
     * @param boolean $premium
     */
    public function setPremium($premium)
    {
        $this->premium = $premium;
    }

    /**
     * Get premium
     *
     * @return boolean 
     */
    public function getPremium()
    {
        return $this->premium;
    }

    /**
     * Set num_question
     *
     * @param integer $numQuestion
     */
    public function setNumQuestion($numQuestion)
    {
        $this->num_question = $numQuestion;
    }

    /**
     * Get num_question
     *
     * @return integer 
     */
    public function getNumQuestion()
    {
        return $this->num_question;
    }

    /**
     * Set num_answer
     *
     * @param integer $numAnswer
     */
    public function setNumAnswer($numAnswer)
    {
        $this->num_answer = $numAnswer;
    }

    /**
     * Get num_answer
     *
     * @return integer 
     */
    public function getNumAnswer()
    {
        return $this->num_answer;
    }

    /**
     * Set visit_goal
     *
     * @param string $visit_goal
     */
    public function setVisitGoal($visit_goal)
    {
        $this->visit_goal = $visit_goal;
    }

    /**
     * Get visit_goal
     *
     * @return string 
     */
    public function getVisitGoal()
    {
        return $this->visit_goal;
    }


    /**
     * Set occupation
     *
     * @param string $occupation
     */
    public function setOccupation($occupation)
    {
        $this->occupation = $occupation;
    }

    /**
     * Get occupation
     *
     * @return string 
     */
    public function getOccupation()
    {
        return $this->occupation;
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
     * Set language
     *
     * @param string $language
     */
    public function setLanguage($language)
    {
        $this->language = $language;
    }

    /**
     * Get language
     *
     * @return string 
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set image
     *
     * @param string $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }


    /**
     * @param string $facebookId
     * @return void
     */
    public function setFacebookId($facebookId)
    {
        $this->facebookId = $facebookId;
        $this->setUsername($facebookId);
        $this->salt = '';
    }

    /**
     * @return string
     */
    public function getFacebookId()
    {
        return $this->facebookId;
    }

    /**
     * @param Array
     */
    public function setFBData($fbdata)
    {
        if (isset($fbdata['id'])) {
            $this->setFacebookId($fbdata['id']);
            $this->addRole('ROLE_FACEBOOK');
        }
/*        if (isset($fbdata['first_name'])) {
            $this->setFirstname($fbdata['first_name']);
        }
*/
        if (isset($fbdata['username'])) {
            $this->setUsername($fbdata['username']);
        }

        if (isset($fbdata['email'])) {
            $this->setEmail($fbdata['email']);
        }
        if (isset($fbdata['locale'])) {
            $pieces = explode("_", $fbdata['locale']);
            $this->setNationality($pieces[1]);
        }
        else{
            $this->setNationality('IT');
        }
        if (isset($fbdata['user_about_me'])) {
            $this->setAboutMe($fbdata['user_about_me']);
        }
        if (isset($fbdata['gender'])) {
            $this->setSex($fbdata['gender']);
        }
        
    }

}
