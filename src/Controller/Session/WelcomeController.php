<?php

namespace App\Controller\Session;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WelcomeController extends AbstractController {
    #[Route('/', name: 'app.welcome')]
    public function index(): Response {
        return $this->render('welcome.html.twig');
    }
}
