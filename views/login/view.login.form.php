<?php require("views/partials/header.php"); ?>

    <img src="../../assets/bg-login-form.png" alt="" class="background">
    
    <form action="" method="post" >
        <div class="form_left d-flex flex-column justify-content-center align-items-center">
            <img src="../../assets/moviso-logo1.png " class="logo_on_form magin" alt="" width="90%" >
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.Velit aut facilis autem odio 
                exercitationem Lorem ipsum dolor sit amet consectetur, adipisicing elit consectetur, adipisicing elit</p>
        </div>

        <div class="form_right p-3 d-flex flex-column justify-content-center align-items-center">
            <div class="container">
                <h2 class="text-center text">LOGIN</h2><br>

                <div id="email-field" >
                    <input type="email" id ="email_value" class="form-control" placeholder="Email *" name="email" onkeyup="emailCheck()" onclick="normal('email-field')">
                    <span id="icons">
                        <i class="fa fa-check-circle"></i>
                        <i class="fa fa-exclamation-circle"></i>
                    </span>
                    <small class="text-danger"><?php echo $email_error; ?></small>
                </div>

                    <input type="password" id="password_value" name="password" class="form-control" placeholder="Password *" >
                    <small class="form-text text-danger"><?php echo $password_incorrect;?></small><br>
            
                <a href="#" class="d-flex flex-column align-items-center text-decoration-none ">Forget Password?</a><br>

                <button class="login form-control"> LOGIN</button>
            </div>
        </div>
    </form>
    </body>
    <script src="views/js/main.js"></script>
    </html>
