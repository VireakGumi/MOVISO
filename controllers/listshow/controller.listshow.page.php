<?php
    session_start();
    require "database/database.php";
    $statement = $connection->prepare("SELECT * FROM movies");
    $statement-> execute();
    $movies = $statement->fetchAll();

    $statement = $connection->prepare("select * from img");
    $statement-> execute();
    $img = $statement->fetchAll();
    $num = 0;	
    
    require "views/listshows/view.listshow.php";
    