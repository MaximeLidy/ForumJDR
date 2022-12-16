<?php

namespace App\Controller;

use App\Entity\Jeu;
use App\Entity\Topic;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TopicController extends AbstractController
{
    /**
     * @Route("/{id}", name="topics")
     */
    public function index(Jeu $jeu)
    {
        return $this->render('topic/index.html.twig', [
            'jeu' => $jeu,
            'topics' => $jeu->getTopics(),
        ]);
    }
}
