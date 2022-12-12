<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MyController extends AbstractController
{
    #[Route('/', name: 'app_my_first')]
    public function hello(): Response
    {
        return new Response("Hello World");
    }

    #[Route('/my/{id}', name: 'app_my')]
    public function index($id): Response
    {
        return $this->render('my/index.html.twig', [
            'id' => $id,
            'controller_name' => 'MyController',
        ]);
    }
}
