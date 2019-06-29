<?php

namespace App\Core\Response;

class Response
{
    private $content;
    private $status;

    public function __construct($content = '', $status = 200)
    {
        $this->content = $content;
        $this->status = $status;
    }

    public function send(): void
    {
        http_response_code($this->status);
        echo $this->content;
    }
}