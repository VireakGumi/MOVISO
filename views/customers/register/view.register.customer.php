<?php require("views/partials/header.php"); ?>

<img src="../../assets/bg-register-customer.png" alt="" class="background">
<form action="#" method="post">
    <div class="form_left">
        <img src="../../assets/moviso-logo1.png" class="logo_on_form" alt="" width="65%">
        <h3>Welcome</h3>
        <p>We build MOVISO website in purpose to increase the convenience for customers in booking
            movie tickets. With MOVISO you can booking tickets quickly and choose a seat which you prefer.
        </p>
        <div class="icon">
            <img src="../../assets/icon-google.png" alt="" width="12%">
            <img src="../../assets/icon-telegram.png" alt="" width="12%">
            <img src="../../assets/icon-twifter.png" alt="" width="12%">
        </div>
    </div>
    <div class="form_right">
        <div class="container">
            <h2 class="text-center">REGISTER</h2>
            <div class="container_1">
                <div id="user-field">
                    <input type="text" id="user_value" class="form-control" placeholder="User Name *" name="username"
                        onkeyup="userNameCheck()" onclick="normal('user-field')">
                    <span id="icons">
                        <i class="fa fa-check-circle"></i>
                        <i class="fa fa-exclamation-circle"></i>
                    </span>
                    <small class="text-danger">
                        <?=!empty($userName_error) ? $userName_error : "<p>.</p>" ?>
                    </small>
                </div>
                <div id="phone-field">
                    <input type="text" id="phone_value" class="form-control" placeholder="Phone Number *"
                        name="phonenumber" onkeyup="phoneCheck()" onclick="normal('phone-field')">
                    <span id="icons">
                        <i class="fa fa-check-circle"></i>
                        <i class="fa fa-exclamation-circle"></i>
                    </span>
                    <small class="text-danger">
                        <?=!empty($phoneNumber_error) ? $phoneNumber_error : "<p>.</p>" ?>
                    </small>
                </div>
            </div>
            <div class="container_2">

                <div id="email-field">
                    <input type="email" id="email_value" class="form-control" placeholder="Email *" name="email"
                        onkeyup="emailCheck()" onclick="normal('email-field')">
                    <span id="icons">
                        <i class="fa fa-check-circle"></i>
                        <i class="fa fa-exclamation-circle"></i>
                    </span>
                    <small class="text-danger">
                        <?=!empty($email_error) ? $email_error : "<p>.</p>" ?>
                    </small>
                </div>
                <div id="address-field">
                    <input type="text" id="address_value" class="form-control" placeholder="Address *" name="address">
                    <small class="text-danger">
                        <?=!empty($address_error) ? $address_error : "<p>.</p>" ?>
                    </small>
                </div>
            </div>
            <div class="container_3">
                <div id="password-field">
                    <input type="password" id="password_value" class="form-control" placeholder="Password *"
                        name="password" onkeyup="passwordCheck()" onclick="normal('password-field')">
                    <span id="icons">
                        <i class="fa fa-check-circle"></i>
                        <i class="fa fa-exclamation-circle"></i>
                    </span>
                    <small class="text-danger">
                        <?=!empty($password_error) ? $password_error : "<p>.</p>" ?>
                    </small>
                </div>
                <div id="confirmpass-field">
                    <input type="password" id="confirmpass_value" class="form-control" placeholder="Confirm Password *"
                        name="confirmpassword" onkeyup="confirmpassCheck()" onclick="normal('confirmpass-field')">
                    <span id="icons">
                        <i class="fa fa-check-circle"></i>
                        <i class="fa fa-exclamation-circle"></i>
                    </span>
                    <small class="text-danger">
                        <?=!empty($passwordConfirm_error) ? $passwordConfirm_error : "<p>.</p>" ?>
                    </small>
                </div>

            </div>
            <div class="container_4">
                <div id="date-field">
                    <input type="date" id="date" class="form-control" name="dateofbirth">
                    <small class="text-danger">
                        <?=!empty($date_error) ? $date_error : "<p>.</p>" ?>
                    </small>
                </div>
                <div id="card-field">
                    <input type="text" id="card_value" placeholder="0000 0000 0000 0000" class="form-control"
                        name="creditcard" onkeypress="cardCheck()" onclick="normal('card-field')" maxlength="19"
                        maxlength="19">
                    <small class="text-danger">
                        <?=!empty($creditCard_error) ? $creditCard_error : "<p>.</p>" ?>
                    </small>
                </div>
            </div>
            <div class="text-center w-100 " style="margin-left: -20px;">
                <p>Have already account?<a href="/login">login</a></p>
            </div>
            <button>SUBMIT</button>
        </div>
</form>
</body>
<script src="views/js/main.js"></script>

</html>