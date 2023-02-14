<?php
session_start();

require("controllers/validate/controller.validate.form.php");

$isFound = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($userName_valid && $email_valid && $password_valid && $address_valid && $date_valid && $phoneNumber_valid) {
        if ($_POST["password"] == $_POST["confirmpassword"]) {

            $passwordEncryp = password_hash($_POST["password"], PASSWORD_BCRYPT);
            $userId = createUser($_POST["username"], $_POST["email"], $_POST["address"], $_POST["creditcard"], $_POST["dateofbirth"], $passwordEncryp, $_POST["phonenumber"]);
            createCustomer($userId);

            setcookie("Username", $_POST["username"], time() + (86400 * 30), "/");
            setcookie("Password", $_POST["password"], time() + (86400 * 30), "/");
            setcookie("Email", $user["email"], time() + (86400 * 30), "/");
            setcookie("Role", $user["role"], time() + (86400 * 30), );
            setcookie("UserId", $user["user_id"], time() + (86400 * 30), "/");
            $isFound = true;
        }
    }
    if ($isFound) {
        header("Location: / ");
    }

}
require("views/customers/register/view.register.customer.php");