<?php

namespace App\Controller;

use App\Entity\Jeu;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class CreationScenarioController extends AbstractController
{
    /**
     * @Route("/screations", name="creations")
     */
    public function index()
    {
        $jeux = $this->getDoctrine()
                ->getRepository(Jeu::class)
                ->getAll();

        return $this->render('creation_scenario/index.html.twig', [
            'jeux' => $jeux,
        ]);
    }
}
