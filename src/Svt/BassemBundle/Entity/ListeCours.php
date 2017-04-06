<?php

namespace Svt\BassemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * ListeCours
 *
 * @ORM\Table(name="liste_cours")
 * @ORM\Entity(repositoryClass="Svt\BassemBundle\Repository\ListeCoursRepository")
 */
class ListeCours
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
     * @ORM\Column(name="nomCours", type="string", length=255)
     */
    private $nomCours;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptionCours", type="string", length=255)
     */
    private $descriptionCours;

    /**
     * @var string
     *
     * @ORM\Column(name="ContenuCours", type="text", nullable=true)
     */
    private $contenuCours;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreationCours", type="datetime")
     */
    private $dateCreationCours;

    /**
     * @var string
     *
     * @ORM\Column(name="autheurCours", type="string", length=255)
     */
    private $autheurCours;

    /**
     * @var string
     *
     * @ORM\Column(name="imgUrlCours", type="string", length=255, nullable=true)
     * @Assert\NotBlank(message="svp! veuillez mettre un fichier pdf")
     * @Assert\File(mimeTypes={"application/image"})
     */
    private $imgUrlCours;

    /**
     * @var string
     *
     * @ORM\Column(name="imgAltCours", type="string", length=255, nullable=true)
     */
    private $imgAltCours;

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
     * @ORM\ManyToOne(targetEntity="Svt\BassemBundle\Entity\Cours", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $cours;


    /**
     * Get id
     *
     * @return int
     */

    public function __construct()
    {
        $this->dateCreationCours = new \Datetime();
    }

    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomCours
     *
     * @param string $nomCours
     *
     * @return ListeCours
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
     * @return ListeCours
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
     * @return ListeCours
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
     * @return ListeCours
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
     * @return ListeCours
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
     * Set imgUrlCours
     *
     * @param string $imgUrlCours
     *
     * @return ListeCours
     */
    public function setImgUrlCours($imgUrlCours)
    {
        $this->imgUrlCours = $imgUrlCours;

        return $this;
    }

    /**
     * Get imgUrlCours
     *
     * @return string
     */
    public function getImgUrlCours()
    {
        return $this->imgUrlCours;
    }

    /**
     * Set imgAltCours
     *
     * @param string $imgAltCours
     *
     * @return ListeCours
     */
    public function setImgAltCours($imgAltCours)
    {
        $this->imgAltCours = $imgAltCours;

        return $this;
    }

    /**
     * Get imgAltCours
     *
     * @return string
     */
    public function getImgAltCours()
    {
        return $this->imgAltCours;
    }

    /**
     * Set pdfUrlCours
     *
     * @param string $pdfUrlCours
     *
     * @return ListeCours
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
     * @return ListeCours
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
     * @return ListeCours
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
     * @return ListeCours
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
     * Set cours
     *
     * @param \Svt\BassemBundle\Entity\Category $cours
     *
     * @return ListeCours
     */
    public function setCours(\Svt\BassemBundle\Entity\Cours $cours)
    {
        $this->cours = $cours;

        return $this;
    }

    /**
     * Get cours
     *
     * @return \Svt\BassemBundle\Entity\Category
     */
    public function getCours()
    {
        return $this->cours;
    }
}
