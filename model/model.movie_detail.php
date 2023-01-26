<?php
session_start();
$movieId = isset($_SESSION["movie_id"])? $_SESSION["movie_id"]: '';
require '../../database/database.php';
function getData($table,$id){
    $statement = $connection->prepare("select * from $table where movie_id = $id");
    $statement->execute();
    $result = $statement->fetch();
    return $result;
}

