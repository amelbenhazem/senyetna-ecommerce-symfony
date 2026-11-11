<?php

namespace App\Controller;

use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    #[Route('/', name: 'app_index')]
    #[Route('/index', name: 'app_index_legacy')]
    public function index(ProduitRepository $produitRepository): Response
    {
        $produits = $produitRepository->findAll();

        $categories = [
            ['name' => 'Fruits frais', 'image' => 'https://placehold.co/370x270/7fad39/fff?text=Fruits', 'link' => $this->generateUrl('shop_grid')],
            ['name' => 'Fruits secs', 'image' => 'https://placehold.co/370x270/88b04b/fff?text=Secs', 'link' => $this->generateUrl('shop_grid')],
            ['name' => 'Légumes', 'image' => 'https://placehold.co/370x270/5a8f2f/fff?text=Legumes', 'link' => $this->generateUrl('shop_grid')],
            ['name' => 'Boissons', 'image' => 'https://placehold.co/370x270/4c7a28/fff?text=Boissons', 'link' => $this->generateUrl('shop_grid')],
        ];

        return $this->render('index/index.html.twig', [
            'categories' => $categories,
            'produits' => $produits,
        ]);
    }

    #[Route('/shop', name: 'shop_grid')]
    public function shopGrid(): Response
    {
        return $this->redirectToRoute('app_produit_index');
    }
}
