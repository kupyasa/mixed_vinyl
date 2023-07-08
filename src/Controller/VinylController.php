<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\UnicodeString;

class VinylController extends AbstractController
{
    #[Route('/', name: 'app_vinyl')]
    public function index(): Response
    {
        
        return $this->render('vinyl/homepage.html.twig',[
            'title' => 'PB & Jams'
        ]);
    }

    #[Route('/browse/{slug}', name: 'browse')]
    public function browse(string $slug = null): Response
    {
        if ($slug) {
            $title = 'Genre : ' . strtoupper(str_replace('-', ' ', $slug));
        } else {
            $title = "All Genres";
        }

        return new Response($title);
    }
}
