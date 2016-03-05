<?php

namespace Tuto\LibraryBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Tuto\LibraryBundle\Form\AuthorType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

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
            ))
            ->add('nbCopies', null, array(
                'label' => 'Nombre de copies',
            ))
            ->add('authors', CollectionType::class, array(
                'allow_add' => true,
                'allow_delete' => true,
                'entry_type' => AuthorType::class,
                'by_reference' => false,
                'entry_options'  => array(
                    'required'  => false,
                    'attr'      => array('class' => '')
                ),
            ))
            ->add('save', SubmitType::class)
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
