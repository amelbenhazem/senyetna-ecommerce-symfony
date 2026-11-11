<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ShopDetailsController extends AbstractController
{
    #[Route('/shop/details', name: 'app_shop_details')]
    public function index(): Response
    {
        return $this->render('shop_details/index.html.twig');
    }
}
