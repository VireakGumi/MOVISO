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
    return $userRole['user_id'];
}

function getUser()
{
    global $connection;
    $statement = $connection->prepare("select * from users");
    $statement->execute();
    return $statement->fetchAll();

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

function newShow(string $title, string $price, string $genre, date $released, string $duration, string $country, string $production, string $img, string $trailer, string $description)
{
    global $connection;
    $statement= $connection->prepare("INSERT INTO movies (movie_title, description, genre, duration, released, country, production, trailer, img, price) VALUES ($title, $description, $genre, $duration, $released, $country, $production, $trailer, $img, $price)");
}

function venues(string $name, string $address)
{
    global $connection;
    $statement= $connection->prepare("INSERT INTO venues (name, address) VALUES ($name, $address)");
    $result= $statement->fetchAll();

    $number=count($result)-1;
    $venueId= $result[$number];
    return $venueId['venue_id'];
}