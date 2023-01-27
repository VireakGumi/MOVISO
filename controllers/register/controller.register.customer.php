<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<?php
require ("controllers/validate/controller.validate.from.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ( $userName_valid && $email_valid && $password_valid  && $creditCard_valid  && $date_valid){
        require ('../../model/register.model.php');
        createCustomer($_POST["username"],$_POST["email"],$_POST["password"],$_POST["creditcard"],$_POST["dateofbirth"]);
        
    }
}

require("views/register/view.register.customer.php");
?>