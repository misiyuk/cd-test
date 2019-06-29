<?php

spl_autoload_register(function (string $className) {
    if (preg_match('#^App\\\\([\w\\\\]+)#', $className)) {
        $path = preg_replace('#^App\\\\([\w\\\\]+)#', 'src/$1', $className);
        $path = preg_replace('#\\\\#', '/', $path);

        include $path . '.php';
    }
});
