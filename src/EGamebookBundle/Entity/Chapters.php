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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $parentDependencies;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $childDependencies;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->parentDependencies = new \Doctrine\Common\Collections\ArrayCollection();
        $this->childDependencies = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add parentDependency
     *
     * @param \EGamebookBundle\Entity\Chapters $parentDependency
     *
     * @return Chapters
     */
    public function addParentDependency(\EGamebookBundle\Entity\Chapters $parentDependency)
    {
        $this->parentDependencies[] = $parentDependency;

        return $this;
    }

    /**
     * Remove parentDependency
     *
     * @param \EGamebookBundle\Entity\Chapters $parentDependency
     */
    public function removeParentDependency(\EGamebookBundle\Entity\Chapters $parentDependency)
    {
        $this->parentDependencies->removeElement($parentDependency);
    }

    /**
     * Get parentDependencies
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getParentDependencies()
    {
        return $this->parentDependencies;
    }

    /**
     * Add childDependency
     *
     * @param \EGamebookBundle\Entity\Chapters $childDependency
     *
     * @return Chapters
     */
    public function addChildDependency(\EGamebookBundle\Entity\Chapters $childDependency)
    {
        $this->childDependencies[] = $childDependency;

        return $this;
    }

    /**
     * Remove childDependency
     *
     * @param \EGamebookBundle\Entity\Chapters $childDependency
     */
    public function removeChildDependency(\EGamebookBundle\Entity\Chapters $childDependency)
    {
        $this->childDependencies->removeElement($childDependency);
    }

    /**
     * Get childDependencies
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getChildDependencies()
    {
        return $this->childDependencies;
    }
}
