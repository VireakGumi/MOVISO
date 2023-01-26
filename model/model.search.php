<?php

$userInput= $_REQUEST["q"];

$query = "SELECT movie_title from movies where title movie_title '%{$userInput}%' or movie_title like '{$userInput}%'";
$state = $connection->query($query);
$arr = $state->fetchAll(PDO::FETCH_ASSOC);