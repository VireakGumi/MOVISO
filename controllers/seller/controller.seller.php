<?php
require "database/database.php";


$movies = [];
if(!empty($movieId)){
    $movies = getMoives();
}


require 'views/seller/view.seller.php';
?>