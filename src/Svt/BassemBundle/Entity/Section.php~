<?php

namespace Svt\BassemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Section
 *
 * @ORM\Table(name="section")
 * @ORM\Entity(repositoryClass="Svt\BassemBundle\Repository\SectionRepository")
 */
class Section
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="imgUrlSection", type="string", nullable=true)
     */
    private $imgUrlSection;

    /**
     * @var string
     *
     * @ORM\Column(name="imgAltSection", type="string", nullable=true)
     */
    private $imgAltSection;

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
     * Set name
     *
     * @param string $name
     *
     * @return Section
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Section
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Section
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set imgUrlSection
     *
     * @param string $imgUrlSection
     *
     * @return Section
     */
    public function setImgUrlSection($imgUrlSection)
    {
        $this->imgUrlSection = $imgUrlSection;

        return $this;
    }

    /**
     * Get imgUrlSection
     *
     * @return string
     */
    public function getImgUrlSection()
    {
        return $this->imgUrlSection;
    }

    /**
     * Set imgAltSection
     *
     * @param string $imgAltSection
     *
     * @return Section
     */
    public function setImgAltSection($imgAltSection)
    {
        $this->imgAltSection = $imgAltSection;

        return $this;
    }

    /**
     * Get imgAltSection
     *
     * @return string
     */
    public function getImgAltSection()
    {
        return $this->imgAltSection;
    }
}
