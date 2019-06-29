<?php

use App\Core\Kernel;
use App\Core\Request\Request;

include '../autoload.php';


$kernel = new Kernel();
$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();