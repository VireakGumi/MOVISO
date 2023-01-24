<?php
require'model.register.php';

//connect to our MYSQL database

$dsn = "mysql:host=$hostname;dbname=$database;charset=utf8mb4";

$pdo = new PDO($dsn);

$statement = $pdo ->prepare("insert into customers");

$statement -> execute();

$customers = $statement-> fetchAll(PDO::FETCH_ASSOC);

foreach($customers as $customer){
    echo customter['user_name'].["email"].["password"].["credit_card_number"];
}