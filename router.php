<?php

$url = parse_url($_SERVER['REQUEST_URI'])['path'];

$seller = 'views/erorrs/404.php';

if (isset($_COOKIE['Role']) && $_COOKIE['Role'] == 0)
{
    $seller = 'controllers/sellers/listpage/controller.seller.php';
};

$router = [
    "/" => 'controllers/home/controller.home.php',
    "/explore" => 'controllers/customers/listshow/controller.listshow.page.php',
    "/trailer" => 'views/trailer/trailer.php',
    "/login" => 'controllers/login/controller.login.page.php',
    "/logout" => 'controllers/logout/controller.logout.page.php',
    "/register" => 'controllers/customers/register/controller.register.customer.php',
    "/detail" => 'controllers/customers/detail/controller.detailpage.php',
    "/seller" => $seller,
    "/movie" => 'controllers/sellers/newshow/controller.add.movie.php',
    "/delete" => 'controllers/sellers/listpage/controller.delete.show.php',
    "/buyticket" => 'controllers/buyticket/controller.buyticket.php',
    "/booking" => 'views/buyticket/view.form.buyticket.php',
    "/update" => 'controllers/sellers/listpage/controller.edit.show.php',
    "/edit" => 'views/sellers/listpage/view.edit.show.php',
    "/search" => "controllers/search/search.controller.php",
    "/ticket" => 'controllers/ticket/controller.ticket.page.php'
    
];

function abort($code = 404)  {
    http_response_code($code);
    require "views/erorrs/{$code}.php";
    die();
};

if(array_key_exists($url, $router)){
    require $router[$url];
}
else{
    abort();
};
