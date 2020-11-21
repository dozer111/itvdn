<?php

spl_autoload_register(function (string $className){
    $currentDirPath = dirname(__FILE__);
    $parentDirPath = dirname($currentDirPath);
    $path = $parentDirPath.'/'.str_replace('\\','/',$className).'.php';
    require_once $path;
});