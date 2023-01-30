<?php
// require ("controllers/validate/controller.validate.form.php");
$statement = $connection->prepare("select * from users");
$statement->execute();
$users = $statement->fetchAll();
$isFound=false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST["password"]) && isset($_POST["email"])) {
        foreach ($users as $user):
            if (($user["password"] == $_POST["password"]) && ($user["email"] == $_POST["email"])) {
                $isFound = true;
            }
        endforeach;
        if ($isFound) {
            header("Location:/");
        }
    }
}

require ("views/login/view.login.form.php");