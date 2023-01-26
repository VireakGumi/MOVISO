<?php
    session_start();
    require "../../database/database.php";
    $statement = $connection->prepare("SELECT * FROM movies");
    $statement-> execute();
    $movies = $statement->fetchAll();
    require "../../views/listshows/view.listshow.php";
    