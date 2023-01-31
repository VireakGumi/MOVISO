
<?php
session_start();
require ("database/database.php");

require ("controllers/validate/controller.validate.form.php");
$user = getUser();

$statement = $connection->prepare("select * from users");
$statement->execute();
$users = $statement->fetchAll();

$isFound=false;

if (isset($_POST["password"]) && ($_POST["email"]))
{
    foreach ($users as $user):
        
        if (!empty($_POST["password"]) && !empty($_POST["email"]))
        {
            // echo (password_verify( $_POST["password"],$user["password"]));
            if(password_verify( $_POST["password"],$user["password"]) && ($user["email"] == $_POST["email"]))
            {
                $_SESSION["password"] = $_POST["password"];
                $_SESSION["email"] = $user["email"];
                $_SESSION['user_id'] = $user["user_id"];
                $isFound=true;  
            }
        }    
    endforeach;
    if($isFound){
        header ("Location:/");
    }
}

require ("views/login/view.login.form.php");

?>