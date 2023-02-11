<?php 
    require "../../database/database.php";
    require "../../model/model.php";
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $title=$_GET["title"];
        $genre=$_GET["genre"];
        $price=$_GET["price"];
        $released=$_GET["released"];
        $duration=$_GET["duration"];
        $data = [
            ":title" => $title,
            ":genre" => $genre,
            ":price" => $price,
            ":released" => $released,
            ":duration" => $duration
        ];
        if (!empty($title) and !empty($genre) and !empty($price) and !empty($released) and !empty($duration)){
            
        }
    }
    require"../../views/sellers/view.edit.show.php";