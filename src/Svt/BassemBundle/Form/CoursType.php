<?php

namespace Svt\BassemBundle\Form;

use FOS\UserBundle\Event\FormEvent;
use Svt\BassemBundle\Entity\Classe;
use Svt\BassemBundle\Entity\Section;
use Svt\BassemBundle\Form\EventListener\AddClasseFieldSubscriber;
use Svt\BassemBundle\Form\EventListener\AddModuleFieldSubscriber;
use Svt\BassemBundle\Form\EventListener\AddSectionFieldSubscriber;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class CoursType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $propertyPathToModule = 'module';
        $builder
            ->addEventSubscriber(new AddSectionFieldSubscriber($propertyPathToModule))
            ->addEventSubscriber(new AddClasseFieldSubscriber($propertyPathToModule))
            ->addEventSubscriber(new AddModuleFieldSubscriber($propertyPathToModule))
            ->add('category', EntityType::class, array(
                  'class'=>'Svt\BassemBundle\Entity\Category',
                  'choice_label'=>'nameCategory'))
            ->add('nomCours')
            ->add('descriptionCours')
            ->add('autheurCours')
            ->add('pdfUrlCours',FileType::class)
            ->add('imgCours',FileType::class);
    }
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Svt\BassemBundle\Entity\Cours'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'svt_bassembundle_cours';
    }


}
