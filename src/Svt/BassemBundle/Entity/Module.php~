<?php

namespace Svt\BassemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Module
 *
 * @ORM\Table(name="module")
 * @ORM\Entity(repositoryClass="Svt\BassemBundle\Repository\ModuleRepository")
 */
class Module
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
     * @ORM\Column(name="ModuleName", type="string", length=255)
     */
    private $moduleeName;

    /**
     * @var string
     *
     * @ORM\Column(name="ModuleDescription", type="text")
     */
    private $moduleeDescription;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreationModule", type="datetime")
     */
    private $dateCreationModule;

    /**
     * @ORM\ManyToOne(targetEntity="Svt\BassemBundle\Entity\Section", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $section;

    /**
     * @ORM\ManyToOne(targetEntity="Svt\BassemBundle\Entity\Classe")
     * @ORM\JoinColumn(nullable=false)
     */
    private $classe;

    /**
     * @var string
     *
     * @ORM\Column(name="imgModule", length=255, type="string", nullable=true)
     * @Assert\NotBlank(message="This file is not a valid image")
     * @Assert\File(mimeTypes={"image/jpeg", "image/png", "image/gif", "image/jpg"})
     */
    private $imgModule;

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
     * Set moduleeName
     *
     * @param string $moduleeName
     *
     * @return Module
     */
    public function setModuleeName($moduleeName)
    {
        $this->moduleeName = $moduleeName;

        return $this;
    }

    /**
     * Get moduleeName
     *
     * @return string
     */
    public function getModuleeName()
    {
        return $this->moduleeName;
    }

    /**
     * Set moduleeDescription
     *
     * @param string $moduleeDescription
     *
     * @return Module
     */
    public function setModuleDescription($moduleeDescription)
    {
        $this->moduleeDescription = $moduleeDescription;

        return $this;
    }

    /**
     * Get moduleeDescription
     *
     * @return string
     */
    public function getModuleeDescription()
    {
        return $this->moduleeDescription;
    }

    /**
     * Set dateCreationModule
     *
     * @param \DateTime $dateCreationModule
     *
     * @return Module
     */
    public function setDateCreationModule($dateCreationModule)
    {
        $this->dateCreationModule = $dateCreationModule;

        return $this;
    }

    /**
     * Get dateCreationModule
     *
     * @return \DateTime
     */
    public function getDateCreationModule()
    {
        return $this->dateCreationModule;
    }

    /**
     * Set section
     *
     * @param \Svt\BassemBundle\Entity\Section $section
     *
     * @return Module
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
     * Set imgModule
     *
     * @param string $imgModule
     *
     * @return Module
     */
    public function setImgModule($imgModule)
    {
        $this->imgModule = $imgModule;

        return $this;
    }

    /**
     * Get imgModule
     *
     * @return string
     */
    public function getImgModule()
    {
        return $this->imgModule;
    }

    /**
     * Set moduleeDescription
     *
     * @param string $moduleeDescription
     *
     * @return Module
     */
    public function setModuleeDescription($moduleeDescription)
    {
        $this->moduleeDescription = $moduleeDescription;

        return $this;
    }


    /**
     * Set classe
     *
     * @param \Svt\BassemBundle\Entity\Classe $classe
     *
     * @return Module
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
