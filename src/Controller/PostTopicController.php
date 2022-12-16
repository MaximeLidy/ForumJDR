<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PostTopicController extends AbstractController
{
    /**
     * @Route("/post/topic", name="post_topic")
     */
    public function index()
    {
        return $this->render('post_topic/index.html.twig', [
            'controller_name' => 'PostTopicController',
        ]);
    }
}
