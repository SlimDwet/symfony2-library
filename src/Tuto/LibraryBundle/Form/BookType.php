<?php

namespace Tuto\LibraryBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Tuto\LibraryBundle\Form\AuthorType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

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
