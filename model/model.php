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

// function updateMovie($id,$title,$numberTicket,$dateTime,$description,$genre,$price,$released,$duration,$country,$production,$trailer,$img)
// {
//     global $connection;
//     $query = "UPDATE movies 
//     SET movie_title=:title, number_ticket = :numberTicket, date_time = :datetime, description = :description, genre=:genre, price=:price, released=:released, duration=:duration, country = :country, production=:production, trailer = :trailer, img = :img 
//     WHERE movies_id = :id";
//     $state = $connection->prepare($query);
//     $state->execute([
//         ':title' => $title,
//         ':number_ticket' => $numberTicket,
//         ':date_time' => $dateTime,
//         ':description' => $description,
//         ':genre' => $genre,
//         ':price' => $price,
//         ':released' => $released,
//         ':duration' => $duration,
//         ':country' => $country,
//         ':production' => $production,
//         ':trailer' => $trailer,
//         ':img' => $img

//     ]);
//     return $state->rowCount() > 0;
// }
// function updateVenue($id,$name,$address)
// {
//     global $connection;
//     $query = "UPDATE venue SET name=:name, address=:address WHERE venue_id =:id";
//     $state = $connection->prepare($query);
//     $state->execute([
//         'name' => $name,
//         'address' => $address,
//         'id' => $id
//     ]);
//     return $state->rowCount() > 0;
// }

function getMoiveById($id)
{
    global $connection;
    $query = "SELECT * FROM movies WHERE movies_id = :id";
    $statement = $connection->prepare($query);
    $statement->execute([
        ':id' => $id,
    ]); 
    return $statement->fetch();
}

function getVenueById($id){
global $connection;
    $query = "SELECT * FROM venue WHERE venue_id = :id";
    $statement = $connection->prepare($query);
    $statement->execute([
        ':id' => $id,
    ]);
    return $statement->fetch();
}

function editMovie($id, $title, $genre,$price,$released,$duration){
    global $connection;
    $statement = $connection->prepare("UPDATE movies SET movie_title = :title, genre = :genre, price = :price, released = :released WHERE movies_id= :id");
    $statement->execute([
        ':title' => $title,
        ':genre' => $genre,
        ':price' => $price,
        ':released' => $released,
        ':id' => $id
        ]);
        return $statement->rowCount() > 0;
}

function updateMovie($id, $title, $genre, $price, $released, $duration, $numberTicket, $dateTime, $description, $country, $production, $trailer, $img)
{
    global $connection;
    $query = "UPDATE movies SET movie_title=:title, price =:price, genre =:genre, duration =:duration, 
    released =:released, country =:country, number_ticket =:number_ticket,  production =:production,
     trailer =:trailer, date_time =:datetime, img =:image, description =:description WHERE movies_id =:id";
    $statement = $connection->prepare($query);
    $statement->execute(array(
        ':id' => $id,
        ':title' => $title,
        ':price' => $price,
        ':genre' => $genre,
        ':duration' => $duration,
        ':released' => $released,
        ':country' => $country,
        ':datetime' => $dateTime,
        ':number_ticket' => $numberTicket,
        ':production' => $production,
        ':trailer' => $trailer,
        ':image' => $img,
        ':description' => $description,
        
    ));
    return $statement->rowCount() > 0;
}
function updateVenue($id,$name,$address)
{
    global $connection;
    $query = "UPDATE venue SET name=:name, address=:address WHERE venue_id =:id";
    $statement = $connection->prepare($query);
    $statement->execute([
        ':name' => $name,
        ':address' => $address,
        ':id' => $id,
    ]);
    return $statement->rowCount() > 0;
}