<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloAction
{
    /**
     * @Route("/hello/{name}")
     */
    public function __invoke(string $name)
    {
        return new Response(sprintf('Hello, %s', $name));
    }
}
