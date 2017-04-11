<?php

define('__ROOT__', realpath(dirname(__FILE__)) . DIRECTORY_SEPARATOR);

$loader = require __DIR__.'/vendor/autoload.php';
$loader->setUseIncludePath(true);
require(__ROOT__."/core/common.php");
$kernal = new \Group\Kernal();
$kernal->init(realpath(dirname(__FILE__)) . DIRECTORY_SEPARATOR, $loader);


