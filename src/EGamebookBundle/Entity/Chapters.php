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
    private $toChapters;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $fromChapters;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->toChapters = new \Doctrine\Common\Collections\ArrayCollection();
        $this->fromChapters = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add toChapter
     *
     * @param \EGamebookBundle\Entity\Chapters $toChapter
     *
     * @return Chapters
     */
    public function addToChapter(\EGamebookBundle\Entity\Chapters $toChapter)
    {
        $this->toChapters[] = $toChapter;

        return $this;
    }

    /**
     * Remove toChapter
     *
     * @param \EGamebookBundle\Entity\Chapters $toChapter
     */
    public function removeToChapter(\EGamebookBundle\Entity\Chapters $toChapter)
    {
        $this->toChapters->removeElement($toChapter);
    }

    /**
     * Get toChapters
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getToChapters()
    {
        return $this->toChapters;
    }

    /**
     * Add fromChapter
     *
     * @param \EGamebookBundle\Entity\Chapters $fromChapter
     *
     * @return Chapters
     */
    public function addFromChapter(\EGamebookBundle\Entity\Chapters $fromChapter)
    {
        $this->fromChapters[] = $fromChapter;

        return $this;
    }

    /**
     * Remove fromChapter
     *
     * @param \EGamebookBundle\Entity\Chapters $fromChapter
     */
    public function removeFromChapter(\EGamebookBundle\Entity\Chapters $fromChapter)
    {
        $this->fromChapters->removeElement($fromChapter);
    }

    /**
     * Get fromChapters
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFromChapters()
    {
        return $this->fromChapters;
    }
}
