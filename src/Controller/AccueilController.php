<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AccueilController extends Controller
{
    /**
     * @Route("/", name="accueil")
     */
    public function accueil()
    {
        return new Response("Nous voici sur la page d'accueil");
    }

    /**
     * @Route("/news/{slug}", name="article1")
     */
    public function news($slug)
    {
        return new Response(sprintf('Voici un article sur %s', $slug));
    }
}
