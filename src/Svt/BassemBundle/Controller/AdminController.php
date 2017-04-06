<?php

namespace Svt\BassemBundle\Controller;
use Svt\BassemBundle\Entity\Section;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller
{
    public function indexAction()
    {
        $section = new Section();
        $em = $this->getDoctrine()->getManager()->getRepository('SvtBassemBundle:Section');
        $sections = $em->findAll();
        return $this->render("SvtBassemBundle:Admin:index.html.twig", array('sections'=>$sections));
    }

    public function classeAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $section = $em->getRepository('SvtBassemBundle:Section')->find($id);
        $classes = $em->getRepository('SvtBassemBundle:Classe')->findBy(array('section'=>$section));
        return $this->render('SvtBassemBundle:Admin:classe.html.twig', array('section'=>$section,'classes'=>$classes));
    }

    public function classeSpecAction($classeName, $id, $sectionName, $idSection)
    {
        $em = $this->getDoctrine()->getManager();
        $section = $em->getRepository('SvtBassemBundle:Section')->find($idSection);
        $classe = $em->getRepository('SvtBassemBundle:Classe')->find($id);
        $categories = $em->getRepository('SvtBassemBundle:Category')->findAll();
        return $this->render('SvtBassemBundle:Admin:classeSpec.html.twig', array('categories'=>$categories, 'section'=>$section,'classe'=>$classe));
    }

    public function coursAction($classeName, $id, $sectionName, $idSection, $categoryName, $categoryId)
    {
        $em = $this->getDoctrine()->getManager();
        $section = $em->getRepository('SvtBassemBundle:Section')->find($idSection);
        $classe = $em->getRepository('SvtBassemBundle:Classe')->find($id);
        $category = $em->getRepository('SvtBassemBundle:Category')->find($categoryId);
        $cours = $em->getRepository('SvtBassemBundle:Cours')->findBy(array('section'=>$section, 'classe'=>$classe, 'category'=>$category));
        return $this->render('SvtBassemBundle:Admin:cours.html.twig', array('category'=>$category, 'section'=>$section,'classe'=>$classe, 'cours'=>$cours));
    }

    public function viewCoursAction($id, $idSection, $categoryId, $coursId)
    {
        $em = $this->getDoctrine()->getManager();
        $section = $em->getRepository('SvtBassemBundle:Section')->find($idSection);
        $classe = $em->getRepository('SvtBassemBundle:Classe')->find($id);
        $category = $em->getRepository('SvtBassemBundle:Category')->find($categoryId);
        $cours = $em->getRepository('SvtBassemBundle:Cours')->find($coursId);
        $listeCours = $em->getRepository('SvtBassemBundle:ListeCours')->findBy(array('section'=>$section, 'classe'=>$classe, 'category'=>$category, 'cours'=>$cours));
        return $this->render('SvtBassemBundle:Admin:viewCourse.html.twig', array('category'=>$category, 'section'=>$section,'classe'=>$classe, 'cours'=>$cours, 'listecours'=>$listeCours));
    }
}