<?php

$userInput= $_REQUEST["q"];

$query = "SELECT movie_title FROM movies WHERE movie_title LIKE '%{$userInput}%' OR movie_title LIKE '{$userInput}%'";
$state = $connection->query($query);
$data = $state->fetchAll(PDO::FETCH_ASSOC);

// print_r($data);