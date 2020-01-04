<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class ArticleController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function index()
    {
        //   return new Response("Hello", Response::HTTP_OK);

        $articles = ['Article 1', 'Article 2', 'Article 3'];

        return $this->render('articles/index.html.twig', array('articles' => $articles));
    }

}