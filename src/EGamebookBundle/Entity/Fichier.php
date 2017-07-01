<?php

namespace EGamebookBundle\Entity;

use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Fichier
 */
class Fichier
{
    /**
     * @var array $file
     */
    private $files = array();



    /**
     * Attribut permettant de stocker le nom de mon fichier en preRemove
     * @var string $tempName
     */
    private $tempNames = array();

    /**
     * @param UploadedFile $file
     */
    public function setFiles($files)
    {
        $this->files = $files;

//        foreach ($this->files as $fichier){
//
//            if ($fichier->src != null){
//                // On stock le nom de l'image à supprimer
//                $fichier->tempName[] = $fichier->src;
//
//                // On réinitialise les champs de notre objet
//                $fichier->src = null;
//                $fichier->alt = null;
//            }
//        }

    }

    /**
     * @return array
     */
    public function getFiles()
    {
        return $this->files;
    }

    /**
     * @ORM\PrePersist
     * @ORM\PreUpdate
     */
    public function preUpload()
    {
        if (empty($this->files)) {
            return;
        }

        foreach ($this->files as $file){

            $fichier = new Fichier();
            $fichier->src = uniqid() . '.' . $file->guessExtension();

            $alt = $file->getClientOriginalName();
            $ext = $file->guessExtension();

            $fichier->alt = str_replace('.'. $ext, '', $alt);


            $fichier->setBook($this);
            $this->getBook()->addFichier($fichier);

        }

    }

    /**
     * @ORM\PostPersist
     * @ORM\PostUpdate
     */
    public function upload()
    {
        $i = 0;

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
        $i = 0;

        $fileToRemove = $this->getUploadDir() . $this->src;
        if (file_exists($fileToRemove))
        {
            unlink($fileToRemove);
        }
    }

    public function getUploadDir(){
        $i = 0;

        return __DIR__ . '/../../../web/bundles/platform/img/';
    }


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
     * @var \EGamebookBundle\Entity\Book
     */
    private $book;


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

    /**
     * Set book
     *
     * @param \EGamebookBundle\Entity\Book $book
     *
     * @return Fichier
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
}
