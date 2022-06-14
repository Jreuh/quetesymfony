<?php

namespace App\Controller;

use App\Entity\Articles;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class PageController extends AbstractController
{
    /**
     * @Route("/page", name="app_page")
     */
    public function index(): Response
    {
        return $this->render('page/index.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }
    /**
     * @Route("/home", name="home")
     */
    public function home(): Response
    {
        $title = "Bienvenue";
        return $this->render('page/home.html.twig', [
            'controller_name' => 'HomeController',
            'title' => 'Bienvenue',

        ]);
    }
    /**
     * @Route("/articles", name="articles")
     */
    public function articles(ManagerRegistry $doctrine): Response
    {
        $articles = $doctrine->getRepository(Articles::class)->findAll();


        return $this->render('page/articles.html.twig', [
            'controller_name' => 'articlesController',
            'articles' => $articles


        ]);
    }
}
