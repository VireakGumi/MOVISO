<?php
require '../../database/database.php';
require '../../model/model.movie_detail.php';
function checkData($value){
    $isTrue = 0;
    if (!empty($value)){
        if(strlen($value)>0){
            $isTrue = 1;
        }
    }
    return $isTrue;
}
$movie_detail = [];
$movie = [];
if(!empty($movieId)){
    $movie_detail = getData('movie_detail',$movieId);
    $movie = getData('movies',$movieId);
}
$movie_name= checkData($movie['movie_title'])? $movie['movie_title']: '';

$genre= checkData($movie_detail['genre'])? $movie_detail['genre']: '';

$duration= checkData($movie_detail['duration'])? $movie_detail['duration']: '';

$released= checkData($movie_detail['released'])? $movie_detail['released']: '';

$country=checkData($movie_detail['country'])? $movie_detail['country']: '';

$production=checkData($movie_detail['production'])? $movie_detail['production']: '';

$img=checkData($movie_detail['img'])? $movie_detail ['img']: '';

$trailer=checkData($movie_detail['trailer'])? $movie_detail['trailer']:'';
require '../../views/detail/view_detail_page.php';