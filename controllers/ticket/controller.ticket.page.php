<?php
session_start();
$userId = isset($_COOKIE['UserId'])? $_COOKIE['UserId'] : null;
$tickets= getTicketByID($userId);

require 'views/ticket/view.ticket.card.php';