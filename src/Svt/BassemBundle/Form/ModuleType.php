<?php

namespace Svt\BassemBundle\Form;

use Doctrine\ORM\EntityRepository;
use Svt\BassemBundle\Entity\Classe;
use Svt\BassemBundle\Entity\Section;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormEvents;

class ModuleType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('moduleeName')
            ->add('moduleeDescription')
            ->add('imgModule', FileType::class, array('data_class'=>null))
            ->add('section', EntityType::class, array(
                'class' => 'Svt\BassemBundle\Entity\Section',
                'placeholder'=>'',
                'choice_label' => 'name'));;
        $formModifier = function (FormInterface $form, Section $section = null) {
            $classes = null === $section ? array() : $section->getClasses();

            $form->add('classe', EntityType::class, array(
                'class' => 'Svt\BassemBundle\Entity\Classe',
                'placeholder' => '',
                'choices' => $classes,
                'choice_label'=>'name',
                'choices_as_values' => true,
            ));
        };

        $builder->addEventListener(
            FormEvents::PRE_SET_DATA,
            function (FormEvent $event) use ($formModifier) {
                // this would be your entity, i.e. SportMeetup
                $data = $event->getData();

                $formModifier($event->getForm(), $data->getSection());
            }
        );

        $builder->get('section')->addEventListener(
            FormEvents::POST_SUBMIT,
            function (FormEvent $event) use ($formModifier) {
                // It's important here to fetch $event->getForm()->getData(), as
                // $event->getData() will get you the client data (that is, the ID)
                $section = $event->getForm()->getData();

                // since we've added the listener to the child, we'll have to pass on
                // the parent to the callback functions!
                $formModifier($event->getForm()->getParent(), $section);
            }
        );
    }



    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Svt\BassemBundle\Entity\Module'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'svt_bassembundle_module';
    }


}
