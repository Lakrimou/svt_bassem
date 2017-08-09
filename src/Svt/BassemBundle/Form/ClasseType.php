<?php

namespace Svt\BassemBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class ClasseType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name')
            ->add('description')
            ->add('imgClasse', FileType::class, array('data_class'=>null))
            ->add('section', EntityType::class, array(
                'class'=>'Svt\BassemBundle\Entity\Section',
                'choice_label'=>'name')
        //query_builder = function(EntityRepository $er){return $e->createQueryBuilder('u')->orderBy('u.username','ASC');
        );
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Svt\BassemBundle\Entity\Classe'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'svt_bassembundle_classe';
    }


}
