<?php

require_once('controllers/buyticket/validate.php');
$userid = isset($_COOKIE['UserId']) ? $_COOKIE['UserId'] : '';
$movie_id = isset($_POST['id']) ? $_POST['id'] : null;

$user = getUserByID($userid);
$movie = getMoiveById($movie_id);
$quanityTicket = $_POST['quantity'];
$numberTicket = $movie['number_ticket'];
$seat = $_POST['seats'];
$arr = explode(',' ,$seat);

if ($isValid) {
    foreach ($arr as $value) {
        $row = $value[0];
        $seat = $value[1];
        createTicket($movie['movies_id'], $user['user_id'], 'B', $row, $seat);
        $numberTicket -= $quanityTicket;
        updateNumberTicket($numberTicket, $movie['movies_id']);
    }
    header("location:/");
}