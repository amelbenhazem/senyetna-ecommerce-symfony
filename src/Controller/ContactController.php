<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ContactController extends AbstractController
{

    #[Route('/contact', name: 'app_contact')]

    public function index(Request $request): Response
    {
        // Create the form
        $form = $this->createFormBuilder()
            ->add('name', TextType::class, ['label' => 'Your Name'])
            ->add('email', EmailType::class, ['label' => 'Your Email'])
            ->add('message', TextareaType::class, ['label' => 'Your Message'])
            ->add('submit', SubmitType::class, ['label' => 'Send Message'])
            ->getForm();

        // Handle form submission
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $this->addFlash('success', 'Message enregistré (démo : l’envoi d’e-mail n’est pas activé).');
        }

        return $this->render('contact/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}

