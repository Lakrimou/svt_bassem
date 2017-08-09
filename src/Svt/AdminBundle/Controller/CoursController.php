<?php

namespace Svt\AdminBundle\Controller;

use Svt\BassemBundle\Entity\Cours;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * Listecour controller.
 *
 */
class CoursController extends Controller
{
    /**
     * Lists all listeCour entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $listeCours = $em->getRepository('SvtBassemBundle:Cours')->findAll();

        return $this->render('SvtAdminBundle:listecours:index.html.twig', array(
            'listeCours' => $listeCours,
        ));
    }

    /**
     * Creates a new listeCour entity.
     *
     */
    public function newAction(Request $request)
    {
        $cours = new Cours();
        $form = $this->createForm('Svt\BassemBundle\Form\CoursType', $cours);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            /*
             *
             */

            $file = $cours->getImgCours();
            $fileName = md5(uniqid()).'.'.$file->guessExtension();
            $file->move($this->getParameter('images'), $fileName);

            $filepdf = $cours->getPdfUrlCours();
            $fileNamepdf = md5(uniqid()).'.'.$filepdf->guessExtension();
            $filepdf->move($this->getParameter('pdf'), $fileNamepdf);

            $cours->setPdfUrlCours($fileNamepdf);
            $cours->setImgCours($fileName);
            /*
             *
             */
            $sect = $request->request->get('svt_bassembundle_cours');
            $section_id = $sect['section'];
            $classe_id = $sect['classe'];
            var_dump($section_id);
            var_dump($classe_id);
            $section = $em->getRepository('SvtBassemBundle:Section')->find($section_id);
            $classe = $em->getRepository('SvtBassemBundle:Classe')->find($classe_id);
            /*var_dump($section);
            var_dump($classe);*/
            $cours->setSection($section);
            $cours->setClasse($classe);
            //$classe_id = $request->request->get('doctors_adminbundle_appointment');

            $em->persist($cours);
            $em->flush($cours);

            return $this->redirectToRoute('listecours_show', array('id' => $cours->getId()));
        }

        return $this->render('SvtAdminBundle:listecours:new.html.twig', array(
            'listeCour' => $cours,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a listeCour entity.
     *
     */
    public function showAction(Cours $listeCour)
    {
        $deleteForm = $this->createDeleteForm($listeCour);

        return $this->render('SvtAdminBundle:listecours:show.html.twig', array(
            'listeCour' => $listeCour,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing listeCour entity.
     *
     */
    public function editAction(Request $request, Cours $listeCour)
    {
        $deleteForm = $this->createDeleteForm($listeCour);
        $editForm = $this->createForm('Svt\BassemBundle\Form\CoursType', $listeCour);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('listecours_edit', array('id' => $listeCour->getId()));
        }

        return $this->render('SvtAdminBundle:listecours:edit.html.twig', array(
            'listeCour' => $listeCour,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a listeCour entity.
     *
     */
    public function deleteAction(Request $request, Cours $listeCour)
    {
        $form = $this->createDeleteForm($listeCour);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($listeCour);
            $em->flush();
        }

        return $this->redirectToRoute('listecours_index');
    }

    /**
     * Creates a form to delete a listeCour entity.
     *
     * @param ListeCours $listeCour The listeCour entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Cours $listeCour)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('listecours_delete', array('id' => $listeCour->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    public function classesAction(Request $request)
    {
        $section_id = $request->request->get('section_id');
        $em = $this->getDoctrine()->getManager();
        $section = $em->getRepository('SvtBassemBundle:Section')->find($section_id);
        $classess = $em->getRepository('SvtBassemBundle:Classe')->findBy(array('section'=>$section));
        $tab_return = array();
        $i = 0;
        foreach ($classess as $classe)
        {
            $tab_return[$i]['id'] = $classe->getId();
            $tab_return[$i]['name'] = $classe->getName();
            $i++;
        }
        $classes['data'] = $tab_return;
        return new JsonResponse($classes);
    }


    public function modulesAction(Request $request)
    {
        $classe_id = $request->request->get('classe_id');
        $em = $this->getDoctrine()->getManager();
        $classe = $em->getRepository('SvtBassemBundle:Classe')->find($classe_id);
        $moduless = $em->getRepository('SvtBassemBundle:Module')->findBy(array('classe'=>$classe));
        $tab_return = array();
        $i = 0;
        foreach ($moduless as $module)
        {
            $tab_return[$i]['id'] = $module->getId();
            $tab_return[$i]['name'] = $module->getModuleeName();
            $i++;
        }
        $modules['data'] = $tab_return;
        return new JsonResponse($modules);
    }
}
