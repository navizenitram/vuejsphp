<?php
define('ROOTPATH', __DIR__);

function loadClass($class) {
    $class = str_replace('\\', '/', $class);
    $path = ROOTPATH . '/domain/';
    require_once $path . $class .'.php';
}
spl_autoload_register('loadClass');

//TODO: To enviroment variable
define('COMPANY_ID', 'c44a32cf-1b4c-4f6c-94e3-7f38e6ca666a');
