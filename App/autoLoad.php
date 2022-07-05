<?php
declare(strict_types=1);
spl_autoload_register(function ($className) {
    $class = __DIR__ . '/../' . str_replace('\\', '/', $className) . '.php';
    if (file_exists($class)) {
        require $class;
    }
});