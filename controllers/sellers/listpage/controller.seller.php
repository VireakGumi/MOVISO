<?php
require "database/database.php";



$movies = getMoives();


require 'views/sellers/view.seller.list.information.php';
?>