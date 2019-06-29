<?php

namespace App\Core\ORM;

class EntityManager
{
    private static $instance;
    private $connection;

    private function __construct()
    {
    }

    public function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }
}