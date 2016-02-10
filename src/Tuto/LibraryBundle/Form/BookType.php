<?php

namespace Tuto\LibraryBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Tuto\LibraryBundle\Form\AuthorType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

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
            ->add('authors', EntityType::class, array(
                'class' => 'TutoLibraryBundle:Author',
                'choice_label' => 'nickname',
                'multiple' => true,
                'label' => 'Auteurs',
                'label_attr' => array('class' => 'control-label col-sm-2')
            ))
            ->add('authors_add', CollectionType::class, array(
                'allow_add' => true,
                'allow_delete' => true,
                'entry_type' => AuthorType::class,
                'mapped' => false
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
