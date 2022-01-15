<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProjetController extends AbstractController
{
    /**
     * @Route("/2index", name="2index")
     */
    public function ndex(): Response
    {
        return $this->render('2index.html.twig', [
            '2index' => '2index',
        ]);
    }
    /**
     * @Route("/index.html.twig", name="index")
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
        /**
     * @Route("/cv.html.twig", name="cv")
     */
    public function cv(): Response
    {
        return $this->render('cv.html.twig', [
            'cv' => 'cv',
        ]);
    }
        /**
     * @Route("/Portfolio.html.twig", name="Portfolio")
     */
    public function Portfolio(): Response
    {
        return $this->render('Portfolio.html.twig', [
            'Portfolio' => 'Portfolio',
        ]);
    }
}
