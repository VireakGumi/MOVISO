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

                <div id="email_field">
                    <input  type="email" id="email_value" name="email" class="form-control" placeholder="Email *" onkeyup="email()" onclick="normal('email_value')">
                    <span id="icons">
                        <i class="fa fa-check-circle"></i>
                        <i class="fa fa-exclamation-circle"></i>
                    </span>
                </div>

                <div id="password_field">
                    <input type="password" id="password_value" name="password" class="form-control" placeholder="Password *" onkeyup="password()">
                    <span id="icons">
                        <i class="fa fa-check-circle"></i>
                        <i class="fa fa-exclamation-circle"></i>
                    </span>
                </div>
               
                <a href="#" class="d-flex flex-column align-items-center text-decoration-none ">Forget Password?</a><br>

                <!-- <input type="submit" class=" login form-control " value="LOGIN"> -->
                <button class="login form-control"> LOGIN</button>
            </div>
        </div>
    </form>
    </body>
    <script src="../js/main.js"></script>
    </html>
