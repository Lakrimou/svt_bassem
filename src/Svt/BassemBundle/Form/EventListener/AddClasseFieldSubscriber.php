<?php

namespace Svt\BassemBundle\Form\EventListener;


use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\PropertyAccess\PropertyAccess;
use Svt\BassemBundle\Entity\Classe;
use Svt\BassemBundle\Entity\Section;
use Svt\BassemBundle\Entity\Module;

class AddClasseFieldSubscriber implements EventSubscriberInterface
{
    private $propertyPathToModule;

    public function __construct($propertyPathToModule)
    {
        $this->propertyPathToModule = $propertyPathToModule;
    }

    public static function getSubscribedEvents()
    {
        return array(
            FormEvents::PRE_SET_DATA => 'preSetData',
            FormEvents::PRE_SUBMIT   => 'preSubmit'
        );
    }

    private function addClasseForm($form, $section_id, $classe = null)
    {
        $formOptions = array(
            'class'         => 'SvtBassemBundle:Classe',
            'choices' => $classe,
            'mapped'        => false,
            'choice_label'=>'name',
            'choices_as_values' => true,
            'placeholder'   => 'Section',
            'attr'          => array(
                'class' => 'classe_selector',
            ),
            'query_builder' => function (EntityRepository $repository) use ($section_id) {
                $qb = $repository->createQueryBuilder('classe')
                    ->innerJoin('classe.section', 'section')
                    ->where('section.id = :section')
                    ->setParameter('section', $section_id)
                ;

                return $qb;
            }
        );

        if ($classe) {
            $formOptions['data'] = $classe;
        }

        $form->add('classe', EntityType::class, $formOptions);
    }

    public function preSetData(FormEvent $event)
    {
        $data = $event->getData();
        $form = $event->getForm();

        if (null === $data) {
            return;
        }

        $accessor = PropertyAccess::createPropertyAccessor();

        $module       = $accessor->getValue($data, $this->propertyPathToModule);
        $classe    = ($module) ? $module->getClasse() : null;
        $section_id  = ($classe) ? $classe->getSection()->getId() : null;

        $this->addClasseForm($form, $section_id, $classe);
    }

    public function preSubmit(FormEvent $event)
    {
        $data = $event->getData();
        $form = $event->getForm();

        $section_id = array_key_exists('section', $data) ? $data['section'] : null;

        $this->addClasseForm($form, $section_id);
    }
}