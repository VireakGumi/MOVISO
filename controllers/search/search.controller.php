<?php

require('database/database.php');
require('model/model.search.php');

$hint = "";
if ($userInput !== "") {
    $userInput = strtolower($userInput);
    $len = strlen($userInput);
    foreach ($data as $key) {
        $name = $key['title'];
        if (stristr($userInput, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .=" , " . $name . "       ";
            }
        }
    }
}

echo $hint === "" ? "no suggestion" : $hint;