<?php
require_once('../../database/database.php');

$userInput = $_REQUEST["search"];
require('../../model/model.php');
$data = getSearch($userInput);
if ($userInput !== "") {

    echo "<h4 class='m-2'>Result search </h4>";
    foreach ($data as $key) {
        $name = $key['movie_title']; 
        echo "<li style='list-style:none;' class='m-1'>" . "<a href='/detail' class='text-white' style='font-size:18px;'>" . $name . "</a> </li>";
    }
}