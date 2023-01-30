<?php 

function createCustomer($userId)
{
    global $connection;

    $statement = $connection->prepare("insert into customers (user_id) values (:userid)");
    $statement->execute([
       ':userid' => $userId
    ]);

    return $statement->rowCount() > 0;
}


function createUser($userName,$email,$password,$creditCard,$phoneNumber,$role = TRUE)
{
    global $connection;
    $statement = $connection -> prepare("insert into users (user_name,email,password,credit_card_number,phone_number,role) values (:username,:email,:password,:creditcard,:phonenumber,:role)");
    $statement->execute([
        'username' => $userName,
        ':email'=> $email,
        ':password'=>$password,
        ':creditcard'=>$creditCard,
        ':phonenumber'=>$phoneNumber,
        ':role'=>$role,
    ]);
    $statement = $connection ->query("SELECT * FROM users");
    $result = $statement-> fetchAll();
   
    $number = count($result) -1;
    $userRole = $result[$number];
    print_r($userRole['user_id']);
    return $userRole['user_id'];
}

function getMoives()
{
    global $connection;
    $statement = $connection->prepare("select * from movies");
    $statement->execute();
    return $statement->fetchAll();;
}
