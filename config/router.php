<?php

use App\Controller\AlbumController;

return [
    '/' => [AlbumController::class, 'index'],
    '/edit' => [AlbumController::class, 'edit'],
    '/new' => [AlbumController::class, 'new'],
];