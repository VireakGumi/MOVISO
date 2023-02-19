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


function createUser(string $userName, string $email, string $address,string $creditCard, string $date, string $password, int $phoneNumber, bool $role = TRUE) : int
{
    global $connection;
    $statement = $connection->prepare("INSERT INTO users (user_name,email,address,credit_card_number,date_of_birth,password,phone_number,role) VALUES (:username,:email,:address,:creditcard,:date,:password,:phonenumber,:role)");
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
    return $userRole['user_id'];
}

function getUser()
{
    global $connection;
    $statement = $connection->prepare("SELECT * FROM users");
    $statement->execute();
    return $statement->fetchAll();

}
function getUserByID($id)
{
    global $connection;
    $statement = $connection->prepare("SELECT * FROM users WHERE user_id = :id");
    $statement->execute([
        ':id' => $id,
    ]);
    return $statement->fetch();

}

function getCustomer()
{
    global $connection;
    $statement = $connection->prepare("SELECT * FROM customers");
    $statement->execute();
    return $statement->fetchAll();
}

function getMoives() 
{
    global $connection;
    $statement = $connection->prepare("SELECT * FROM movies WHERE number_ticket > 0 ORDER BY movies_id DESC ");
    $statement->execute();
    return $statement->fetchAll();
}
function getMoivesForSeller() 
{
    global $connection;
    $statement = $connection->prepare("SELECT * FROM movies ORDER BY movies_id DESC");
    $statement->execute();
    return $statement->fetchAll();
    
}

function getSearch($letter)
{
    global $connection;
    $query = "SELECT * FROM movies WHERE movie_title LIKE '%{$letter}%' OR movie_title LIKE '{$letter}%' AND number_ticket > 0 ORDER BY movies_id DESC";
    $state = $connection->prepare($query);
    $state->execute();
    return $state->fetchAll(PDO::FETCH_ASSOC);
}
function delete($id)
{
    global $connection;
    $query = "DELETE FROM movies WHERE movies_id= :id";
    $state = $connection->prepare($query);
    $state->execute([
        ':id' => $id,
    ]);
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


function updateMovie($id, $title, $genre, $price, $released, $duration, $numberTicket, $dateTime, $description, $country, $production, $trailer, $img)
{
    global $connection;
    $query = "UPDATE movies SET movie_title=:title, prices =:prices, genre =:genre, duration =:duration, 
    released =:released, country =:country, number_ticket =:number_ticket,  production =:production,
     trailer =:trailer, date_time =:datetime, img =:image, descriptions =:description WHERE movies_id =:id";
    $statement = $connection->prepare($query);
    $statement->execute(array(
        ':id' => $id,
        ':title' => $title,
        ':prices' => $price,
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
    $query = "UPDATE venue SET cinema_name=:name, cinema_address=:address WHERE venue_id =:id";
    $statement = $connection->prepare($query);
    $statement->execute([
        ':name' => $name,
        ':address' => $address,
        ':id' => $id,
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
function createTicket(int $movieId,int $userId,string $gate,string $row,int $seat) : bool
{
    
    global $connection;

    $statement = $connection->prepare("insert into tickets (movies_id, user_id, gate, row, seat) values (:movieid, :user_id, :gate, :row, :seat)");
    $statement->execute([
        ':movieid' => $movieId,
        ':user_id'=> $userId,
        ':gate'=> $gate,
        ':row'=> $row,
        ':seat'=> $seat,
    ]);

    return $statement->rowCount() > 0;
}

function updateNumberTicket($number, $id){
    global $connection;
    $sate = $connection->prepare("UPDATE movies SET number_ticket = :num WHERE movies_id = :id");
    $sate->execute([    
        ':num' => $number,
        ':id' => $id
    ]);
}

function sectionMovies($type){
    global $connection;
    $query = "SELECT * FROM movies WHERE genre LIKE '%{$type}%'" ;
    $statement = $connection->query($query);
    return $statement->fetchAll();
 }

function getTicketByID($id){
    global $connection;
    $query = "SELECT * FROM tickets WHERE user_id = :id ORDER BY ticket_id DESC";
    $sate = $connection->prepare($query);
    $sate->execute([
        ':id' => $id
    ]);  
    return $sate->fetchAll();
}
function getMoveiByID($id){
    global $connection;
    $query = "SELECT * FROM movies WHERE movies_id = :id ";
    $sate = $connection->prepare($query);
    $sate->execute([
        ':id' => $id
    ]);  
    return $sate->fetch();
}
function getTicketByMovieID($id){
    global $connection;
    $query = "SELECT * FROM tickets WHERE movies_id = :id";
    $sate = $connection->prepare($query);
    $sate->execute([
        ':id' => $id
    ]);  
    return $sate->fetchAll();
}
