<?php

namespace App\controller;
use symfony\component\HttpFoundation\Response;
use symfony\component\routing\Annotation\Route;

class Helloworldcontroller
{
    /**
     * @Route("/hello-world"s)
     */
    public function sayHello()
    {
        return new Response{
            'Hello, World!'
        };
    }
}