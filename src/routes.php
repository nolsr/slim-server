<?php

use App\Controllers\UserController;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Routing\RouteCollectorProxy;
use Slim\App;

return function (App $app) {
    $app->group('/api', function (RouteCollectorProxy $apiRoutes) {
        $apiRoutes->get('/test', function (Request $request, Response $response, array $args) {
            $response->getBody()->write("test route works");
            return $response;
        });

        $apiRoutes->group('/users', function (RouteCollectorProxy $userRoutes) {
            $userRoutes->get('/', UserController::class . ':login');
        });
    });
};
