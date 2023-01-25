<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<?php
require ("../../database/database.php");
require ("../validate/controller.validate.from.php");
require("../../views/register/view.register.customer.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ( $userName_valid && $email_valid && $password_valid  && $creditCard_valid  && $date_valid){
        require ('../../model/model.register.php');
        $userId = createUser($_POST["email"],$_POST["password"]);
     

        createCustomer($_POST["username"],$_POST["creditcard"],$_POST["dateofbirth"], $userId);

    }
}

