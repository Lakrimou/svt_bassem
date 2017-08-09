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

}
