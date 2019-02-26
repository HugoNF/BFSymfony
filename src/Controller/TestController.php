<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    /**
     * @Route("/test", name="test")
     */
    public function index()
    {
        return $this->render('index.html.twig', [
            'controller_name' => 'Il est vrai | TestController',
        ]);
    }

    /**
     * @Route("/test/message", name="message")
     */
    public function indexmessage()
    {
        $message ="couscous ayayaya";
        return $this->render('indexmessage.html.twig', [
            'title' => 'Page Message',
            'message' => $message
        ]);
    }
}
