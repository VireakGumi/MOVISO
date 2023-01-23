<?php

function createCustomer(string $firstname, string $lastname, string $username, string $email, string $password, int $creditcard,string $phonenumber) : bool
{
    global $connection;
    $statement = $connection->prepare("insert into customers (first_name, last_name,user_name,email,password,creditcard,phonenumber) values (:firstname, :lastname, :username, :email, :password,creditcard, :phonenumber)");
    $statement->execute([
       ':firstname' => $firstname,
       ':lastname' => $last,
       ':username' => $username,    
       ':email' => $email,
       ':password' => $password,
       ':creditcard' => $creditcard,
       ':phonenumber' => $phonenumber

    ]);

    return $statement->rowCount() > 0;
}