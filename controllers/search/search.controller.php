<?php

require('../../database/database.php');
require('../../model/model.search.php');
if ($userInput !== "") {
    $userInput = strtolower($userInput);
    $len = strlen($userInput);
    foreach ($data as $key) {
        $name = $key['movie_title'];
        echo "<li style='list-style:none;' class='m-1'>" . "<a href='/' class='text-white' style='font-size:20px;'>" . $name . "</a> </li>";
    }
}