<?php

namespace App\Controller;

use App\Entity\Jeu;
use App\Entity\Scenario;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ScenarioController extends AbstractController
{
    /**
     * @Route("/{id}", name="scenarios")
     */
    public function index(Jeu $jeu)
    {
        return $this->render('scenario/index.html.twig', [
            'jeu' => $jeu,
            'scenarios' => $jeu->getScenarios(),
        ]);
    }
}
