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


function createUser($userName, $email, $address,$creditCard, $date,  $password, $phoneNumber, bool $role = TRUE) : bool
{
    global $connection;
    $statement = $connection->prepare("insert into users (user_name,email,address,credit_card_number,date_of_birth,password,phone_number,role) values (:username,:email,:address,:creditcard,:date,:password,:phonenumber,:role)");
    $statement->execute([
        ':username' => $userName,
        ':email' => $email,
        ':address' => $address,
        ':creditcard' => $creditCard,
        ':date' => $date,
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
    
}

function getSearch($letter)
{
    global $connection;
    $query = "SELECT movies_id,movie_title FROM movies WHERE movie_title LIKE '%{$letter}%' OR movie_title LIKE '{$letter}%'";
    $state = $connection->prepare($query);
    $state->execute();
    return $state->fetchAll(PDO::FETCH_ASSOC);
}

function createShow($venueId,$title,$numberTicket,  $dateTime,  $description, $genre,  $duration, $released,  $country,  $production,$trailer,  $image,  $price)
{
    global $connection;
    $statement=$connection->prepare("insert into movies (venue_id , movie_title, number_ticket, date_time, descriptions, genre, duration, released, country, production, trailer, img, prices) values (:venueid,:title, :numberticket, :datetime, :descriptions, :genre, :duration, :released, :country, :production, :trailer, :img, :price)"); 
    $statement->execute([
        
            ':venueid' =>$venueId,
            ':title' => $title,
            ':numberticket' => $numberTicket,
            ':datetime' => $dateTime,
            ':descriptions' => $description,
            ':genre' => $genre,
            ':duration' => $duration,
            ':released' => $released,
            ':country' => $country,
            ':production' => $production,
            ':trailer' => $trailer,
            ':img' => $image,
            ':price' => $price,
        ]);
        return $statement->rowCount() > 0;
}

function newVenue($name, $address){

    global $connection;

    $statement=$connection->prepare("insert into venue (cinema_name, cinema_address) values (:names, :addres)");
    $statement->execute(
        [
            ':names' => $name,
            ':addres' => $address,
        ]
        );
        $statement = $connection->query("SELECT * FROM movies");
        $result = $statement->fetchAll();
    
        $number = count($result) - 1;
        $movie = $result[$number];
       
        return $movie['venue_id'];
}