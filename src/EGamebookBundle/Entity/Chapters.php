<?php

namespace EGamebookBundle\Entity;

/**
 * Chapters
 */
class Chapters
{

    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $number;

    /**
     * @var string
     */
    private $content;

    /**
     * @var string
     */
    private $media;

    /**
     * @var string
     */
    private $decision;

    /**
     * @var string
     */
    private $buttonText;

    /**
     * @var \EGamebookBundle\Entity\Book
     */
    private $book;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $parents;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $childs;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->parents = new \Doctrine\Common\Collections\ArrayCollection();
        $this->childs = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set number
     *
     * @param integer $number
     *
     * @return Chapters
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return integer
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Chapters
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set media
     *
     * @param string $media
     *
     * @return Chapters
     */
    public function setMedia($media)
    {
        $this->media = $media;

        return $this;
    }

    /**
     * Get media
     *
     * @return string
     */
    public function getMedia()
    {
        return $this->media;
    }

    /**
     * Set decision
     *
     * @param string $decision
     *
     * @return Chapters
     */
    public function setDecision($decision)
    {
        $this->decision = $decision;

        return $this;
    }

    /**
     * Get decision
     *
     * @return string
     */
    public function getDecision()
    {
        return $this->decision;
    }

    /**
     * Set buttonText
     *
     * @param string $buttonText
     *
     * @return Chapters
     */
    public function setButtonText($buttonText)
    {
        $this->buttonText = $buttonText;

        return $this;
    }

    /**
     * Get buttonText
     *
     * @return string
     */
    public function getButtonText()
    {
        return $this->buttonText;
    }

    /**
     * Set book
     *
     * @param \EGamebookBundle\Entity\Book $book
     *
     * @return Chapters
     */
    public function setBook(\EGamebookBundle\Entity\Book $book = null)
    {
        $this->book = $book;

        return $this;
    }

    /**
     * Get book
     *
     * @return \EGamebookBundle\Entity\Book
     */
    public function getBook()
    {
        return $this->book;
    }

    /**
     * Add parent
     *
     * @param \EGamebookBundle\Entity\Chapters $parent
     *
     * @return Chapters
     */
    public function addParent(\EGamebookBundle\Entity\Chapters $parent)
    {
        $this->parents[] = $parent;

        return $this;
    }

    /**
     * Remove parent
     *
     * @param \EGamebookBundle\Entity\Chapters $parent
     */
    public function removeParent(\EGamebookBundle\Entity\Chapters $parent)
    {
        $this->parents->removeElement($parent);
    }

    /**
     * Get parents
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getParents()
    {
        return $this->parents;
    }

    /**
     * Add child
     *
     * @param \EGamebookBundle\Entity\Chapters $child
     *
     * @return Chapters
     */
    public function addChild(\EGamebookBundle\Entity\Chapters $child)
    {
        $this->childs[] = $child;

        return $this;
    }

    /**
     * Remove child
     *
     * @param \EGamebookBundle\Entity\Chapters $child
     */
    public function removeChild(\EGamebookBundle\Entity\Chapters $child)
    {
        $this->childs->removeElement($child);
    }

    /**
     * Get childs
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getChilds()
    {
        return $this->childs;
    }
    /**
     * @var \EGamebookBundle\Entity\Fichier
     */
    private $fichier;


    /**
     * Set fichier
     *
     * @param \EGamebookBundle\Entity\Fichier $fichier
     *
     * @return Chapters
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
     * Set childs
     *
     * @param \EGamebookBundle\Entity\Chapters $childs
     *
     * @return Chapters
     */
    public function setChilds(\EGamebookBundle\Entity\Chapters $childs = null)
    {
        $this->childs = $childs;

        return $this;
    }
}
