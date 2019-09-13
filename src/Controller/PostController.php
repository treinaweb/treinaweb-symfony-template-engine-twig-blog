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
        //buscar no banco de dados

        $content = $twig->render('post/index.html.twig', [
            'curso' => 'Twig',
            'escola' => 'Treinaweb',
            'post'   => [
                'titulo' => 'meu post',
                'conteudo' => 'meu conteudo',
                'data'      => '10/09/2019'
            ],
            'codigo'    => '<script>alert("teste sendo exibido")</script>'
        ]);

        return new Response($content);
    }
}
