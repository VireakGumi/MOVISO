<?php 

function createCustomer($userName,$creditCard,$date)
{
    global $connection;
    $statement = $connection->prepare("insert into customers (username,credit_card_number,date_of_birth) values (:username,:creditcard, :date)");
    $statement->execute([
       ':username' => $userName,    
       ':date' => $date,
       ':creditcard' => $creditCard,
    ]);

    return $statement->rowCount() > 0;
}



function createUser($email,$password,$role = TRUE)
{
    global $connection;
    $statement = $connection -> prepare("insert into users (email,password,role) values (:email,:password,:role)");
    $statement->execute([
        ':email'=> $email,
        ':password'=>$password,
        ':role'=>$role,
    ]);
    return $statement->rowCount() > 0;
}
