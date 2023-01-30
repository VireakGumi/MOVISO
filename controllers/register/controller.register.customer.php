

<?php
require ("database/database.php");
require ('model/model.register.php');
require ("controllers/validate/controller.validate.form.php");
require("views/register/view.register.customer.php");
$isFound=false;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ( $userName_valid && $email_valid && $password_valid  && $creditCard_valid  && $phoneNumber_valid){
        $passwordEncryp=password_hash($_POST["password"],PASSWORD_BCRYPT);
        $userId = createUser($_POST["username"],$_POST["email"],$passwordEncryp,$_POST["creditcard"],$_POST["phonenumber"]);
        createCustomer($userId);
        $isFound=true;

    }
    if($isFound){
        header("Location: /");
    }

}