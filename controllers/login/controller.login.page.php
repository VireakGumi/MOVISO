<?php
require ("../../database/database.php");
require ("../validate/controller.validate.form.php");
$statement = $connection->prepare("select * from customers");

$statement->execute();
$customers = $statement->fetchAll();
$isFound=false;

foreach ($customers as $customer):
    if (!empty($_POST["password"]) && !empty($_POST["email"])){
        if(($customer["password"] ==$_POST["password"]) && ($customer["email"] == $_POST["email"])){
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



