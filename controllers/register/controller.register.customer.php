
<?php
require ("../../database/database.php");
require ("../validate/controller.validate.from.php");
require("../../views/register/view.register.customer.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ( $userName_valid && $email_valid && $password_valid  && $creditCard_valid  && $date_valid){
        require ('../../model/model.register.php');
        createCustomer($_POST["username"],$_POST["email"],$_POST["password"],$_POST["creditcard"],$_POST["dateofbirth"]);

    }
}

