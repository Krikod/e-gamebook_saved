<?php

namespace EGamebookBundle\Form;

use EGamebookBundle\Repository\ChaptersRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class ChaptersRelationsType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('childs', EntityType::class, array(
                'class' => 'EGamebookBundle\Entity\Chapters',
                'query_builder' => function (ChaptersRepository $er) {
                    return $er->getChapters();
                },
                'choice_label' => 'number',
                'multiple' => true,
                'expanded' => false,
            ))
            ->add('save', SubmitType::class, array(
                'label' => 'Create Relation'));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EGamebookBundle\Entity\Chapters'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'egamebookbundle_chapters';
    }
}