<?php

namespace EGamebookBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
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
//        ->add('number', CollectionType::class, array(
//            'entry_type' => ChoiceType::class
//            ))
            ->add('toChapters', ChoiceType::class, // ou COLLECTIONTYPE !!!!!!
                array('multiple' => true, 'placeholder' => false, 'expanded' => false))
//            ->add('save', SubmitType::class, array('label' => 'Create Relation'))
            ->getForm();
    }
//$chapter l' objet
//                $chapterParent
//         $chapter->addToChapter($chapterParent)
//            $chapterParent->addfromChapter($chapter)
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