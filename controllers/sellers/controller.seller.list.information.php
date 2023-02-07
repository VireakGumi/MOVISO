<?php
    
    require "../../database/database.php";
    $statement = $connection->prepare("SELECT * FROM movies");
    $statement-> execute();
    $movies = $statement->fetchAll();
    
    require "../../views/sellers/view.seller.list.information.php";