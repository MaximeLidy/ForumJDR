<?php

namespace App\Controller;

use App\Entity\Jeu;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class ForumDiscussionController extends AbstractController
{
    /**
     * @Route("/discussions", name="discussions")
     */
    public function index()
    {
        $jeux = $this->getDoctrine()
                ->getRepository(Jeu::class)
                ->getAll();

        return $this->render('forum_discussion/index.html.twig', [
            'jeux' => $jeux,
        ]);
    }
}
