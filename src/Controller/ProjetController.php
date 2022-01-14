<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProjetController extends AbstractController
{
    /**
     * @Route("/index", name="index")
     */
    public function index(): Response
    {
        return $this->render('index.html.twig', [
            'index' => 'index',
        ]);
    }
       /**
     * @Route("/test", name="test")
     */
    public function test(): Response
    {
        return $this->render('TEST.html.twig', [
            'test' => 'test',
        ]);
    }
}
