<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogDeatilsController extends AbstractController
{
    #[Route('/blog/details', name: 'app_blog_deatils')]
    #[Route('/blog/deatils')]
    public function index(): Response
    {
        return $this->render('blog_deatils/index.html.twig', [
            'page_title' => 'Senyetna | Article',
            'current_language' => 'Français',
            'social_links' => [
                'facebook' => '#',
                'twitter' => '#',
                'linkedin' => '#',
                'pinterest' => '#',
            ],
            'wishlist_count' => 0,
            'cart_count' => 0,
            'total_price' => 0,
            'contact_email' => 'contact@senyetna.local',
        ]);
    }
}
