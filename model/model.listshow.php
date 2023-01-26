<?php 

require ("../../database/database.php");
$statement = $connection->prepare("select * from movies");
$statement->execute();
$movies = $statement->fetchAll();
$isFound=false;

foreach ($movies as $movie):
if (!empty($_POST["movie_title"]) && !empty($_POST["decription"])){
    if(($movie["movie_title"] ==$_POST["movie_title"]) && ($movie["decription"] == $_POST["decription"])){
        $isFound=true;  
    }
}
endforeach;
if($isFound==false){
require ("../../views/login/view.login.form.php");
}
else{
require ("../home/home.php"); 
}