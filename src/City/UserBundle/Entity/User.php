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
     * ResidenceTribe of the user
     *
     * @var ResidenceTribe
     * @ORM\ManyToOne(targetEntity="City\UserBundle\Entity\ResidenceTribe")
     */
    protected $residence_tribe;

    /**
     * DestinationTribe of the user
     *
     * @var DestinationTribe
     * @ORM\ManyToOne(targetEntity="City\UserBundle\Entity\DestinationTribe")
     */
    protected $destination_tribe;

    /**
     * @var string $nationality
     *
     * @ORM\Column(name="nationality", type="string", length=255)
     */
    protected $nationality;

    /**
     * @var string $destination_city
     *
     * @ORM\Column(name="destination_city", type="string", length=255,nullable=TRUE)
     */
   protected $destination_city;

    /**
     * @var string $destination_country
     *
     * @ORM\Column(name="destination_country", type="string", length=255 ,nullable=TRUE)
     */
   protected $destination_country;


    /**
     * @var string $destination_region
     *
     * @ORM\Column(name="destination_region", type="string", length=255 ,nullable=TRUE)
     */
   protected $destination_region;

    /**
     * @var string $residence_region
     *
     * @ORM\Column(name="residence_region", type="string", length=255,nullable=TRUE)
     */
   protected $residence_region;

    /**
     * @var string $residence_city
     *
     * @ORM\Column(name="residence_city", type="string", length=255,nullable=TRUE)
     */
   protected $residence_city;

    /**
     * @var string $residence_country
     *
     * @ORM\Column(name="residence_country", type="string", length=255,nullable=TRUE)
     */
   protected $residence_country;

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
     * @var string $residence_continent
     *
     * @ORM\Column(name="residence_continent", type="string", length=255,nullable=TRUE)
     */
    private $residence_continent;

    /**
     * @var string $destination_continent
     *
     * @ORM\Column(name="destination_continent", type="string", length=255,nullable=TRUE)
     */
    private $destination_continent;

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

    /**
     * Set residence_tribe
     *
     */
    public function setResidenceTribe( ResidenceTribe $residence_tribe)
    {
        $this->residence_tribe = $residence_tribe;
    }

    /**
     * Get residence_tribe
     *
     */
    public function getResidenceTribe()
    {
        return $this->residence_tribe;
    }


    /**
     * Set destination_tribe
     *
     */
    public function setDestinationTribe( DestinationTribe $destination_tribe )
    {
        $this->residence_tribe = $destination_tribe;
    }

    /**
     * Get destination_tribe
     *
     */
    public function getDestinationTribe()
    {
        return $this->destination_tribe;
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
     * Set residence_region
     *
     * @param string $residence_region
     */
    public function setResidenceRegion($residence_region)
    {
        $this->residence_region = $residence_region;
    }

    /**
     * Get residence_region
     *
     * @return string 
     */
    public function getResidenceRegion()
    {
        return $this->residence_region;
    }

    /**
     * Set residence_city
     *
     * @param string $residence_city
     */
    public function setResidenceCity($residence_city)
    {
        $this->residence_city = $residence_city;
    }

    /**
     * Get residence_city
     *
     * @return string 
     */
    public function getResidenceCity()
    {
        return $this->residence_city;
    }


    /**
     * Set residence_country
     *
     * @param string $residence_country
     */
    public function setResidenceCountry($residence_country)
    {
        $this->residence_country = $residence_country;
    }

    /**
     * Get residence_country
     *
     * @return string 
     */
    public function getResidenceCountry()
    {
        return $this->residence_country;
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
     * Set residence_continent
     *
     * @param string $residenceContinent
     */
    public function setResidenceContinent($residenceContinent)
    {
        $this->residence_continent = $residenceContinent;
    }

    /**
     * Get residence_continent
     *
     * @return string 
     */
    public function getResidenceContinent()
    {
        return $this->residence_continent;
    }

    /**
     * Set destination_continent
     *
     * @param string $destinationContinent
     */
    public function setDestinationContinent($destinationContinent)
    {
        $this->destination_continent = $destinationContinent;
    }

    /**
     * Get destination_continent
     *
     * @return string 
     */
    public function getDestinationContinent()
    {
        return $this->destination_continent;
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
