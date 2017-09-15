<?php
/**
 * Created by PhpStorm.
 * User: matth
 * Date: 15.09.2017
 * Time: 10:48
 */

namespace AppBundle\Controller;

use AppBundle\Entity\Contact;
use AppBundle\Form\ContactType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class ContactController extends Controller
{
    /**
     * @Route("/contactForm/new")
     */
    public function newAction(Request $request)
    {
        $contact = new Contact();

        $form = $this->createForm(ContactType::class, $contact);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($contact);
            $em->flush();

            return $this->redirectToRoute('show');
        }

        return $this->render('contactForm/new.html.twig', array(
            'form' => $form->createView()
        ));
    }
    /**
     * @Route("/contactForm",
     *     name = "show")
     */
    public function showAction()
    {
        return $this->render('contactForm/show.html.twig', ['content' => 'test']);
    }
}