<?php
require "database/database.php";



$movies = getMoives();


require 'views/sellers/listpage/view.seller.list.information.php';
?>