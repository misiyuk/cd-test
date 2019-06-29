<?php

namespace App\Controller;

use App\Core\Controller\BaseController;

class SiteController extends BaseController
{
    /**
     * @throws \Exception
     */
    public function index()
    {
        return $this->render('site/index', [
            'message' => 'Hello World!',
        ]);
    }
    /**
     * @throws \Exception
     */
    public function jsonTest()
    {
        return $this->json([
            'message' => 'Hello world!',
        ]);
    }
}
