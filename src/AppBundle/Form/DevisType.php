<?php

namespace AppBundle\Form;

use AppBundle\Entity\Devis;
use AppBundle\Entity\MailingList;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DevisType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class, array(
                'attr' => array(
                    'placeholder' => 'Nom',
                    'class' => 'form-control tm-form-field input-no-borders',
                ),
                'label' => false,
            ))
            ->add('prenom', TextType::class, array(
                'attr' => array(
                    'placeholder' => 'Prenom',
                    'class' => 'form-control tm-form-field input-no-borders',
                ),
                'label' => false,
            ))
            ->add('email', EmailType::class, array(
                'attr' => array(
                    'placeholder' => 'Email',
                    'class' => 'form-control tm-form-field input-no-borders',
                ),
                'label' => false,
            ))
            ->add('telephone', TextType::class, array(
                'attr' => array(
                    'placeholder' => 'telephone',
                    'class' => 'form-control tm-form-field input-no-borders',
                ),
                'label' => false,
            ))
            /*->add('dateNaissance', DateType::class, array(
                'attr' => array(
                    'placeholder' => 'Date Naissance',
                    'class' => 'form-control tm-form-field input-no-borders js-datepicker',
                ),
                'widget' => 'single_text',
                'html5' => false,
                'label' => false,
            ))*/
            ->add('age', IntegerType::class, array(
                'attr' => array(
                    'placeholder' => 'Age',
                    'class' => 'form-control tm-form-field input-no-borders',
                ),
                'label' => false,
            ))
            ->add('sexe', ChoiceType::class, array(
                'attr' => array(
                    'placeholder' => 'sexe',
                    'class' => 'form-control tm-form-field input-no-borders',
                ),
                'label' => false,
                'choices'  => [
                    'Madame' => 'Madame',
                    'Mademoiselle' => 'Mademoiselle',
                    'Monsieur' => 'Monsieur',
                ],
            ))
            ->add('pays', TextType::class, array(
                'attr' => array(
                    'placeholder' => 'pays',
                    'class' => 'form-control tm-form-field input-no-borders',
                ),
                'label' => false,
            ))
            ->add('typeChirurgie', ChoiceType::class, array(
                'attr' => array(
                    'placeholder' => 'L\'intervention demandée',
                    'class' => 'form-control tm-form-field input-no-borders',
                ),
                'label' => false,
                'choices'  => [
                    'chirurgie des seins' => 'chirurgie des seins',
                    'chirurgie du visage' => 'chirurgie du visage',
                    'chirurgie de la silhouette' => 'chirurgie de la silhouette',
                    'chirurgie intime' => 'chirurgie intime',
                    'chirurgie orthopédique' => 'chirurgie orthopédique',
                    'chirurgie de l\'obésité' => 'chirurgie de l\'obésité',
                    'chirurgie capillaire' => 'chirurgie capillaire',
                    'chirurgie de l\'infertilité' => 'chirurgie de l\'infertilité',
                    'chirurgie dentaire' => 'chirurgie dentaire',
                    'chirurgie ophtalmologie' => 'chirurgie ophtalmologie',
                    'Autre' => 'Autre',
                ],
            ))
            ->add('chirurgie', ChoiceType::class, array(
                'attr' => array(
                    'placeholder' => 'Select One',
                    'class' => 'form-control tm-form-field input-no-borders',
                ),
                'label' => false,
                'choices' => [
                    'Augmentation mammaire par prothèse mammaires rondes' => 'Augmentation mammaire par prothèse mammaires rondes',
                    'Augmentation mammaire par prothèse mammaires anatomiques' => 'Augmentation mammaire par prothèse mammaires anatomiques',
                    'Augmentation mammaire par lipofilling' => 'Augmentation mammaire par lipofilling',
                    'Lifting mammaire' => 'Lifting mammaire',
                    'Réduction mammaire' => 'Réduction mammaire',
                    'Gynécomastie' => 'Gynécomastie',
                    'Lifting mammaire avec prothèses' => 'Lifting mammaire avec prothèses',
                    'Lifting cervico-facial' => 'Lifting cervico-facial',
                    'Lifting malaire' => 'Lifting malaire',
                    'Lifting frontal' => 'Lifting frontal',
                    'Lifting complet' => 'Lifting complet',
                    'Lipofilling du visage' => 'Lipofilling du visage',
                    'Rhinoplastie simple' => 'Rhinoplastie simple',
                    'Rhinoplastie et septoplastie' => 'Rhinoplastie et septoplastie',
                    'Rhinoplastie ethnique' => 'Rhinoplastie ethnique',
                    'Blépharoplastie 2 paupiéres' => 'Blépharoplastie 2 paupiéres',
                    'Blépharoplastie 4 paupiéres' => 'Blépharoplastie 4 paupiéres',
                    'L\'implant capillaire par FUE' => 'L\'implant capillaire par FUE',
                    'Génioplastie' => 'Génioplastie',
                    'Génioplastie d\'avancement' => 'Génioplastie d\'avancement',
                    'Otoplastie' => 'Otoplastie',
                    'Augmentation des lèvres' => 'Augmentation des lèvres',
                    'Liposuccion une seule zone (ventre...)' => 'Liposuccion une seule zone (ventre...)',
                    'Liposuccion sur une petite zone (double menton...)' => 'Liposuccion sur une petite zone (double menton...)',
                    'Liposuccion double menton + mini lifting' => 'Liposuccion double menton + mini lifting',
                    'Liposuccion moyenne (sur 3 zones et plus)' => 'Liposuccion moyenne (sur 3 zones et plus)',
                    'Liposuccion complète (plus de 10 zones)' => 'Liposuccion complète (plus de 10 zones)',
                    'Abdominoplastie' => 'Abdominoplastie',
                    'Abdominoplastie + Liposuccion moyenne' => 'Abdominoplastie + Liposuccion moyenne',
                    'Lifting des bras' => 'Lifting des bras',
                    'Augmentation des fesses par implants fessiers' => 'Augmentation des fesses par implants fessiers',
                    'Augmentation des fesses par lipofilling' => 'Augmentation des fesses par lipofilling',
                    'Liposuccion moyenne + Lipofilling des seins' => 'Liposuccion moyenne + Lipofilling des seins',
                    'Liposuccion moyenne + Lipofilling des fesses' => 'Liposuccion moyenne + Lipofilling des fesses',
                    'Lifting des cuisses' => 'Lifting des cuisses',
                    'Nymphoplastie (réduction des lèvres vaginale)' => 'Nymphoplastie (réduction des lèvres vaginale)',
                    'Pénoplastie d\'élargissement (élargissement du pénis)' => 'Pénoplastie d\'élargissement (élargissement du pénis)',
                    'Pénoplastie d\'allongement (allongement du pénis)' => 'Pénoplastie d\'allongement (allongement du pénis)',
                    'Prothèse totale du genou' => 'Prothèse totale du genou',
                    'Hernie discale' => 'Hernie discale',
                    'Prothèse totale de la hanche' => 'Prothèse totale de la hanche',
                    'Hallux Valgus' => 'Hallux Valgus',
                    'Syndrome du canal carpien' => 'Syndrome du canal carpien',
                    'Anneau gastrique' => 'Anneau gastrique',
                    'Sleeve gastrectomie' => 'Sleeve gastrectomie',
                    'Bypass' => 'Bypass',
                    'Greffe Capillaire' => 'Greffe Capillaire',
                    'Epilation Laser' => 'Epilation Laser',
                    'Insémination artificielle' => 'Insémination artificielle',
                    'Fécondation in vitro' => 'Fécondation in vitro',
                    'Biopsie testiculaire' => 'Biopsie testiculaire',
                    'Implant dentaire' => 'Implant dentaire',
                    'Pose de facette dentaire' => 'Pose de facette dentaire',
                    'Blanchiment dentaire' => 'Blanchiment dentaire',
                    'Lasik (les 2 yeux)' => 'Lasik (les 2 yeux)',
                    'Laser PKR (les 2 yeux)' => 'Laser PKR (les 2 yeux)',
                ],
            ))
            ->add('autreDetails', TextType::class, array(
                'attr' => array(
                    'placeholder' => 'Autre Details',
                    'class' => 'form-control tm-form-field input-no-borders',
                    'style'=> 'display:none;'
                ),
                'required' => false,
                'label' => false,
            ))
            ->add('rappel', TimeType::class, array(
                'attr' => array(
                    'placeholder' => 'Temps rappel',
                    'class' => 'form-control tm-form-field input-no-borders timepicker',
                ),
                'widget' => 'single_text',
                'label' => false,
            ))
            ->add('moyenRappel', ChoiceType::class, array(
                'attr' => array(
                    'placeholder' => 'moyenRappel',
                    'class' => 'form-control tm-form-field input-no-borders',
                ),
                'label' => false,
                'choices'  => [
                    'Telephone' => 'Telephone',
                    'What\'s App' => 'What\'s App',
                    'Viber' => 'Viber',
                    'Facebook' => 'Facebook',
                ],
            ))
            ->add('commentaires', TextareaType::class, array(
                'attr' => array(
                    'placeholder' => 'commentaires',
                    'class' => 'form-control tm-form-field input-no-borders',
                ),
                'label' => false,
            ))
            ->add('save',  SubmitType::class, array(
                'label' => 'translate.form_save',
                "attr" => array('class' => 'tm-btn1 tm-reverse'),
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Devis::class,
        ));
    }
}