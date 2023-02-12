<?php

require_once('validate.php');
$userid = isset($_COOKIE['UserId']) ? $_COOKIE['UserId'] : '';
$movie_id = isset($_GET['id']) ? $_GET['id'] : '';

$user = getUserFromID($userid);
$movie = getMovieFromID($movie_id);

if ($isValid) {
    $numberTicket = $movie['number_ticket'];
    createTicket($movie['movies_id'], $user['user_id'], 'B', 3, 4);
    $quanityTicket -= $numberTicket;
    updateNumberTicket($numberTicket, $movie['movies_id']);
    header("location:/home");
}
require_once('views/buyticket/view.form.buyticket.php');