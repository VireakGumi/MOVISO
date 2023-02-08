<?php
function createCustomer($userId): bool
{
    global $connection;

    $statement = $connection->prepare("insert into customers (user_id) values (:userid)");
    $statement->execute([
        ':userid' => $userId
    ]);

    return $statement->rowCount() > 0;
}


function createUser(string $userName, string $email, string $password, int $phoneNumber, bool $role = TRUE): bool
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

function updateMovie($id,$title,$numberTicket,$dateTime,$description,$genre,$price,$released,$duration,$country,$production,$trailer,$img)
{
    global $connection;
    $query = "UPDATE movies 
    SET movie_title=:title, number_ticket = :numberTicket, date_time = :datetime, description = :description, genre=:genre, price=:price, released=:released, duration=:duration, country = :country, production=:production, trailer = :trailer, img = :img 
    WHERE movies_id = :id";
    $state = $connection->prepare($query);
    $state->execute([
        ':title' => $title,
        ':number_ticket' => $numberTicket,
        ':date_time' => $dateTime,
        ':description' => $description,
        ':genre' => $genre,
        ':price' => $price,
        ':released' => $released,
        ':duration' => $duration,
        ':country' => $country,
        ':production' => $production,
        ':trailer' => $trailer,
        ':img' => $img

    ]);
    return $state->rowCount() > 0;
}
function updateVenue($id,$name,$address)
{
    global $connection;
    $query = "UPDATE venue SET name=:name, address=:address WHERE venue_id =:id";
    $state = $connection->prepare($query);
    $state->execute([
        'name' => $name,
        'address' => $address,
        'id' => $id
    ]);
    return $state->rowCount() > 0;
}