<?php
require "database/database.php";



$movies = getMoivesForSeller();


require 'views/sellers/listpage/view.seller.list.information.php';
?>