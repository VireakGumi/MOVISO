<?php
function createCustomer($userId) : bool
{
    global $connection;

    $statement = $connection->prepare("insert into customers (user_id) values (:userid)");
    $statement->execute([
        ':userid' => $userId
    ]);

    return $statement->rowCount() > 0;
}


function createUser(string $userName, string $email, string $password, int $phoneNumber, bool $role = TRUE) : bool
{
    global $connection;
    $statement = $connection->prepare("insert into users (user_name,email,password,phone_number,role) values (:username,:email,:password,:phonenumber,:role)");
    $statement->execute([
        'username' => $userName,
        ':email' => $email,
        ':password' => $password,
        ':phonenumber' => $phoneNumber,
        ':role' => $role,
    ]);
    $statement = $connection->query("SELECT * FROM users");
    $result = $statement->fetchAll();

    $number = count($result) - 1;
    $userRole = $result[$number];
    print_r($userRole['user_id']);
    return $userRole['user_id'];
}

function getUser()
{
    global $connection;
    $statement = $connection->prepare("select * from users");
    $statement->execute();
    return $statement->fetchAll();

}
function getUserFromID($id)
{
    global $connection;
    $statement = $connection->prepare("select * from users where user_id = :id");
    $statement->execute([
        ':id' => $id,
    ]);
    return $statement->fetch();

}
function getMovieFromID($id)
{
    global $connection;
    $statement = $connection->prepare("select * from users where user_id = :id");
    $statement->execute([
        ':id' => $id,
    ]);
    return $statement->fetch();

}

function getCustomer()
{
    global $connection;
    $statement = $connection->prepare("select * from customers");
    $statement->execute();
    return $statement->fetchAll();
}

function getMoives()
{
    global $connection;
    $statement = $connection->prepare("SELECT * FROM movies");
    $statement->execute();
    return $statement->fetchAll();
    ;
}

function getSearch($letter)
{
    global $connection;
    $query = "SELECT movies_id,movie_title FROM movies WHERE movie_title LIKE '%{$letter}%' OR movie_title LIKE '{$letter}%'";
    $state = $connection->prepare($query);
    $state->execute();
    return $state->fetchAll(PDO::FETCH_ASSOC);
}

function createTicket(int $movieId,int $customerId,string $gate,int $row,int $seat) : bool
{
    
    global $connection;

    $statement = $connection->prepare("insert into tickets (movie_id, customer_id, gate, row, seat) values (:movieid, :customerid, :gate, :row, :seat)");
    $statement->execute([
        ':movieid' => $movieId,
        ':customerid'=> $customerId,
        ':gate'=> $gate,
        ':row'=> $row,
        ':seat'=> $seat,
    ]);

    return $statement->rowCount() > 0;
}

function updateNumberTicket($number, $id){
    global $connection;
    $sate = $connection->prepare("UPDATE movies SET number_ticket = :num WHERE movieid = :id");
    $sate->execute([    
        ':num' => $number,
        ':id' => $id
    ]);
}