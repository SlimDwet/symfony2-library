<?php

namespace Tuto\LibraryBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Tuto\LibraryBundle\Form\AuthorType;

class BookType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', null, array(
                'label' => 'Titre',
                'label_attr' => array('class' => 'col-sm-2 control-label')
            ))
            ->add('nbCopies', null, array(
                'label' => 'Nombre de copies',
                'label_attr' => array('class' => 'col-sm-2 control-label')
            ))
            ->add('authors', 'entity', array(
                'data_class' => null,
                'class' => 'TutoLibraryBundle:Author',
                'property' => 'nickname',
                'placeholder' => 'Sélectionnez un auteur',
                'multiple' => true,
                'label' => 'Auteur',
                'label_attr' => array('class' => 'col-sm-2 control-label')
            ))
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Tuto\LibraryBundle\Entity\Book'
        ));
    }
}
