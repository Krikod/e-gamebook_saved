<?php

namespace EGamebookBundle\Entity;

/**
 * Book
 */
class Book
{
    
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $author;

    /**
     * @var string
     */
    private $resume;

    /**
     * @var string
     */
    private $editor;

    /**
     * @var integer
     */
    private $year;

    /**
     * @var string
     */
    private $isbn;

    /**
     * @var \EGamebookBundle\Entity\Fichier
     */
    private $fichier;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $chapters;

    /**
     * @var \EGamebookBundle\Entity\User
     */
    private $user;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->chapters = new \Doctrine\Common\Collections\ArrayCollection();
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
     *
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
     * Set author
     *
     * @param string $author
     *
     * @return Book
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set resume
     *
     * @param string $resume
     *
     * @return Book
     */
    public function setResume($resume)
    {
        $this->resume = $resume;

        return $this;
    }

    /**
     * Get resume
     *
     * @return string
     */
    public function getResume()
    {
        return $this->resume;
    }

    /**
     * Set editor
     *
     * @param string $editor
     *
     * @return Book
     */
    public function setEditor($editor)
    {
        $this->editor = $editor;

        return $this;
    }

    /**
     * Get editor
     *
     * @return string
     */
    public function getEditor()
    {
        return $this->editor;
    }

    /**
     * Set year
     *
     * @param integer $year
     *
     * @return Book
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return integer
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set isbn
     *
     * @param string $isbn
     *
     * @return Book
     */
    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;

        return $this;
    }

    /**
     * Get isbn
     *
     * @return string
     */
    public function getIsbn()
    {
        return $this->isbn;
    }

    /**
     * Set fichier
     *
     * @param \EGamebookBundle\Entity\Fichier $fichier
     *
     * @return Book
     */
    public function setFichier(\EGamebookBundle\Entity\Fichier $fichier = null)
    {
        $this->fichier = $fichier;

        return $this;
    }

    /**
     * Get fichier
     *
     * @return \EGamebookBundle\Entity\Fichier
     */
    public function getFichier()
    {
        return $this->fichier;
    }

    /**
     * Add chapter
     *
     * @param \EGamebookBundle\Entity\Chapters $chapter
     *
     * @return Book
     */
    public function addChapter(\EGamebookBundle\Entity\Chapters $chapter)
    {
        $this->chapters[] = $chapter;

        return $this;
    }

    /**
     * Remove chapter
     *
     * @param \EGamebookBundle\Entity\Chapters $chapter
     */
    public function removeChapter(\EGamebookBundle\Entity\Chapters $chapter)
    {
        $this->chapters->removeElement($chapter);
    }

    /**
     * Get chapters
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getChapters()
    {
        return $this->chapters;
    }

    /**
     * Set user
     *
     * @param \EGamebookBundle\Entity\User $user
     *
     * @return Book
     */
    public function setUser(\EGamebookBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \EGamebookBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
}
