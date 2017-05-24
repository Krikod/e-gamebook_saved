<?php

namespace EGamebookBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ChaptersType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('childDependencies') // AJOUTER BOUTTONS CHOICE ETC.
                ->add('parentDependencies')
        ;
    }
}