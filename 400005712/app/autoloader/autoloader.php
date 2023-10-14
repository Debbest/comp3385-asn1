<?php
//autoload classes
function autoloader($type) {
    $base_dir = __DIR__ . '/..';
    $type_name = str_replace('\\', '/', $type);
    $file = $base_dir . '/' . $type_name . '.php';
    if (file_exists($file)) {
        require_once $file;
    }
}

spl_autoload_register('autoloader');