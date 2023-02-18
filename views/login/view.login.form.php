<?php require("views/partials/header.php"); ?>

<img src="../../assets/background/bg-login-form.png" alt="" class="background">

<form action="" method="post">
    <div class="form_left d-flex flex-column justify-content-center align-items-center">
        <img src="../../assets/logo/moviso-logo1.png " class="logo_on_form magin" alt="" width="90%">
        <p>We build MOVISO website in purpose to increase the convenience for customers in booking
            movie tickets. With MOVISO you can booking tickets quickly and choose a seat which you prefer.</p>
    </div>

    <div class="form_right right-right p-3 d-flex flex-column justify-content-center align-items-center">
        <div class="container">
            <h2 class="text-center text">LOGIN</h2><br>

            <div id="form-login">
                <input type="email" id="email_value" name="email" class="form-control" placeholder="Email *"
                    onkeyup="emailCheck()" onclick="normal('')">
                <small class="form-text text-danger">
                    <?php echo $email_incorrect; ?>
                </small><br>
                <span id="icons">
                    <i class="fa fa-check-circle"></i>
                    <i class="fa fa-exclamation-circle"></i>
                </span>
            </div>

            <div id="form-login">
                <input type="password" id="password_value" name="password" class="form-control"
                    placeholder="Password *">
                <small class="form-text text-danger">
                    <?php echo $password_incorrect; ?>
                </small><br>
                <span id="icons">
                    <i class="fa fa-check-circle"></i>
                    <i class="fa fa-exclamation-circle"></i>
                </span>
            </div>

            <a href="#" class="d-flex flex-column align-items-center text-decoration-none ">Forget Password?</a><br>
            <div class="text-center w-100 " style="margin-left: -10px;">
                <p>Don't have account yet?<a href="/register">Register</a></p>
            </div>
            <button class="login form-control"> LOGIN</button>
        </div>
    </div>
</form>
</body>
<script src="views/js/main.js"></script>

</html>