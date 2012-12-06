<?php

spl_autoload_register(function ($classname) {
    include_once __DIR__ . '/../' . str_replace('\\', '/', $classname) . '.php';
});
