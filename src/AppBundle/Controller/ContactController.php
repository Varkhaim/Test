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
use Symfony\Component\HttpFoundation\Response;


class ContactFormController extends Controller
{
    /**
     * @Route("/contactForm/new")
     */
    public function newAction()
    {
        $contact = new Contact();

        $form = $this->createForm(ContactType::class, $contact);

        return $this->render('contactForm/show.html.twig', array(
            'form' => $form->createView()
        ));
    }
    /**
     * @Route("/contactForm")
     */
    public function showAction()
    {
        return $this->render('contactForm/show.html.twig', ['content' => 'test']);
    }
}