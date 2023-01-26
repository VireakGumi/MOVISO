<?php 

function createCustomer($userName,$creditCard,$date,$userId)
{
    global $connection;

    $statement = $connection->prepare("insert into customers (username,credit_card_number,date_of_birth,user_id) values (:username,:creditcard,:date,:userid)");
    $statement->execute([
       ':username' => $userName,    
       ':date' => $date,
       ':creditcard' => $creditCard,
       ':userid' => $userId
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
    $statement = $connection ->query("SELECT * FROM users");
    $result = $statement-> fetchAll();
   
    $number = count($result) -1;
    $userRole = $result[$number];
    print_r($userRole['user_id']);
    return $userRole['user_id'];
}
