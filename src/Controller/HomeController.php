<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     * @param ArticleRepository $articleRepository
     * @return Response
     */
    public function home(ArticleRepository $articleRepository)
    {

        return $this->render('index.html.twig', [
            "articles" => $articleRepository->findBy(["published" => 1])
        ]);
    }

    /**
     * @Route("/params/{name}", name="name", defaults={"name": "Patrik"},
     *     methods={"GET"})
     */
    public function params(string $name)
    {
        return new Response("Bonjour monsieur : $name");
    }
}