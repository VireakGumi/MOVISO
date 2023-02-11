<?php
session_start();
$userId= $_COOKIE['UserId'];
$tickets= getTicketBy ($userId('user_id'));

require '../../views/view.ticket.card.php';