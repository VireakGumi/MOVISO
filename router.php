<?php

$url = parse_url($_SERVER['REQUEST_URI'])['path'];

$router = [
    "/" => 'controllers/home/home.php',
    "/explore" => 'controllers/explore/explore.php',
    "/trailer" => 'controllers/trailer/trailer.php',
    "/login" => 'controllers/login/longin.php',
    "/register" => 'controllers/register/register.php'
];

function abort($code = 404)  {
    http_response_code($code);
    require "view/{$code}.php";
    die();
};

if(array_key_exists($url, $router)){
    require $router[$url];
}
else{
    abort();
};