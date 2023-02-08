<?php
require_once('views/buyticket/view.form.buyticket.php');

require_once('validate.php');
$numberTicket = $movie['number_ticket'];

if($isValid){
    createTicket($movie['movies_id'], $user['user_id'],'B',3,4);
    $quanityTicket -= $numberTicket;
    // updateNumberTicket($numberTicket, $movie['movies_id']);

    header("location: /detail");
}
