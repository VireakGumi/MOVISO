<?php

function getData($table,$id){
    global $connection;
    $statement = $connection->prepare("select * from $table where movie_id = $id");
    $statement->execute();
    $result = $statement->fetch();
    return $result;
}
