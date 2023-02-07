<?php
require "database/database.php";


$movies = [];
if(!empty($movieId)){
    $movies = getMoives();
}


require 'views/sellers/view.seller.list.information.php';
?>