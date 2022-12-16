<?php

namespace App\Controller;

use App\Entity\Jeu;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route("/jeu")
 */

class JeuController extends AbstractController
{
    /**
     * @Route("/", name="jeux_index")
     */
    public function index()
    {
        $jeux = $this->getDoctrine()
                ->getRepository(Jeu::class)
                ->getAll();

        return $this->render('jeu/index.html.twig', [
            'jeux' => $jeux,
        ]);
    }

    /**
     * @Route("/{id}", name="jeu_show", methods="GET")
     */
    public function show(Jeu $jeu): Response {
        return $this->render('jeu/show.html.twig', ['jeu' => $jeu]);
    }
}
