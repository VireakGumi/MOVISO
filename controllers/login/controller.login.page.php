<?php
require ("../../database/database.php");
require ("../validate/controller.validate.form.php");
$statement = $connection->prepare("select * from users");
$statement->execute();
$users = $statement->fetchAll();
$isFound=false;

foreach ($users as $user):
if (!empty($_POST["password"]) && !empty($_POST["email"])){
    if(($user["password"] ==$_POST["password"]) && ($user["email"] == $_POST["email"])){
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