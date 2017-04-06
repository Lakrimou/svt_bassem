<?php

namespace Svt\BassemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Classe
 *
 * @ORM\Table(name="classe")
 * @ORM\Entity(repositoryClass="Svt\BassemBundle\Repository\ClasseRepository")
 */
class Classe
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
     * @ORM\Column(name="Description", type="text")
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreationClasse", type="datetime")
     */
    private $dateCreationClasse;

    /**
     * @ORM\ManyToOne(targetEntity="Svt\BassemBundle\Entity\Section", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $section;

    /**
     * @var string
     *
     * @ORM\Column(name="imgUrlClasse", type="string", nullable=true)
     */
    private $imgUrlClasse;

    /**
     * @var string
     *
     * @ORM\Column(name="imgAltClasse", type="string", nullable=true)
     */
    private $imgAltClasse;

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
     * @return Classe
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
     * @return Classe
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
     * Set dateCreationClasse
     *
     * @param \DateTime $dateCreationClasse
     *
     * @return Classe
     */
    public function setDateCreationClasse($dateCreationClasse)
    {
        $this->dateCreationClasse = $dateCreationClasse;

        return $this;
    }

    /**
     * Get dateCreationClasse
     *
     * @return \DateTime
     */
    public function getDateCreationClasse()
    {
        return $this->dateCreationClasse;
    }


    /**
     * Set section
     *
     * @param \Svt\BassemBundle\Entity\Section $section
     *
     * @return Classe
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
     * Set imgUrlClasse
     *
     * @param string $imgUrlClasse
     *
     * @return Classe
     */
    public function setImgUrlClasse($imgUrlClasse)
    {
        $this->imgUrlClasse = $imgUrlClasse;

        return $this;
    }

    /**
     * Get imgUrlClasse
     *
     * @return string
     */
    public function getImgUrlClasse()
    {
        return $this->imgUrlClasse;
    }

    /**
     * Set imgAltClasse
     *
     * @param string $imgAltClasse
     *
     * @return Classe
     */
    public function setImgAltClasse($imgAltClasse)
    {
        $this->imgAltClasse = $imgAltClasse;

        return $this;
    }

    /**
     * Get imgAltClasse
     *
     * @return string
     */
    public function getImgAltClasse()
    {
        return $this->imgAltClasse;
    }
}
