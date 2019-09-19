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
            'curso' => 'Java',
            'escola' => 'Treinaweb',
            'posts'   => [
                0 => [
                    'titulo' => 'meu post1',
                    'conteudo' => 'meu conteudo1',
                    'data'      => '11/09/2019',
                    'tipo'  => 'artigo'
                ],
                1 => [
                    'titulo' => 'meu post2',
                    'conteudo' => 'meu conteudo2',
                    'data'      => '12/09/2019',
                    'tipo'  => 'video'
                ],
                2 => [
                    'titulo' => 'meu post3',
                    'conteudo' => 'meu conteudo3',
                    'data'      => '13/09/2019',
                    'tipo'  => 'artigo'
                ],
            ],
            'codigo'    => '<script>alert("teste sendo exibido")</script>',
            'numeros'   => [2, 4, 5, 8, 1, 2, 0],
            'mobile'    => false
        ]);

        return new Response($content);
    }

    /**
     * @Route("/post/1", name="post_show")
     */
    public function show(\Twig_Environment $twig)
    {
        $content = $twig->render('post/show.html.twig');

        return new Response($content);
    }
}
