<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/index", name="index")
     */
    public function index(): Response
    {
        return $this->render('index.html.twig', [
            'title' => 'index',
        ]);
    }
        /**
     * @Route("/home", name="home")
     */
    public function home(): Response
    {
        return $this->render('HomeController.php', [
            'home' => 'HomeController',
        ]);
    }
}
