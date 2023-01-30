<?php

session_start();
require "model/model.php";
$movies = getMoives();

require "views/listshows/view.listshow.php";


?>

