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
            ->add('authors', 'collection', array(
                'entry_type' => new AuthorType(),
                'label' => 'Auteur',
                'attr' => array(
                    'multiple' => true,
                    'placeholder' => 'Yo !'
                ),
//                'property_path' => 'title',
                'label_attr' => array('class' => 'col-sm-2 control-label'),
                'allow_add' => true // Permet l'ajout dynamique d'auteur
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
