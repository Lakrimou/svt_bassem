<?php

namespace Svt\BassemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 *
 * @ORM\Table(name="Category")
 * @ORM\Entity(repositoryClass="Svt\BassemBundle\Repository\CategoryRepository")
 */
class Category
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
     * @ORM\Column(name="nameCategory", type="string", length=255)
     */
    private $nameCategory;

    /**
     * @var string
     *
     * @ORM\Column(name="author", type="string", length=255)
     */
    private $author;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreationCategory", type="datetime")
     */
    private $dateCreationCategory;

    /**
     * @var string
     *
     * @ORM\Column(name="CategoryContent", type="text", nullable=true)
     */
    private $CategoryContent;

    /**
     * @var string
     *
     * @ORM\Column(name="imgUrl", type="string", length=255, nullable=true)
     */
    private $imgUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="imgAlt", type="string", length=255, nullable=true)
     */
    private $imgAlt;

    /**
     * @var string
     *
     * @ORM\Column(name="pdfUrl", type="string", length=255, nullable=true)
     */
    private $pdfUrl;

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
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nameCategory
     *
     * @param string $nameCategory
     *
     * @return Category
     */
    public function setNameCategory($nameCategory)
    {
        $this->nameCategory = $nameCategory;

        return $this;
    }

    /**
     * Get nameCategory
     *
     * @return string
     */
    public function getNameCategory()
    {
        return $this->nameCategory;
    }

    /**
     * Set author
     *
     * @param string $author
     *
     * @return Category
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
     * Set dateCreationCategory
     *
     * @param \DateTime $dateCreationCategory
     *
     * @return Category
     */
    public function setDateCreationCategory($dateCreationCategory)
    {
        $this->dateCreationCategory = $dateCreationCategory;

        return $this;
    }

    /**
     * Get dateCreationCategory
     *
     * @return \DateTime
     */
    public function getDateCreationCategory()
    {
        return $this->dateCreationCategory;
    }

    /**
     * Set CategoryContent
     *
     * @param string $CategoryContent
     *
     * @return Category
     */
    public function setCategoryContent($CategoryContent)
    {
        $this->CategoryContent = $CategoryContent;

        return $this;
    }

    /**
     * Get CategoryContent
     *
     * @return string
     */
    public function getCategoryContent()
    {
        return $this->CategoryContent;
    }

    /**
     * Set imgUrl
     *
     * @param string $imgUrl
     *
     * @return Category
     */
    public function setImgUrl($imgUrl)
    {
        $this->imgUrl = $imgUrl;

        return $this;
    }

    /**
     * Get imgUrl
     *
     * @return string
     */
    public function getImgUrl()
    {
        return $this->imgUrl;
    }

    /**
     * Set imgAlt
     *
     * @param string $imgAlt
     *
     * @return Category
     */
    public function setImgAlt($imgAlt)
    {
        $this->imgAlt = $imgAlt;

        return $this;
    }

    /**
     * Get imgAlt
     *
     * @return string
     */
    public function getImgAlt()
    {
        return $this->imgAlt;
    }

    /**
     * Set pdfUrl
     *
     * @param string $pdfUrl
     *
     * @return Category
     */
    public function setPdfUrl($pdfUrl)
    {
        $this->pdfUrl = $pdfUrl;

        return $this;
    }

    /**
     * Get pdfUrl
     *
     * @return string
     */
    public function getPdfUrl()
    {
        return $this->pdfUrl;
    }
    

    /**
     * Set section
     *
     * @param \Svt\BassemBundle\Entity\Section $section
     *
     * @return Category
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
     * @return Category
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
}
