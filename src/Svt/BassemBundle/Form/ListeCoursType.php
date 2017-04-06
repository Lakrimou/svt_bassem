<?php

namespace Svt\BassemBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class ListeCoursType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('section', EntityType::class, array(
            'class'=>'Svt\BassemBundle\Entity\Section',
            'choice_label'=>'name')
            //query_builder = function(EntityRepository $er){return $e->createQueryBuilder('u')->orderBy('u.username','ASC');
        )
            ->add('classe', EntityType::class, array(
                    'class'=>'Svt\BassemBundle\Entity\Classe',
                    'choice_label'=>'name')
            //query_builder = function(EntityRepository $er){return $e->createQueryBuilder('u')->orderBy('u.username','ASC');
            )
            ->add('category', EntityType::class, array(
                    'class'=>'Svt\BassemBundle\Entity\Category',
                    'choice_label'=>'nameCategory')
            //query_builder = function(EntityRepository $er){return $e->createQueryBuilder('u')->orderBy('u.username','ASC');
            )
            ->add('cours', EntityType::class, array(
                    'class'=>'Svt\BassemBundle\Entity\Cours',
                    'choice_label'=>'courseName')
            //query_builder = function(EntityRepository $er){return $e->createQueryBuilder('u')->orderBy('u.username','ASC');
            )
            ->add('nomCours')
            ->add('descriptionCours')
            ->add('contenuCours')
            ->add('autheurCours')
            ->add('imgUrlCours')
            ->add('imgAltCours')
            ->add('pdfUrlCours')
            ->add('AjouterCours', SubmitType::class);
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Svt\BassemBundle\Entity\ListeCours'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'svt_bassembundle_listecours';
    }


}
