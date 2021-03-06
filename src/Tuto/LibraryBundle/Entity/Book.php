<?php

namespace Tuto\LibraryBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Book
 *
 * @ORM\Table(name="book")
 * @ORM\HasLifecycleCallbacks
 * @ORM\Entity(repositoryClass="Tuto\LibraryBundle\Repository\BookRepository")
 */
class Book
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /** @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /** @var int
     *
     * @ORM\Column(name="nb_copies", type="integer")
     */
    private $nbCopies;

    /**
     * @var string
     *
     * @ORM\Column(type="datetime")
     */
    protected $created;

    /**
     * @var string
     *
     * @ORM\Column(type="datetime", nullable = true)
     */
    protected $updated;

    /**
     * @ORM\ManyToMany(targetEntity="Author", inversedBy="books", cascade={"persist"})
     * @ORM\JoinTable(name="book_author")
     */
    protected $authors;

    /**
     * Constructeur
     */
    public function __construct()
    {
        $this->authors = new ArrayCollection();
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
     * Set title
     *
     * @param string $title
     * @return Book
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Ajoute un auteur
     * @param Author $author
     * @return $this
     */
    public function addAuthor(Author $author)
    {
        if(!$this->authors->contains($author)) {
            $this->authors[] = $author;
        }

        return $this;
    }

    /**
     * Supprime un auteur
     * @param Author $author
     */
    public function removeAuthor(Author $author)
    {
        if($this->authors->contains($author)) {
            // Utilisation de la méthode removeElement de l'objet ArrayCollection
            $this->authors->removeElement($author);
        }
    }

    /**
     * Retourne la liste des auteurs
     * @return ArrayCollection
     */
    public function getAuthors()
    {
        return $this->authors;
    }

    /**
     * Set nb_copies
     *
     * @param integer $nbCopies
     * @return Book
     */
    public function setNbCopies($nbCopies)
    {
        $this->nbCopies = $nbCopies;

        return $this;
    }

    /**
     * Get nb_copies
     *
     * @return integer 
     */
    public function getNbCopies()
    {
        return $this->nbCopies;
    }

    /**
     * Gets triggered only on insert
     * @ORM\PrePersist
     */
    public function onPrePersist()
    {
        $this->created = new \DateTime("now");
    }

    /**
     * Gets triggered every time on update
     * @ORM\PreUpdate
     */
    public function onPreUpdate()
    {
        $this->updated = new \DateTime("now");
    }
}
