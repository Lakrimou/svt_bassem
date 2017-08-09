<?php

namespace Svt\BassemBundle\Controller;
use Svt\BassemBundle\Entity\Section;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AdminController extends Controller
{
    public function indexAction(Request $request)
    {
        $section = new Section();
        $em = $this->getDoctrine()->getManager();
        $sections = $em->getRepository('SvtBassemBundle:Section')->findAll();
        $modules = $em->getRepository('SvtBassemBundle:Module')->findBy(
            array(

            ),
            array('dateCreationModule'=>'desc')
            ,
            4,0);

        $cours = $em->getRepository('SvtBassemBundle:Cours')->findBy(
          array(

          ),
            array('dateCreationCours'=>'desc')
        ,
            8, 0);
        return $this->render("SvtBassemBundle:Admin:index.html.twig", array('sections'=>$sections,'modules'=>$modules,'cours'=>$cours));
    }

    public function classeAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $cours = $em->getRepository('SvtBassemBundle:Cours')->findBy(
            array(

            ),
            array()
            ,
            8);
        $sections = $em->getRepository('SvtBassemBundle:Section')->findAll();
        $section = $em->getRepository('SvtBassemBundle:Section')->find($id);
        $classes = $em->getRepository('SvtBassemBundle:Classe')->findBy(array('section'=>$section));
        return $this->render('SvtBassemBundle:Admin:classe.html.twig', array('cours'=>$cours,'section'=>$section,'sections'=>$sections , 'classes'=>$classes));
    }

    public function classeSpecAction($classeName, $id, $sectionName, $idSection, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $cours = $em->getRepository('SvtBassemBundle:Cours')->findBy(
            array(

            ),
            array()
            ,
            8);
        $sections = $em->getRepository('SvtBassemBundle:Section')->findAll();
        $section = $em->getRepository('SvtBassemBundle:Section')->find($idSection);
        $classe = $em->getRepository('SvtBassemBundle:Classe')->find($id);
        $modules = $em->getRepository('SvtBassemBundle:Module')->findBy(array('classe'=>$classe));
        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $modules, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            3/*limit per page*/
        );
        return $this->render('SvtBassemBundle:Admin:classeSpec.html.twig', array('cours'=>$cours,'modules'=>$modules,"pagination"=> $pagination,'section'=>$section,'sections'=>$sections,'classe'=>$classe));
    }

    public function coursAction($classeName, $id, $sectionName, $idSection, $moduleeName, $moduleId)
    {
        $em = $this->getDoctrine()->getManager();
        $categoryId =1;
        $section = $em->getRepository('SvtBassemBundle:Section')->find($idSection);
        $sections = $em->getRepository('SvtBassemBundle:Section')->findAll();
        $classe = $em->getRepository('SvtBassemBundle:Classe')->find($id);
        $module = $em->getRepository('SvtBassemBundle:Module')->find($moduleId);
        $category = $em->getRepository('SvtBassemBundle:Category')->find($categoryId);
        $cours = $em->getRepository('SvtBassemBundle:Cours')->findBy(array('section'=>$section, 'classe'=>$classe, 'module'=>$module));
        return $this->render('SvtBassemBundle:Admin:cours.html.twig', array('module'=>$module,'sections'=>$sections,'category'=>$category, 'section'=>$section,'classe'=>$classe, 'cours'=>$cours));
    }

    public function viewCoursAction($id, $idSection, $moduleId, $coursId)
    {
        $em = $this->getDoctrine()->getManager();
        $section = $em->getRepository('SvtBassemBundle:Section')->find($idSection);
        $classe = $em->getRepository('SvtBassemBundle:Classe')->find($id);
        $category = $em->getRepository('SvtBassemBundle:Category')->find($moduleId);
        $cours = $em->getRepository('SvtBassemBundle:Module')->find($coursId);
        $listeCours = $em->getRepository('SvtBassemBundle:Cours')->findBy(array('section'=>$section, 'classe'=>$classe, 'category'=>$category));
        return $this->render('SvtBassemBundle:Admin:viewCourse.html.twig', array(
            'category'=>$category,
            'section'=>$section,
            'classe'=>$classe,
            'cours'=>$cours,
            'listecours'=>$listeCours));
    }

    public function contactAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $cours = $em->getRepository('SvtBassemBundle:Cours')->findBy(
            array(

            ),
            array()
            ,
            8,0);
        $sections = $em->getRepository('SvtBassemBundle:Section')->findAll();
        return $this->render('SvtBassemBundle:Admin:contact.html.twig', array('cours'=>$cours,'sections'=>$sections));
    }

    public function contactTraitAction(Request $request)
    {
        $name = $request->request->get('name');
        $mail = $request->request->get('mail');
        $objet = $request->request->get('objet');
        $message = $request->request->get('message');
        $transport = \Swift_SmtpTransport::newInstance('smtp.gmail.com', 587, "tls")
            ->setUsername('bassemhezzi0@gmail.com')
            ->setPassword('Bassem123456789');

        $mailer = \Swift_Mailer::newInstance($transport);
        $message = \Swift_Message::newInstance($objet)
            ->setFrom('akrem.boussaha@gmail.com')
            ->setTo(['bassemhezzi0@gmail.com' => 'Receiver Name'])
            ->setBody($name. "\n\n" .$mail. "\n\n" . $message);



        if ($this->get('mailer')->send($message))
        {
            $session = $request->getSession();
            $session->getFlashBag()->add('msg', 'تم ارسال رسالتك بنجاح');
            return $this->redirectToRoute('svt_bassem_contact');
        }
        else
        {
            $session = $request->getSession();
            $session->getFlashBag()->add('msg', 'لم يتم إرسال رسالتك');
            return $this->redirectToRoute('svt_bassem_contact');

        }

    }

}