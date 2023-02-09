<?php
session_start();

$userid = isset($_COOKIE['UserId']) ? $_COOKIE['UserId'] : '';
$movie_id = isset($_GET['id']) ? $_GET['id'] : '';

$user = getUserFromID($userid);
$movie = getMovieFromID($movie_id);
$isFound = false;
$isFoundEmail = false;
$todayDate = date('Y-m-d');
function validate_dateMovie($dateMovie, $todayDate)
{
    return $dateMovie < $todayDate;
}
function validate_cardNumber($cardNumber, $userCardNumber)
{
    return $cardNumber != $userCardNumber;
}
function validate_quanityTicket($qauntityTicket, $numberTicket)
{
    return $qauntityTicket < $numberTicket;

}

function getDataKey($key)
{
    if (isset($_POST[$key])) {
        $value = $_POST[$key];
        return $value;
    }
}

$quantityTicket_error = "";
$dateMovie_error = "";
$cardNumber_error = "";

$qauntityTicket = 0;
$dateMovie = "";
$cardNumber = "";

$quantityTicket_valid = false;
$dateMovie_valid = false;
$cardNumber_valid = false;

$isValid = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $qauntityTicket = getDatakey('qaunityticket');
    $dateMovie = getDatakey('dateMovie');
    $cardNumber = getDatakey('cardNumber');

    if (empty($qauntityTicket)) {
        $quantityTicket_error = "Please complete your quanity of Ticket.";
    } elseif (validate_quanityTicket($qauntityTicket, $user["numberTicket"])) {
        $quantityTicket_error = "Ticket is sold out.";
    } else {
        $quantityTicket_error = true;
    }
    ;
    if (empty($dateMovie)) {
        $dateMovie_error = "Please complete your movie date";
    } elseif (validate_dateMovie($dateMovie, $todayDate)) {
        $dateMovie_error = "Date is expired";
    } else {
        $dateMovie_valid = true;
    }
    ;

    if (empty($cardNumber)) {
        $cardNumber_error = "Please complete the card number";
    } elseif (validate_cardNumber($cardNumber, $user['credit_card_number'])) {
        $cardNumber_error = "incorrect card number";
    } else {
        $cardNumber_valid = true;
    }
    ;
    if ($cardNumber_valid && $dateMovie_valid && $quanityTicket_valid) {
        $isValid = true;
    }
    ;

}