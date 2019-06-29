<?php

namespace App\Core\Request;

class Request
{
    private $get;
    private $post;
    private $server;

    private function __construct()
    {
    }

    public static function createFromGlobals(): Request
    {
        $request = new Request();
        $request->get = $_GET;
        $request->post = $_POST;
        $request->server = $_SERVER;

        return $request;
    }

    public function get(string $key, $default = null)
    {
        if (!isset($this->get[$key])) {

            return $default;
        }

        return $this->get[$key];
    }

    public function post(string $key, $default = null)
    {
        if (!isset($this->post[$key])) {

            return $default;
        }

        return $this->post[$key];
    }

    public function server(string $key, $default = null)
    {
        if (!isset($this->server[$key])) {

            return $default;
        }

        return $this->server[$key];
    }
}
