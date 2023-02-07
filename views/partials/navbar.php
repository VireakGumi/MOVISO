<?php

session_start();
require_once('views/partials/header.php');

$users = getUser();
$isFound=false;
$isFound1=false;

if (isset($_COOKIE["Password"]) && isset($_COOKIE["Email"]))
{
    foreach ($users as $user):
        
        if (!empty($_COOKIE["Password"]) && !empty($_COOKIE["Email"]))
        {
            if(password_verify($_COOKIE["Password"],$user["password"]) && ($user["email"] == $_COOKIE["Email"]))
            {
                $isFound=true;  
            }
        }    
    endforeach;

}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ( $userName_valid && $email_valid && $password_valid && $address_valid && $date_valid && $phoneNumber_valid){
        if($_POST["password"]==$_POST["confirmpassword"]){
        $passwordEncryp=password_hash($_POST["password"],PASSWORD_BCRYPT);
        $userId = createUser($_POST["username"],$_POST["email"],$passwordEncryp,$_POST["phonenumber"]);
        createCustomer($userId);
        setcookie("Username",$_POST["username"], time() + (86400 * 30), "/");
        $isFound=true;

        }
    }
  
}
?>


<nav class="navbar navbar-expand-lg navbar-dark position-fixed w-100 top-0" aria-label="Secondary navigation"
    style="background-color: #620212; color: white; z-index: 1000;">
    <div class="container-fluid">
        <a class="navbar-brand mx-4" href="/"><img src="../../assets/moviso-logo2.png" alt="" width="85px"></a>
        <div class="collapse navbar-collapse px-4 d-flex justify-content-lg-between flex-lg-row align-items-md-start flex-md-column align-items-sm-start flex-sm-column"
            id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a href="/"
                    class="<?= urls("/") ? 'active border-bottom border-4 border-danger ' : 'hover ' ?> nav-link px-0 pb-1 mx-3"
                    aria-current="page">HOME</a>
                <a href="/explore"
                    class=" <?= urls("/explore") ? 'active border-bottom border-4 border-danger ' : 'hover ' ?> nav-link mx-3 px-0 pb-1">EXPLORE</a>
                <!-- <a href="/trailer"
                    class=" <?= urls("/trailer") ? 'active border-bottom border-4 border-danger ' : 'hover ' ?> nav-link mx-3 px-0 pb-1">TRAILER</a> -->
            </div>
            <div class="navbar-nav">

            
            <?php
                    
                    if ($isFound){
                        
                        if (!empty($_COOKIE['UserId']) and empty($_COOKIE['Username'])){
                        foreach($users as $user){
                                if($_COOKIE['UserId'] == $user['user_id']){
                                    ?>
                                     
                                     
                                     <a href="##" class="border-bottom border-4 nav-link mx-3 px-0 pb-1 hover "><?=$user['user_name']; ?></a>
                                     <?php 
                                    }
                                }
                                ?><a href="/logout" class="hover border-bottom border-4 nav-link mx-3 px-0 pb-1">LOGOUT</a><br><?php
                        }
                        if ($_COOKIE['Role'] == 0){
                            ?>
                            <a href="/"class=" <?= urls("##") ? 'active border-bottom border-4 border-danger ' : 'hover ' ?> nav-link mx-3 px-0 pb-1">SELLER</a>
                            <?php
                        }
                        if(isset($_COOKIE['Username'])){
                                ?>
                                <a href="##" class="border-bottom border-4 nav-link mx-3 px-0 pb-1 hover "><?=$_COOKIE['Username'] ?></a>
                                <?php
                            ?>
                                <a href="/logout" class="hover border-bottom border-4 nav-link mx-3 px-0 pb-1">LOGOUT</a><br><?php
                        }
                        
    
                    }
                    
                    else{
                        ?>
                        <a href="/login"
                            class=" <?= urls("/login") ? 'border-bottom border-4 border-danger ' : 'hover ' ?> border-bottom border-4 nav-link mx-3 px-0 pb-1">LOGIN</a>
                            <a href="/register"
                                class=" <?= urls("/register") ? 'border-bottom border-4 border-danger ' : 'hover ' ?> border-bottom border-4 nav-link px-0 pb-1 mx-3"
                                aria-disabled="true">REGISTER</a>
                <?php
                    }
                    ?>
            </div>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>