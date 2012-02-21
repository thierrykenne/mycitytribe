<?php

namespace City\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * City\BlogBundle\Entity\Article
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="City\BlogBundle\Entity\ArticleRepository")
 */
class Article
{

    /**
     * @ORM\ManyToMany(targetEntity="City\BlogBundle\Entity\Tag")
     */
    private $tags;

    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var datetime $date
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string $titre
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var text $contenu
     *
     * @ORM\Column(name="contenu", type="text")
     */
    private $contenu;

    /**
     * @var string $pseudo
     *
     * @ORM\Column(name="pseudo", type="string", length=255)
     */
    private $pseudo;



    // Comme la propriété groupes doit être un ArrayCollection, souvenez-vous ;
    // on doit la définir dans un constructeur.
    public function __construct()
    {
        $this->tags = new \Doctrine\Common\Collections\ArrayCollection();
        $this->date = new \Datetime();
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
     * Set date
     *
     * @param datetime $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * Get date
     *
     * @return datetime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set titre
     *
     * @param string $titre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set contenu
     *
     * @param text $contenu
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;
    }

    /**
     * Get contenu
     *
     * @return text 
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set pseudo
     *
     * @param string pseudo
     */
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;
    }

    /**
     * Get pseudo
     *
     * @return string 
     */
    public function getPseudo()
    {
        return $this->pseudo;
    }



    // On est dans le côté propriétaire, on définit le getter.
    // Notez le « s » à getGoupes, on récupère une liste de groupes, ici !
    public function getTags()
    {
        return $this->tags;
    }

    // Le setter. Attention, on n'a pas un setGroupes() mais un addGroup() !
    public function addTags(City\BlogBundle\Entity\Tag $tag)
    {
        // On traite vraiment notre ArrayCollection comme un tableau.
        $this->tags[] = $tag;
    }

}