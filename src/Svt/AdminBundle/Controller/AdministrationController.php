<?php

namespace Svt\AdminBundle\Controller;

use Svt\BassemBundle\Entity\ListeCours;
use Svt\BassemBundle\Form\ListeCoursType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AdministrationController extends Controller
{
    public function indexAction()
    {
        return $this->render('SvtAdminBundle:Administration:index.html.twig');
    }
    public function ajouterCoursAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $sections = $em->getRepository('SvtBassemBundle:Section')->findAll();
        $listeCours = new ListeCours();
        $form = $this->get('form.factory')->create(ListeCoursType::class, $listeCours);
        if($request->isMethod('POST'))
        {
            $form->handleRequest($request);
            //code de récupération de l'image
            $fileImg = $listeCours->getImgUrlCours();
            $fileNameImg = md5(uniqid()).'.'.$fileImg->guessExtension();
            $fileImg->move(
                $this->getParameter('images'),
                $fileNameImg);
            $listeCours->setImgUrlCours($fileNameImg);
            //code de récupération de pdf
            $filePdf = $listeCours->getPdfUrlCours();
            $fileNamePdf = md5(uniqid()).'.'.$filePdf->guessExtension();
            $filePdf->move(
                $this->getParameter('images'),
                $fileNamePdf
            );
            $listeCours->setPdfUrlCours($fileNamePdf);
            $em->persist($listeCours);
            $em->flush();
            return new Response('ajout bien effectué');
        }
        return $this->render('SvtAdminBundle:Administration:test.html.twig',array('sections'=>$sections, 'form'=>$form->createView()));
    }
}