<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class PostController
{
    /**
     * @Route("/post", name="post")
     */
    public function index()
    {
        return new Response('<h2>estou retrnando uma string diretamente</h2>');
    }
}
