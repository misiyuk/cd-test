<?php

namespace App\Core\Controller;

use App\Core\Form\BaseForm;
use App\Core\Request\Request;
use App\Core\Response\Response;

class BaseController
{
    private $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * @throws \App\Core\Form\Exceptions\NotValidFormDataObjectException
     */
    protected function createForm(string $className, object $obj)
    {
        return new BaseForm($className, $obj);
    }

    /**
     * @throws
     */
    public function render(string $template, array $params = [], string $layout = 'layout/index'): Response
    {
        $projectDir = dirname(__DIR__, 3);
        $templatePath = $projectDir . '/templates';
        $templateFile = $templatePath . '/' . $template . '.php';
        $layoutFile = $templatePath . '/' . $layout . '.php';
        $content = $this->getContent($templateFile, $params);
        $layoutParams = $params;
        $layoutParams['content'] = $content;
        $layoutParams['title'] = $layoutParams['title'] ?? '';
        $content = $this->getContent($layoutFile, $layoutParams);

        return new Response($content);
    }

    private function getContent(string $templateFile, array $params): string
    {
        ob_start();
        extract($params, EXTR_OVERWRITE);
        require $templateFile;
        $content = ob_get_clean();

        return $content;
    }

    public function getRequest(): Request
    {
        return $this->request;
    }

    protected function json($content, $status = 200)
    {
        return new Response(json_encode($content), $status);
    }
}
