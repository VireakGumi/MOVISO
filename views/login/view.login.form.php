<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> login form</title>
    <link rel="stylesheet" href="../../views/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../views/css/style.css">
</head>
<body>
    <img src="../../assets/bg-login-form.png" alt="" class="background">
    
    <form action="#" method="post" >
        <div class="form_left d-flex flex-column justify-content-center align-items-center">
            <img src="../../assets/moviso-logo1.png" class="" alt="" width="90%">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.Velit aut facilis autem odio 
                exercitationem Lorem ipsum dolor sit amet consectetur, adipisicing elit consectetur, adipisicing elit</p>
        </div>

        <div class="form_right p-3 d-flex flex-column justify-content-center align-items-center">
            <div class="container">
                <h2 class="text-center text">LOGIN</h2><br>
            
                <input type="text" class="form-control" placeholder="Email or phone *" name="email" >
                <small class="form-text text-danger"><?php echo $email_error;?></small>
            
                <input type="password" class="form-control" placeholder="Password *" name="password">
                <small class="form-text text-danger"><?php echo $password_error;?></small>

                <a href="#" class="d-flex flex-column align-items-center text-decoration-none ">Forget Password?</a><br>

                <!-- <input type="submit" class=" login form-control " value="LOGIN"> -->
                <a href="<?php if($isFound){ echo '../home/home.php';} else{echo '#';}?>"><button class=" login form-control "> LOGIN</button></a>
            </div>
        </div>
    </form>
</body>

</html>