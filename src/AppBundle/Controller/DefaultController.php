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
     * * @Route("/", name="homepage_nl", defaults={"_locale":"%locale%"})
     * @Route("/{_locale}/", name="homepage", requirements={"_locale" = "%app.locales%"})
     */
    public function indexAction(Request $request)
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
     * @Route("/chirurgies/{id}", name="chirurgie_index")
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
     * @Route("/chirurgies_details/{id}", name="chirurgie_details_index")
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
     * @Route("/procedure", name="procedure_index")
     */
    public function procedureAction()
    {
        $chirurgies = $this->getDoctrine()->getManager()->getRepository(Chirurgie::class)->findAll();
        return $this->render('default/sejour/procedure.html.twig' , array(
            'chirurgies' => $chirurgies,
        ));
    }

    /**
     * @Route("/clinique", name="clinique_index")
     */
    public function cliniqueAction()
    {
        $chirurgies = $this->getDoctrine()->getManager()->getRepository(Chirurgie::class)->findAll();
        return $this->render('default/sejour/clinique.html.twig' , array(
            'chirurgies' => $chirurgies,
        ));
    }

    /**
     * @Route("/hotel", name="hotel_index")
     */
    public function hotelAction()
    {
        $chirurgies = $this->getDoctrine()->getManager()->getRepository(Chirurgie::class)->findAll();
        return $this->render('default/sejour/hotel.html.twig' , array(
            'chirurgies' => $chirurgies,
        ));
    }

    /**
     * @Route("/tarifs", name="tarifs_index")
     */
    public function tarifsAction()
    {
        $chirurgies = $this->getDoctrine()->getManager()->getRepository(Chirurgie::class)->findAll();
        return $this->render('default/tarifs.html.twig' , array(
            'chirurgies' => $chirurgies,
        ));
    }

    /**
     * @Route("/blog", name="blog_index")
     */
    public function blogAction()
    {
        $chirurgies = $this->getDoctrine()->getManager()->getRepository(Chirurgie::class)->findAll();
        return $this->render('default/blog/blog_list.html.twig' , array(
            'chirurgies' => $chirurgies,
        ));
    }

    /**
     * @Route("/blog/eshter-leader", name="blog_details_index")
     */
    public function blog1Action()
    {
        $chirurgies = $this->getDoctrine()->getManager()->getRepository(Chirurgie::class)->findAll();
        return $this->render('default/blog/blog_details.html.twig' , array(
            'chirurgies' => $chirurgies,
        ));
    }

    /**
     * @Route("/blog/garanties", name="blog_details1_index")
     */
    public function blog2Action()
    {
        $chirurgies = $this->getDoctrine()->getManager()->getRepository(Chirurgie::class)->findAll();
        return $this->render('default/blog/blog_details1.html.twig' , array(
            'chirurgies' => $chirurgies,
        ));
    }

    /**
     * @Route("/medecins/dr-zied-mabrouki", name="first-medecin")
     */
    public function med1Action()
    {
        $chirurgies = $this->getDoctrine()->getManager()->getRepository(Chirurgie::class)->findAll();
        return $this->render('default/medecin/medecin1.html.twig' , array(
            'chirurgies' => $chirurgies,
        ));
    }

    /**
 * @Route("/medecins/dr-najoua-ben-slimen", name="second-medecin")
 */
    public function med2Action()
    {
        $chirurgies = $this->getDoctrine()->getManager()->getRepository(Chirurgie::class)->findAll();
        return $this->render('default/medecin/medecin2.html.twig' , array(
            'chirurgies' => $chirurgies,
        ));
    }

    /**
     * @Route("/medecins/dr-amine-masmoudi", name="third-medecin")
     */
    public function med3Action()
    {
        $chirurgies = $this->getDoctrine()->getManager()->getRepository(Chirurgie::class)->findAll();
        return $this->render('default/medecin/medecin3.html.twig' , array(
            'chirurgies' => $chirurgies,
        ));
    }

    /**
     * @Route("/medecins/dr-chedi-bali", name="fourth-medecin")
     */
    public function med4Action()
    {
        $chirurgies = $this->getDoctrine()->getManager()->getRepository(Chirurgie::class)->findAll();
        return $this->render('default/medecin/medecin4.html.twig' , array(
            'chirurgies' => $chirurgies,
        ));
    }

    /**
     * @Route("/medecins/dr-tahar-djemal", name="fifth-medecin")
     */
    public function med5Action()
    {
        $chirurgies = $this->getDoctrine()->getManager()->getRepository(Chirurgie::class)->findAll();
        return $this->render('default/medecin/medecin5.html.twig' , array(
            'chirurgies' => $chirurgies,
        ));
    }
}
