<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PostScenarioController extends AbstractController
{
    /**
     * @Route("/post/scenario", name="post_scenario")
     */
    public function index()
    {
        return $this->render('post_scenario/index.html.twig', [
            'controller_name' => 'PostScenarioController',
        ]);
    }
}
