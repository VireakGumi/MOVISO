<?php

function urls($value){ 
    return $_SERVER['REQUEST_URI'] === $value;
}