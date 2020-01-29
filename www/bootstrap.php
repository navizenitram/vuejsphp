<?php
define('ROOTPATH', __DIR__);

function loadClass($class) {
    $class = str_replace('\\', '/', $class);
    $path = ROOTPATH . '/app/';
    require_once $path . $class .'.php';
}
spl_autoload_register('loadClass');

require ROOTPATH . '/vendor/autoload.php';