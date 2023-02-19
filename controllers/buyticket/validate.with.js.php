<?php
session_start();

require('../../database/database.php');
require('../../model/model.php');


$userId = isset($_COOKIE['UserId']) ? $_COOKIE['UserId'] : '';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $movie_id = isset($_POST['id']) ? $_POST['id'] : null;
}
else{
    $movie_id = isset($_GET['id']) ? $_GET['id'] : null;
}


$user = getUserByID($userId);
$movie = getMoiveById($movie_id);
$isFound = false;
$isFoundEmail = false;
date_default_timezone_set('Asia/bangkok');
$todayDate = date('Y-m-d h:i:s');
$dateMovie = $movie['date_time'];

function validate_dateMovie($dateTime, $todayDate)
{

    return $dateTime > $todayDate;
}


function validate_cardNumber($cardNumber, $userCardNumber)
{
    return $cardNumber == $userCardNumber;
}

function validate_cardName($cardName, $userCardName)
{
    return $cardName == $userCardName;
}
function validate_quanityTicket($qauntityTicket, $numberTicket)
{
    return $qauntityTicket <= $numberTicket;

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
$cardName_error = "";

$qauntityTicket = 0;
$cardNumber = "";
$cardName = "";

$quantityTicket_valid = false;
$dateMovie_valid = false;
$cardNumber_valid = false;
$cardName_valid = false;

$isValid = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $qauntityTicket = getDatakey('quantity');
    $cardNumber = getDatakey('card_num');
    $cardName = getDatakey('name');

    if (empty($qauntityTicket)) {
        $quantityTicket_error = "Please complete your quanity of Ticket.";
    } elseif (validate_quanityTicket($qauntityTicket, $movie["number_ticket"])) {
        $quantityTicket_valid = true;
    } else {
        $quantityTicket_error = "Ticket is sold out.";
    }
    ;
    if (empty($dateMovie)) {
        $dateMovie_error = "Please complete your movie date";
    } elseif (validate_dateMovie($dateMovie, $todayDate)) {
        $dateMovie_valid = true;
    } else {
        $dateMovie_error = "Date is expired";
    }
    ;

    if (empty($cardNumber)) {
        $cardNumber_error = "Please complete the card number.";
    } elseif (validate_cardNumber($cardNumber, $user['credit_card_number'])) {
        $cardNumber_valid = true;
    } else {
        $cardNumber_error = "incorrect card number";
    }
    ;
    if (empty($cardName)) {
        $cardName_error = "Please enter card name.";
    } elseif ((validate_cardName($cardName, $user['user_name']))) {
        $cardName_valid = true;
    } else {
        $cardName_error = "Name card should only letter.";
    }
    ;
    if ($cardName_valid && $cardNumber_valid && $dateMovie_valid && $quantityTicket_valid) {
        $isValid = 1;
    } 
}
echo $isValid;