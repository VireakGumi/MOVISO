<?php require_once('views/partials/header.php') ?>

<img src="../../assets/bg-register-customer.png" alt="" class="background">
<form action="#" method="post">
    <div class="form_left">
        <img src="../../assets/moviso-logo1.png" class="logo_on_form" alt="" width="65%">
        <h3>WELCOME</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.Velit aut facilis autem odio
            exercitationem Lorem ipsum dolor sit amet consectetur, adipisicing elit consectetur, adipisicing elit
        </p>
        <div class="icon">
            <img src="../../assets/google_PNG102344.png" alt="" width="11%">
            <img src="../../assets/Telegram-Logo-PNG-Photo.png" alt="" width="12%">
            <img src="../../assets/twitter.png" alt="" width="12%">
        </div>
    </div>
    <div class="form_right">
        <div class="container">
            <h2 class="text-center">REGISTER</h2>
            <input type="text" class="form-control" placeholder="User Name *" name="username">
            <small class="form-text text-danger">
                <?=isset($userName_error)? $userName_error : " "?>
            </small>

            <input type="text" class="form-control" placeholder="Email *" name="email">
            <small class="form-text text-danger">
                <?=isset($email_error)? $email_error : " " ?>
            </small>

            <input type="password" class="form-control" placeholder="Password *" name="password">
            <small class="form-text text-danger">
                <?=isset($password_error)? $password_error : " " ?>
            </small>

           

            <input type="number" class="form-control" placeholder="Phone number *" name="phonenumber">
            <small class="form-text text-danger">
                <?=isset($phoneNumber_error)? $phoneNumber_error : " " ?>
            </small><br>

            <button>SUBMIT</button>
        </div>
    </div>
</form>
</div>
</body>
<script src="../js/main.js"></script>
</html>