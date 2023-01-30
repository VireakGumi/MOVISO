<?php
    session_start();
    require "model/model.register.php";
    $movies = getMoives();

    require "views/listshows/view.listshow.php";
    
    