<?php

namespace App\Core\Router;

use App\Core\Router\Exceptions\RouteNotFoundException;

class Router
{
    /**
     * @var array
     */
    private $config;

    public function __construct()
    {
        $this->config = require(dirname(__DIR__, 3).'/config/router.php');
    }

    /**
     * @throws RouteNotFoundException
     */
    public function getAction(string $uri): array
    {
        if (!isset($this->config[$uri])) {
            throw new RouteNotFoundException();
        }

        return $this->config[$uri];
    }
}
