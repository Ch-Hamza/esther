<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Category;
use AppBundle\Entity\Chirurgie;
use AppBundle\Entity\Devis;
use AppBundle\Entity\MailingList;
use AppBundle\Entity\Message;
use AppBundle\Form\DevisType;
use AppBundle\Form\MailingListType;
use AppBundle\Form\MessageType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage_nl", defaults={"_locale":"%locale%"})
     * @Route("/{_locale}/", name="homepage", requirements={"_locale" = "%app.locales%"})
     */
    public function indexAction(Request $request, \Swift_Mailer $mailer)
    {
        $message = new Message();
        $form = $this->get('form.factory')->create(MessageType::class, $message);
        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($message);
            $em->flush();
            return $this->redirectToRoute('homepage');
        }

        $ml = new MailingList();
        $form1 = $this->get('form.factory')->create(MailingListType::class, $ml);
        if ($request->isMethod('POST') && $form1->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($ml);
            $em->flush();
            return $this->redirectToRoute('homepage');
        }

        $devis = new Devis();
        $form2 = $this->get('form.factory')->create(DevisType::class, $devis);
        if ($request->isMethod('POST') && $form2->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($devis);
            $em->flush();

            $message = (new \Swift_Message('Test Email'))
                ->setFrom(mailer_user)
                ->setTo('fathallah.ghassen97@gmail.com')
                ->setBody(
                    $this->renderView(
                        'Emails/devis.html.twig',
                        [
                            'id' => $devis->getId(),
                            'prenom' => $devis->getPrenom(),
                            'nom' => $devis->getNom(),
                            'email' => $devis->getEmail(),
                            'telephone' => $devis->getTelephone(),
                            'sexe' => $devis->getSexe(),
                            'pays' => $devis->getPays(),
                            'type_chirurgie' => $devis->getTypeChirurgie(),
                            'chirurgie' => $devis->getChirurgie(),
                            'autre_details' => $devis->getAutreDetails(),
                            'rappel' => $devis->getRappel(),
                            'moyen_rappel' => $devis->getMoyenRappel(),
                            'commentaires' => $devis->getCommentaires(),
                            'age' => $devis->getAge(),
                        ]
                    ),
                    'text/html'
                )
            ;
            $mailer->send($message);

            return $this->redirectToRoute('homepage');
        }

        $chirurgies = $this->getDoctrine()->getManager()->getRepository(Chirurgie::class)->findAll();
        return $this->render('default/index.html.twig' , array(
            'chirurgies' => $chirurgies,
            'form' => $form->createView(),
            'form1' => $form1->createView(),
            'form2' => $form2->createView(),
        ));
    }


    /**
     * @Route("/", name="homepage_nl", defaults={"_locale":"%locale%"})
     */
    public function index1(Request $request, \Swift_Mailer $mailer)
    {
            return $this->redirectToRoute('homepage');
    }


    /**
     * @Route("/{_locale}/chirurgies/{id}", name="chirurgie_index", requirements={"_locale" = "%app.locales%"})
     */
    public function chirurgieAction($id)
    {
        $chirurgies = $this->getDoctrine()->getManager()->getRepository(Chirurgie::class)->findAll();
        $chirurgie = $this->getDoctrine()->getManager()->getRepository(Chirurgie::class)->findOneBy(['id' => $id]);
        return $this->render('default/chirurgie/chirurgie_details.html.twig' , array(
            'chirurgie' => $chirurgie,
            'chirurgies' => $chirurgies,
        ));
    }

    /**
     * @Route("/{_locale}/chirurgies_details/{id}", name="chirurgie_details_index", requirements={"_locale" = "%app.locales%"})
     */
    public function chirurgie_detailsAction($id)
    {
        $chirurgies = $this->getDoctrine()->getManager()->getRepository(Chirurgie::class)->findAll();
        $chirurgie = $this->getDoctrine()->getManager()->getRepository(Category::class)->findOneBy(['id' => $id]);
        return $this->render('default/chirurgie/chirurgie.html.twig' , array(
            'chirurgie' => $chirurgie,
            'chirurgies' => $chirurgies,
        ));
    }

    /**
     * @Route("/{_locale}/procedure", name="procedure_index", requirements={"_locale" = "%app.locales%"})
     */
    public function procedureAction()
    {
        $chirurgies = $this->getDoctrine()->getManager()->getRepository(Chirurgie::class)->findAll();
        return $this->render('default/sejour/procedure.html.twig' , array(
            'chirurgies' => $chirurgies,
        ));
    }

    /**
     * @Route("/{_locale}/clinique", name="clinique_index", requirements={"_locale" = "%app.locales%"})
     */
    public function cliniqueAction()
    {
        $chirurgies = $this->getDoctrine()->getManager()->getRepository(Chirurgie::class)->findAll();
        return $this->render('default/sejour/clinique.html.twig' , array(
            'chirurgies' => $chirurgies,
        ));
    }

    /**
     * @Route("/{_locale}/hotel", name="hotel_index", requirements={"_locale" = "%app.locales%"})
     */
    public function hotelAction()
    {
        $chirurgies = $this->getDoctrine()->getManager()->getRepository(Chirurgie::class)->findAll();
        return $this->render('default/sejour/hotel.html.twig' , array(
            'chirurgies' => $chirurgies,
        ));
    }

    /**
     * @Route("/{_locale}/tarifs", name="tarifs_index", requirements={"_locale" = "%app.locales%"})
     */
    public function tarifsAction()
    {
        $chirurgies = $this->getDoctrine()->getManager()->getRepository(Chirurgie::class)->findAll();
        return $this->render('default/tarifs.html.twig' , array(
            'chirurgies' => $chirurgies,
        ));
    }

    /**
     * @Route("/{_locale}/blog", name="blog_index", requirements={"_locale" = "%app.locales%"})
     */
    public function blogAction()
    {
        $chirurgies = $this->getDoctrine()->getManager()->getRepository(Chirurgie::class)->findAll();
        return $this->render('default/blog/blog_list.html.twig' , array(
            'chirurgies' => $chirurgies,
        ));
    }

    /**
     * @Route("/{_locale}/blog/eshter-leader", name="blog_details_index", requirements={"_locale" = "%app.locales%"})
     */
    public function blog1Action()
    {
        $chirurgies = $this->getDoctrine()->getManager()->getRepository(Chirurgie::class)->findAll();
        return $this->render('default/blog/blog_details.html.twig' , array(
            'chirurgies' => $chirurgies,
        ));
    }

    /**
     * @Route("/{_locale}/blog/garanties", name="blog_details1_index", requirements={"_locale" = "%app.locales%"})
     */
    public function blog2Action()
    {
        $chirurgies = $this->getDoctrine()->getManager()->getRepository(Chirurgie::class)->findAll();
        return $this->render('default/blog/blog_details1.html.twig' , array(
            'chirurgies' => $chirurgies,
        ));
    }

    /**
     * @Route("/{_locale}/medecins/dr-zied-mabrouki", name="first-medecin", requirements={"_locale" = "%app.locales%"})
     */
    public function med1Action()
    {
        $chirurgies = $this->getDoctrine()->getManager()->getRepository(Chirurgie::class)->findAll();
        return $this->render('default/medecin/medecin1.html.twig' , array(
            'chirurgies' => $chirurgies,
        ));
    }

    /**
     * @Route("/{_locale}/medecins/dr-najoua-ben-slimen", name="second-medecin", requirements={"_locale" = "%app.locales%"})
    */
    public function med2Action()
    {
        $chirurgies = $this->getDoctrine()->getManager()->getRepository(Chirurgie::class)->findAll();
        return $this->render('default/medecin/medecin2.html.twig' , array(
            'chirurgies' => $chirurgies,
        ));
    }

    /**
     * @Route("/{_locale}/medecins/dr-amine-masmoudi", name="third-medecin", requirements={"_locale" = "%app.locales%"})
     */
    public function med3Action()
    {
        $chirurgies = $this->getDoctrine()->getManager()->getRepository(Chirurgie::class)->findAll();
        return $this->render('default/medecin/medecin3.html.twig' , array(
            'chirurgies' => $chirurgies,
        ));
    }

    /**
     * @Route("/{_locale}/medecins/dr-chedi-bali", name="fourth-medecin", requirements={"_locale" = "%app.locales%"})
     */
    public function med4Action()
    {
        $chirurgies = $this->getDoctrine()->getManager()->getRepository(Chirurgie::class)->findAll();
        return $this->render('default/medecin/medecin4.html.twig' , array(
            'chirurgies' => $chirurgies,
        ));
    }

    /**
     * @Route("/{_locale}/medecins/dr-tahar-djemal", name="fifth-medecin", requirements={"_locale" = "%app.locales%"})
     */
    public function med5Action()
    {
        $chirurgies = $this->getDoctrine()->getManager()->getRepository(Chirurgie::class)->findAll();
        return $this->render('default/medecin/medecin5.html.twig' , array(
            'chirurgies' => $chirurgies,
        ));
    }

    /**
     * @Route("/{_locale}/medecins/dr-soumoud-shimi", name="sixth-medecin", requirements={"_locale" = "%app.locales%"})
     */
    public function med6Action()
    {
        $chirurgies = $this->getDoctrine()->getManager()->getRepository(Chirurgie::class)->findAll();
        return $this->render('default/medecin/medecin6.html.twig' , array(
            'chirurgies' => $chirurgies,
        ));
    }

    /**
     * @Route("/{_locale}/galerie", name="galerie_index", requirements={"_locale" = "%app.locales%"})
     */
    public function galerieAction()
    {
        $chirurgies = $this->getDoctrine()->getManager()->getRepository(Chirurgie::class)->findAll();
        return $this->render('default/galerie.html.twig' , array(
            'chirurgies' => $chirurgies,
        ));
    }
}
