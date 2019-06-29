<?php

return [
    '/' => [\App\Controller\SiteController::class, 'index'],
    '/json' => [\App\Controller\SiteController::class, 'jsonTest'],
];