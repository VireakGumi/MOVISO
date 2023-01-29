<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<?php
// require ("../../database/database.php");
require ("controllers/validate/controller.validate.form.php");

$isFound=false;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ( $userName_valid && $email_valid && $password_valid  && $creditCard_valid  && $date_valid){
        require ('../../model/model.register.php');
        createCustomer($_POST["username"],$_POST["email"],$_POST["password"],$_POST["creditcard"],$_POST["dateofbirth"]);
        $isFound=true;
    }
    
    
}
if($isFound==false){
    require("views/register/view.register.customer.php");
}else{
    require ("../home/home.php");
}
