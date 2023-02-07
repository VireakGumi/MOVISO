
<?php
session_start();
require ("database/database.php");

require ("controllers/validate/controller.validate.form.php");

$user = getUser();

$isFound=false;

if (isset($_POST["password"]) && ($_POST["email"]))
{
    foreach ($users as $user):
        
        if (!empty($_POST["password"]) && !empty($_POST["email"]))
        {
            // echo (password_verify( $_POST["password"],$user["password"]));
            if(password_verify( $_POST["password"],$user["password"]) && ($user["email"] == $_POST["email"]))
            {
                setcookie("Password",$_POST["password"], time() + (86400 * 30), "/");
                setcookie("Email",$user["email"], time() + (86400 * 30), "/");
                setcookie("UserId",$user["user_id"], time() + (86400 * 30), "/");
                setcookie("Role",$user["role"], time() + (86400 * 30),);


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