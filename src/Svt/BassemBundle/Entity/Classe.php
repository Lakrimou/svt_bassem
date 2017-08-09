<?php

namespace Svt\BassemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

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
     * @ORM\ManyToOne(targetEntity="Svt\BassemBundle\Entity\Section", inversedBy="classes")
     * @ORM\JoinColumn(name="section_id", referencedColumnName="id")
     */
    private $section;

    /**
     * @var string
     *
     * @ORM\Column(name="imgClasse", type="string", nullable=true, length=255)
     * @Assert\NotBlank(message="This file is not a valid image")
     * @Assert\File(mimeTypes={"image/jpeg", "image/png", "image/gif", "image/jpg"})
     */
    private $imgClasse;


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
     * Set imgClasse
     *
     * @param string $imgClasse
     *
     * @return Classe
     */
    public function setImgClasse($imgClasse)
    {
        $this->imgClasse = $imgClasse;

        return $this;
    }

    /**
     * Get imgClasse
     *
     * @return string
     */
    public function getImgClasse()
    {
        return $this->imgClasse;
    }

    /**
     * Set section
     *
     * @param \Svt\BassemBundle\Entity\Section $section
     *
     * @return Classe
     */
    public function setSection(\Svt\BassemBundle\Entity\Section $section = null)
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
}
