<?php

namespace Tuto\LibraryBundle\Form;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AuthorType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname', TextType::class, array(
                'label' => 'Prénom',
                'label_attr' => array('class' => 'control-label col-sm-2')
            ))
            ->add('lastname', TextType::class, array(
                'label' => 'Nom',
                'label_attr' => array('class' => 'control-label col-sm-2')
            ))
            ->add('nickname', TextType::class, array(
                'label' => "Nom d'auteur",
                'label_attr' => array('class' => 'control-label col-sm-2'),
                'required' => false
            ))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Tuto\LibraryBundle\Entity\Author'
        ));
    }
}
