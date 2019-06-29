<?php

namespace App\Core;

use App\Core\Request\Request;
use App\Core\Response\Response;
use App\Core\Router\Exceptions\RouteNotFoundException;
use App\Core\Router\Router;

class Kernel
{
    public function handle(Request $request): Response
    {
        $route = new Router();
        try {
            $action = $route->getAction($request->server('REQUEST_URI'));
            $controller = new $action[0]($request);
            $response = $controller->{$action[1]}();
        } catch (\Exception $e) {
            if ($e instanceof RouteNotFoundException) {
                return new Response('Страницы не существует', 404);
            } else {
                return new Response('Ошибка сервера!', 500);
            }
        }

        return $response;
    }
}
