<?php

namespace Svt\BassemBundle\Form\EventListener;


use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\PropertyAccess\PropertyAccess;
use Svt\BassemBundle\Entity\Classe;
use Svt\BassemBundle\Entity\Section;
use Svt\BassemBundle\Entity\Module;

class AddSectionFieldSubscriber implements EventSubscriberInterface
{
    private $propertyPathToModule;

    public function __construct($propertyPathToModule)
    {
        $this->propertyPathToModule = $propertyPathToModule;
    }

    public static function getSubscribedEvents()
    {
        return array(
            FormEvents::PRE_SET_DATA =>'preSetData',
            FormEvents::PRE_SUBMIT    => 'preSubmit'
        );
    }

    private function addSectionForm($form, $section = null)
    {
        $formOptions = array(
            'class'         => 'SvtBassemBundle:Section',
            'choices' => $section,
            'mapped'        => false,
            'choice_label'=>'name',
            'choices_as_values' => true,
            'label'         => 'Section',
            'placeholder'   => 'Section',
            'attr'          => array(
                'class' => 'section_selector',
            ),
        );

        if ($section) {
            $formOptions['data'] = $section;
        }

        $form->add('section', EntityType::class, $formOptions);
    }

    public function preSetData(FormEvent $event)
    {
        $data = $event->getData();
        $form = $event->getForm();

        if (null === $data) {
            return;
        }

        $accessor = PropertyAccess::createPropertyAccessor();

        $module    = $accessor->getValue($data, $this->propertyPathToModule);
        $section = ($module) ? $module->getClasse()->getSection() : null;

        $this->addSectionForm($form, $section);
    }

    public function preSubmit(FormEvent $event)
    {
        $form = $event->getForm();

        $this->addSectionForm($form);
    }
}