<?php

namespace Svt\BassemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * @ORM\Column(name="CourseName", type="string", length=255)
     */
    private $courseName;

    /**
     * @var string
     *
     * @ORM\Column(name="CourseDescription", type="text")
     */
    private $courseDescription;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreationCourse", type="datetime")
     */
    private $dateCreationCourse;

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
     * @var string
     *
     * @ORM\Column(name="imgUrlCours", length=255, type="string", nullable=true)
     */
    private $imgUrlCours;

    /**
     * @var string
     *
     * @ORM\Column(name="imgAltCours", length=255, type="string", nullable=true)
     */
    private $imgAltCours;

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
     * Set courseName
     *
     * @param string $courseName
     *
     * @return Cours
     */
    public function setCourseName($courseName)
    {
        $this->courseName = $courseName;

        return $this;
    }

    /**
     * Get courseName
     *
     * @return string
     */
    public function getCourseName()
    {
        return $this->courseName;
    }

    /**
     * Set courseDescription
     *
     * @param string $courseDescription
     *
     * @return Cours
     */
    public function setCourseDescription($courseDescription)
    {
        $this->courseDescription = $courseDescription;

        return $this;
    }

    /**
     * Get courseDescription
     *
     * @return string
     */
    public function getCourseDescription()
    {
        return $this->courseDescription;
    }

    /**
     * Set dateCreationCourse
     *
     * @param \DateTime $dateCreationCourse
     *
     * @return Cours
     */
    public function setDateCreationCourse($dateCreationCourse)
    {
        $this->dateCreationCourse = $dateCreationCourse;

        return $this;
    }

    /**
     * Get dateCreationCourse
     *
     * @return \DateTime
     */
    public function getDateCreationCourse()
    {
        return $this->dateCreationCourse;
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
     * Set imgUrlCours
     *
     * @param string $imgUrlCours
     *
     * @return Cours
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
     * @return Cours
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
}
