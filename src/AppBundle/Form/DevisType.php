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
                    'placeholder' => 'translate.devis1',
                    'class' => 'form-control tm-form-field input-no-borders',
                ),
                'label' => false,
            ))
            ->add('prenom', TextType::class, array(
                'attr' => array(
                    'placeholder' => 'translate.devis2',
                    'class' => 'form-control tm-form-field input-no-borders',
                ),
                'label' => false,
            ))
            ->add('email', EmailType::class, array(
                'attr' => array(
                    'placeholder' => 'translate.devis3',
                    'class' => 'form-control tm-form-field input-no-borders',
                ),
                'label' => false,
            ))
            ->add('telephone', TextType::class, array(
                'attr' => array(
                    'placeholder' => 'translate.devis4',
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
                    'placeholder' => 'translate.devis5',
                    'class' => 'form-control tm-form-field input-no-borders',
                ),
                'label' => false,
            ))
            ->add('sexe', ChoiceType::class, array(
                'attr' => array(
                    'placeholder' => 'translate.devis6',
                    'class' => 'form-control tm-form-field input-no-borders',
                ),
                'label' => false,
                'choices'  => [
                    'translate.devis7' => 'Madame',
                    'translate.devis8' => 'Mademoiselle',
                    'translate.devis9' => 'Monsieur',
                ],
            ))
            ->add('pays', TextType::class, array(
                'attr' => array(
                    'placeholder' => 'translate.devis10',
                    'class' => 'form-control tm-form-field input-no-borders',
                ),
                'label' => false,
            ))
            ->add('anticidMedicauxExist', ChoiceType::class, array(
                'attr' => array(
                    'placeholder' => 'translate.devis11',
                    'class' => 'form-control tm-form-field input-no-borders',
                ),
                'label' => false,
                'choices'  => [
                    'translate.ant' => "translate.ant",
                    'translate.oui' => 'Oui',
                    'translate.non' => 'Non',
                ],
            ))
            ->add('anticidMedicaux', TextareaType::class, array(
                'attr' => array(
                    'placeholder' => 'translate.devis85',
                    'class' => 'form-control tm-form-field input-no-borders',
                ),
                'label' => false,
                'required' => false,
            ))

            ->add('typeChirurgie', ChoiceType::class, array(
                'attr' => array(
                    'placeholder' => 'translate.devis11',
                    'class' => 'form-control tm-form-field input-no-borders',
                ),
                'label' => false,
                'choices'  => [
                    'translate.devis12' => 'chirurgie des seins',
                    'translate.devis13' => 'chirurgie du visage',
                    'translate.devis14' => 'chirurgie de la silhouette',
                    'translate.devis15' => 'chirurgie intime',
                    'translate.devis16' => 'chirurgie orthopédique',
                    'translate.devis17' => 'chirurgie de l\'obésité',
                    'translate.devis18' => 'chirurgie capillaire',
                    'translate.devis19' => 'chirurgie de l\'infertilité',
                    'translate.devis20' => 'chirurgie dentaire',
                    'translate.devis21' => 'chirurgie ophtalmologie',
                    'translate.devis22' => 'Autre',
                ],
            ))
            ->add('chirurgie', ChoiceType::class, array(
                'attr' => array(
                    'placeholder' => 'Select One',
                    'class' => 'form-control tm-form-field input-no-borders',
                ),
                'label' => false,
                'choices' => [
                    'translate.devis23' => 'Augmentation mammaire par prothèse mammaires rondes',
                    'translate.devis24' => 'Augmentation mammaire par prothèse mammaires anatomiques',
                    'translate.devis25' => 'Augmentation mammaire par lipofilling',
                    'translate.devis26' => 'Lifting mammaire',
                    'translate.devis27' => 'Réduction mammaire',
                    'translate.devis28' => 'Gynécomastie',
                    'translate.devis29' => 'Lifting mammaire avec prothèses',
                    'translate.devis30' => 'Lifting cervico-facial',
                    'translate.devis31' => 'Lifting malaire',
                    'translate.devis32' => 'Lifting frontal',
                    'translate.devis33' => 'Lifting complet',
                    'translate.devis34' => 'Lipofilling du visage',
                    'translate.devis35' => 'Rhinoplastie simple',
                    'translate.devis36' => 'Rhinoplastie et septoplastie',
                    'translate.devis37' => 'Rhinoplastie ethnique',
                    'translate.devis38' => 'Blépharoplastie 2 paupiéres',
                    'translate.devis39' => 'Blépharoplastie 4 paupiéres',
                    'translate.devis40' => 'L\'implant capillaire par FUE',
                    'translate.devis41' => 'Génioplastie',
                    'translate.devis42' => 'Génioplastie d\'avancement',
                    'translate.devis43' => 'Otoplastie',
                    'translate.devis44' => 'Augmentation des lèvres',
                    'translate.devis45' => 'Liposuccion une seule zone (ventre...)',
                    'translate.devis46' => 'Liposuccion sur une petite zone (double menton...)',
                    'translate.devis47' => 'Liposuccion double menton + mini lifting',
                    'translate.devis48' => 'Liposuccion moyenne (sur 3 zones et plus)',
                    'translate.devis49' => 'Liposuccion complète (plus de 10 zones)',
                    'translate.devis50' => 'Abdominoplastie',
                    'translate.devis51' => 'Abdominoplastie + Liposuccion moyenne',
                    'translate.devis52' => 'Lifting des bras',
                    'translate.devis53' => 'Augmentation des fesses par implants fessiers',
                    'translate.devis54' => 'Augmentation des fesses par lipofilling',
                    'translate.devis55' => 'Liposuccion moyenne + Lipofilling des seins',
                    'translate.devis56' => 'Liposuccion moyenne + Lipofilling des fesses',
                    'translate.devis57' => 'Lifting des cuisses',
                    'translate.devis58' => 'Nymphoplastie (réduction des lèvres vaginale)',
                    'translate.devis59' => 'Pénoplastie d\'élargissement (élargissement du pénis)',
                    'translate.devis60' => 'Pénoplastie d\'allongement (allongement du pénis)',
                    'translate.devis61' => 'Prothèse totale du genou',
                    'translate.devis62' => 'Hernie discale',
                    'translate.devis63' => 'Prothèse totale de la hanche',
                    'translate.devis64' => 'Hallux Valgus',
                    'translate.devis65' => 'Syndrome du canal carpien',
                    'translate.devis66' => 'Anneau gastrique',
                    'translate.devis67' => 'Sleeve gastrectomie',
                    'translate.devis68' => 'Bypass',
                    'translate.devis69' => 'Greffe Capillaire',
                    'translate.devis70' => 'Epilation Laser',
                    'translate.devis71' => 'Insémination artificielle',
                    'translate.devis72' => 'Fécondation in vitro',
                    'translate.devis73' => 'Biopsie testiculaire',
                    'translate.devis74' => 'Implant dentaire',
                    'translate.devis75' => 'Pose de facette dentaire',
                    'translate.devis76' => 'Blanchiment dentaire',
                    'translate.devis77' => 'Lasik (les 2 yeux)',
                    'translate.devis78' => 'Laser PKR (les 2 yeux)',
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
                    'translate.devis79' => 'Telephone',
                    'translate.devis80' => 'What\'s App',
                    'translate.devis81' => 'Viber',
                    'translate.devis82' => 'Facebook',
                ],
            ))
            ->add('commentaires', TextareaType::class, array(
                'attr' => array(
                    'placeholder' => 'translate.devis83',
                    'class' => 'form-control tm-form-field input-no-borders',
                ),
                'label' => false,
                'required' => false,
            ))
            ->add('save',  SubmitType::class, array(
                'label' => 'translate.devis84',
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