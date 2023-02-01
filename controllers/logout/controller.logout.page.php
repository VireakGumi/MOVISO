<?php
session_start();
setcookie("Password","", time() - 1, "/");
setcookie("Email","", time() -1 , "/");

header("Location:/");


?>
