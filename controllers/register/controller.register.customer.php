
<?php
require ("../../database/database.php");
require ('../../model/model.register.php');
require ("../validate/controller.validate.from.php");
require("../../views/register/view.register.customer.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ( $userName_valid && $email_valid && $password_valid  && $creditCard_valid  && $date_valid){
        $userId = createUser($_POST["email"],$_POST["password"]);
        createCustomer($_POST["username"],$_POST["creditcard"],$_POST["dateofbirth"], $userId);

    }
}

