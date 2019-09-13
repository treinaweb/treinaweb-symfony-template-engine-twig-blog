<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class PostController
{
    /**
     * @Route("/post", name="post")
     */
    public function index(\Twig_Environment $twig)
    {
        $content = $twig->render('post/index.html.twig');

        return new Response($content);
    }
}
