<?php

use Psr\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

namespace App\Controllers;

class UserContainer
{
    private $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function login(Request $request, Response $response, array $args)
    {
        $response->getBody()->write('WARUM FUNKTIONIERT DIESER SHCUBERUCVJME NICHT');
        return $response; 
    }
}
