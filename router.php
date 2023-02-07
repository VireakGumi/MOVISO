<?php

$url = parse_url($_SERVER['REQUEST_URI'])['path'];

$router = [
    "/" => 'controllers/home/controller.home.php',
    "/explore" => 'controllers/listshow/controller.listshow.page.php',
    "/trailer" => 'controllers/trailer/trailer.php',
    "/login" => 'controllers/login/controller.login.page.php',
    "/logout" => 'controllers/logout/controller.logout.page.php',
    "/register" => 'controllers/register/controller.register.customer.php',
    "/movie" => 'controllers/register/controller.add.movie.php',
    "/detail" => 'controllers/detail/controller.detailpage.php'
    
];

// function abort($code = 404)  {
//     http_response_code($code);
//     require "view/{$code}.php";
//     die();
// };

if(array_key_exists($url, $router)){
    require $router[$url];
}
// else{
//     abort();
// };