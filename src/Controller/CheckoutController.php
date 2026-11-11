<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CheckoutController extends AbstractController
{
    #[Route('/checkout', name: 'app_checkout')]
    public function index(): Response
    {
        return $this->render('checkout/index.html.twig');
    }

    #[Route('/checkout/process', name: 'checkout_process', methods: ['GET', 'POST'])]
    public function processCheckout(Request $request): Response
    {
        if ($request->isMethod('POST')) {
            $this->addFlash(
                'success',
                'Commande reçue (démo académique : le paiement n’est pas encore branché).'
            );
        }

        return $this->redirectToRoute('order_confirmation');
    }

    #[Route('/order/confirmation', name: 'order_confirmation')]
    public function orderConfirmation(): Response
    {
        return $this->render('checkout/order_confirmation.html.twig');
    }
}
