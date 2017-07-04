<?php

namespace EGamebookBundle\Entity;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Fichier
 */
class Fichier
{
    /**
     * @var UploadedFile $file
     */
    private $file;

    /**
     * Attribut permettant de stocker le nom de mon fichier en preRemove
     * @var string $tempName
     */
    private $tempName;

    /**
     * @param UploadedFile $file
     */
    public function setFile(UploadedFile $file)
    {
        $this->file = $file;

        if ($this->src != null){
            // On stock le nom de l'image à supprimer
            $this->tempName = $this->src;

            // On réinitialise les champs de notre objet
            $this->src = null;
            $this->alt= null;
        }
    }

    /**
     * @return UploadedFile
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @ORM\PrePersist
     * @ORM\PreUpdate
     */
    public function preUpload()
    {

        if (null === $this->file) {
            return;
        }

        $this->src = uniqid() . '.' . $this->file->guessExtension();

        $alt= $this->file->getClientOriginalName();
        $ext = $this->file->guessExtension();

        $this->alt=str_replace('.'. $ext, '', $alt);

    }

    /**
     * @ORM\PostPersist
     * @ORM\PostUpdate
     */
    public function upload()
    {
        if (null === $this->file) {
            return;
        }

        if ($this->tempName != null){
            $oldfile= $this->getUploadDir() . $this->tempName;

            if (file_exists($oldfile)){
                unlink($oldfile);
            }
        }

        $this->file->move($this->getUploadDir(), $this->src);


    }

    /**
     * @ORM\PreRemove
     */
    public function preRemove()
    {
        // Add your code here
    }

    /**
     * @ORM\PostRemove
     */
    public function remove()
    {
        $fileToRemove = $this->getUploadDir() . $this->src;
        if (file_exists($fileToRemove))
        {
            unlink($fileToRemove);
        }
    }

    public function getUploadDir(){

        return __DIR__ . '/../../../web/bundles/platform/img/';
    }

// GENERATED CODE

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $src;

    /**
     * @var string
     */
    private $alt;


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
     * Set src
     *
     * @param string $src
     *
     * @return Fichier
     */
    public function setSrc($src)
    {
        $this->src = $src;

        return $this;
    }

    /**
     * Get src
     *
     * @return string
     */
    public function getSrc()
    {
        return $this->src;
    }

    /**
     * Set alt
     *
     * @param string $alt
     *
     * @return Fichier
     */
    public function setAlt($alt)
    {
        $this->alt = $alt;

        return $this;
    }

    /**
     * Get alt
     *
     * @return string
     */
    public function getAlt()
    {
        return $this->alt;
    }
}
