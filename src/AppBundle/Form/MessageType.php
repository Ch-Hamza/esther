<?php

namespace AppBundle\Form;

use AppBundle\Entity\Message;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MessageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, array(
                'attr' => array(
                    'placeholder' => 'Name',
                    'class' => 'form-control tm-form-field',
                ),
                'label' => false,
            ))
            ->add('email', EmailType::class, array(
                'attr' => array(
                    'placeholder' => 'Email Address',
                    'class' => 'form-control tm-form-field',
                ),
                    'label' => false,
            ))
            ->add('subject', TextType::class, array(
                'attr' => array(
                    'placeholder' => 'Subject',
                    'class' => 'form-control tm-form-field',
                ),
                'label' => false,
            ))
            ->add('telephone', TextType::class, array(
                'attr' => array(
                    'placeholder' => 'Telephone',
                    'class' => 'form-control tm-form-field',
                ),
                'label' => false,
            ))
            ->add('message', TextareaType::class, array(
                'attr' => array(
                    'class' => 'form-control tm-form-field',
                    'rows' => 4,
                    'placeholder' => 'Votre Message'
                ),
                'label' => false,
            ))
            ->add('save',  SubmitType::class, array(
                'label' => 'translate.form_save',
                "attr" => array('class' => 'tm-btn1'),
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Message::class,
        ));
    }
}