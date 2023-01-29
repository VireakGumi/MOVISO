<?php 

function createCustomer($userName, $email,$password, $creditCard,$date)
{
    global $connection;
    $statement = $connection->prepare("insert into customers (username,email,password,credit_card_number,date_of_birth) values (:username, :email, :password,:creditcard, :date)");
    $statement->execute([
       ':username' => $userName,    
       ':email' => $email,
       ':password' => $password,
       ':date' => $date, 

    ]);

    return $statement->rowCount() > 0;
}

