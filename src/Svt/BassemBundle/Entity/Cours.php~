<?php

namespace Svt\BassemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Cours
 *
 * @ORM\Table(name="cours")
 * @ORM\Entity(repositoryClass="Svt\BassemBundle\Repository\CoursRepository")
 */
class Cours
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nomCours", type="string", length=255, nullable=true)
     */
    private $nomCours;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptionCours", type="string", length=255, nullable=true)
     */
    private $descriptionCours;

    /**
     * @var string
     *
     * @ORM\Column(name="contenuCours", type="text", nullable=true)
     */
    private $contenuCours;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreationCours", type="datetime", nullable=true)
     */
    private $dateCreationCours;

    /**
     * @var string
     *
     * @ORM\Column(name="autheurCours", type="string", length=255, nullable=true)
     */
    private $autheurCours;

    /**
     * @var string
     *
     * @ORM\Column(name="imgCours", type="string", length=255, nullable=true)
     * @Assert\NotBlank(message="This file is not a valid image")
     * @Assert\File(mimeTypes={"image/jpeg", "image/png", "image/gif", "image/jpg"})
     */
    private $imgCours;

    /**
     * @var string
     *
     * @ORM\Column(name="pdfUrlCours", type="string", length=255, nullable=true)
     *
     * @Assert\NotBlank(message="svp! veuillez mettre un fichier pdf")
     * @Assert\File(mimeTypes={"application/pdf"})
     */
    private $pdfUrlCours;

    /**
     * @ORM\ManyToOne(targetEntity="Svt\BassemBundle\Entity\Section", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $section;

    /**
     * @ORM\ManyToOne(targetEntity="Svt\BassemBundle\Entity\Classe", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $classe;


    /**
     * @ORM\ManyToOne(targetEntity="Svt\BassemBundle\Entity\Category", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $category;


    /**
     * @ORM\ManyToOne(targetEntity="Svt\BassemBundle\Entity\Module", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $module;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomCours
     *
     * @param string $nomCours
     *
     * @return Cours
     */
    public function setNomCours($nomCours)
    {
        $this->nomCours = $nomCours;

        return $this;
    }

    /**
     * Get nomCours
     *
     * @return string
     */
    public function getNomCours()
    {
        return $this->nomCours;
    }

    /**
     * Set descriptionCours
     *
     * @param string $descriptionCours
     *
     * @return Cours
     */
    public function setDescriptionCours($descriptionCours)
    {
        $this->descriptionCours = $descriptionCours;

        return $this;
    }

    /**
     * Get descriptionCours
     *
     * @return string
     */
    public function getDescriptionCours()
    {
        return $this->descriptionCours;
    }

    /**
     * Set contenuCours
     *
     * @param string $contenuCours
     *
     * @return Cours
     */
    public function setContenuCours($contenuCours)
    {
        $this->contenuCours = $contenuCours;

        return $this;
    }

    /**
     * Get contenuCours
     *
     * @return string
     */
    public function getContenuCours()
    {
        return $this->contenuCours;
    }

    /**
     * Set dateCreationCours
     *
     * @param \DateTime $dateCreationCours
     *
     * @return Cours
     */
    public function setDateCreationCours($dateCreationCours)
    {
        $this->dateCreationCours = $dateCreationCours;

        return $this;
    }

    /**
     * Get dateCreationCours
     *
     * @return \DateTime
     */
    public function getDateCreationCours()
    {
        return $this->dateCreationCours;
    }

    /**
     * Set autheurCours
     *
     * @param string $autheurCours
     *
     * @return Cours
     */
    public function setAutheurCours($autheurCours)
    {
        $this->autheurCours = $autheurCours;

        return $this;
    }

    /**
     * Get autheurCours
     *
     * @return string
     */
    public function getAutheurCours()
    {
        return $this->autheurCours;
    }

    /**
     * Set imgCours
     *
     * @param string $imgCours
     *
     * @return Cours
     */
    public function setImgCours($imgCours)
    {
        $this->imgCours = $imgCours;

        return $this;
    }

    /**
     * Get imgCours
     *
     * @return string
     */
    public function getImgCours()
    {
        return $this->imgCours;
    }

    /**
     * Set pdfUrlCours
     *
     * @param string $pdfUrlCours
     *
     * @return Cours
     */
    public function setPdfUrlCours($pdfUrlCours)
    {
        $this->pdfUrlCours = $pdfUrlCours;

        return $this;
    }

    /**
     * Get pdfUrlCours
     *
     * @return string
     */
    public function getPdfUrlCours()
    {
        return $this->pdfUrlCours;
    }

    /**
     * Set section
     *
     * @param \Svt\BassemBundle\Entity\Section $section
     *
     * @return Cours
     */
    public function setSection(\Svt\BassemBundle\Entity\Section $section)
    {
        $this->section = $section;

        return $this;
    }

    /**
     * Get section
     *
     * @return \Svt\BassemBundle\Entity\Section
     */
    public function getSection()
    {
        return $this->section;
    }

    /**
     * Set classe
     *
     * @param \Svt\BassemBundle\Entity\Classe $classe
     *
     * @return Cours
     */
    public function setClasse(\Svt\BassemBundle\Entity\Classe $classe)
    {
        $this->classe = $classe;

        return $this;
    }

    /**
     * Get classe
     *
     * @return \Svt\BassemBundle\Entity\Classe
     */
    public function getClasse()
    {
        return $this->classe;
    }

    /**
     * Set category
     *
     * @param \Svt\BassemBundle\Entity\Category $category
     *
     * @return Cours
     */
    public function setCategory(\Svt\BassemBundle\Entity\Category $category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \Svt\BassemBundle\Entity\Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set module
     *
     * @param \Svt\BassemBundle\Entity\Module $module
     *
     * @return Cours
     */
    public function setModule(\Svt\BassemBundle\Entity\Module $module)
    {
        $this->module = $module;

        return $this;
    }

    /**
     * Get module
     *
     * @return \Svt\BassemBundle\Entity\Module
     */
    public function getModule()
    {
        return $this->module;
    }
}
