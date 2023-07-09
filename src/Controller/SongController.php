<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SongController extends AbstractController
{
    #[Route('/api/songs/{id<\d+>}', name: 'app_song_getsong',methods:['GET'])]
    public function index(int $id,LoggerInterface $logger): Response
    {
        $song = [
            'id' => $id,
            'song' => "Are We Moving Too Fast?",
            'artist' => "Malibu '92",
            'url' => 'http://commondatastorage.googleapis.com/codeskulptor-assets/Collision8-Bit.ogg'
        ];
        $logger->info('Returning API response for song {song}', [
            'song' => $id,
        ]);

        return $this->json($song);
    }
}
