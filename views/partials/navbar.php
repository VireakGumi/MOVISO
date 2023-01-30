<?php
// require_once('views/partials/header.php');



session_start();
require_once('views/partials/header.php');
$statement = $connection->prepare("select * from customers");
$statement->execute();
$customers = $statement->fetchAll();

$statement = $connection->prepare("select * from users");
$statement->execute();
$users = $statement->fetchAll();
$isFound=false;

if (isset($_SESSION["password"]) && isset($_SESSION["email"]))
{
    foreach ($users as $user):
        
        if (!empty($_SESSION["password"]) && !empty($_SESSION["email"]))
        {
            if(password_verify($_SESSION["password"],$user["password"]) && ($user["email"] == $_SESSION["email"]))
            {
                $isFound=true;  
            }
        }    
    endforeach;

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
                    aria-current="page">Home</a>
                <a href="/explore"
                    class=" <?= urls("/explore") ? 'active border-bottom border-4 border-danger ' : 'hover ' ?> nav-link mx-3 px-0 pb-1">Explore</a>
                <a href="/trailer"
                    class=" <?= urls("/trailer") ? 'active border-bottom border-4 border-danger ' : 'hover ' ?> nav-link mx-3 px-0 pb-1">Trailer</a>
            </div>
            <div class="navbar-nav">

            
            <?php
                    
                    if ($isFound){
                        foreach($users as $user){
                                if($_SESSION['user_id'] == $user['user_id']){
                                    ?>
                                     
                                     
                                     <a href="##" class="border-bottom border-4 nav-link mx-3 px-0 pb-1 hover "><?=$user['user_name']; ?></a>
                                     <?php 
                                    }
                                }
                                ?><a href="/logout" class="hover border-bottom border-4 nav-link mx-3 px-0 pb-1">Logout</a><br><?php
                    }
        
                    else{
                        ?>
                        <a href="/login"
                            class=" <?= urls("/login") ? 'border-bottom border-4 border-danger ' : 'hover ' ?> border-bottom border-4 nav-link mx-3 px-0 pb-1">Login
                        
                            <a href="/register"
                                class=" <?= urls("/register") ? 'border-bottom border-4 border-danger ' : 'hover ' ?> border-bottom border-4 nav-link px-0 pb-1 mx-3"
                                aria-disabled="true">Register</a>
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