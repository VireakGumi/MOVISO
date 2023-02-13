<?php

require_once('controllers/buyticket/validate.php');
$userid = isset($_COOKIE['UserId']) ? $_COOKIE['UserId'] : '';
$movie_id = isset($_POST['id']) ? $_POST['id'] : null;

$user = getUserFromID($userid);
$movie = getMovieFromID($movie_id);
$quanityTicket = $_POST['quantity'];
$numberTicket = $movie['number_ticket'];

if ($isValid) {
    createTicket($movie['movies_id'], $user['user_id'], 'B', 3, 4);
    $numberTicket -= $quanityTicket;
    updateNumberTicket($numberTicket, $movie['movies_id']);
    header("location:/");
}
else{
    header("location:/booking?id=". $movie_id);
}
// require_once('views/buyticket/view.form.buyticket.php');