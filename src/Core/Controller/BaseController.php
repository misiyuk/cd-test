<?php

namespace App\Core\Controller;

use App\Core\Response\Response;

class BaseController
{
    /**
     * @throws
     */
    public function render(string $template, array $params = []): Response
    {
        $projectDir = dirname(__DIR__, 3);
        $level = ob_get_level();
        $templateFile = $projectDir . '/templates/' . $template . '.php';
        try {
            ob_start();
            extract($params, EXTR_OVERWRITE);
            require $templateFile;
            $content = ob_get_clean();
        } catch (\Exception $e) {
            while (ob_get_level() > $level) {
                ob_end_clean();
            }
            throw $e;
        }

        return new Response($content);
    }

    protected function json($content, $status = 200)
    {
        return new Response(json_encode($content), $status);
    }
}
