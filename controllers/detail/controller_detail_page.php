<?php
session_start();
require '../../database/database.php';

$movieId = isset($_SESSION["movie_id"])? $_SESSION["movie_id"]: '';
// require '../../model/model.movies.php';
function getData($table,$id){
    global $connection;
    $statement = $connection->prepare("SELECT * FROM $table WHERE movies_id = $id" );
    $statement->execute();
    $result = $statement->fetch();
    return $result;
}


function checkData($value){
    $isTrue = 0;
    if (!empty($value)){
        if(strlen($value)>0){
            $isTrue = 1;
        }
    }
    return $isTrue;
}
$movies = [];
if(!empty($movieId)){
    $movies = getData('movies',$movieId);
}
$movie_name= checkData($movies['movie_title'])? $movies['movie_title']: '';

$genre= checkData($movies['genre'])? $movies['genre']: '';

$duration= checkData($movies['duration'])? $movies['duration']: '';

$released= checkData($movies['released'])? $movies['released']: '';

$country=checkData($movies['country'])? $movies['country']: '';

$production=checkData($movies['production'])? $movies['production']: '';

$img=checkData($movies['img'])? "../../assets/" .$movies['img']: '';

$trailer=checkData($movies['trailer'])?  $movies['trailer']:'';

// }
require '../../views/detail/view_detail_page.php';
?>

