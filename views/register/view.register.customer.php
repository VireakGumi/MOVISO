<?php require("views/partials/header.php"); ?>

    <img src="../../assets/bg-register-customer.png" alt="" class="background">
    <form action="#" method="post">
        <div class="form_left">
            <img src="../../assets/moviso-logo1.png" class="logo_on_form" alt="" width="65%">
            <h3>Welcome</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.Velit aut facilis autem odio
                exercitationem Lorem ipsum dolor sit amet consectetur, adipisicing elit consectetur, adipisicing elit
            </p>
            <div class="icon">
                <img src="../../assets/icon-google.png" alt="" width="12%">
                <img src="../../assets/icon-telegram.png" alt="" width="12%">
                <img src="../../assets/icon-twifter.png" alt="" width="12%">
            </div>
        </div>
        <div class="form_right">
            <div class="container ">
                <h2 class="text-center">REGISTER</h2>

                <div id="user-field">
                    <input type="text" id="user_value" class="form-control" placeholder="User Name *" name="username"
                        onkeyup="userNameCheck()" onclick="normal('user-field')">
                    <span id="icons">
                        <i class="fa fa-check-circle"></i>
                        <i class="fa fa-exclamation-circle"></i>
                    </span>
                    <small class="text-danger">
                        <?php echo $userName_error; ?>
                    </small>
                </div>

                <div id="email-field">
                    <input type="email" id="email_value" class="form-control" placeholder="Email *" name="email"
                        onkeyup="emailCheck()" onclick="normal('email-field')">
                    <span id="icons">
                        <i class="fa fa-check-circle"></i>
                        <i class="fa fa-exclamation-circle"></i>
                    </span>
                    <small class="text-danger">
                        <?php echo $email_error; ?>
                    </small>
                </div>

                <div id="password-field">
                    <input type="password" id="password_value" class="form-control" placeholder="Password *"
                        name="password" onkeyup="passwordCheck()" onclick="normal('password-field')">
                    <span id="icons">
                        <i class="fa fa-check-circle"></i>
                        <i class="fa fa-exclamation-circle"></i>
                    </span>
                    <small class="text-danger">
                        <?php echo $password_error; ?>
                    </small>
                </div>

                <div id="confirmpass-field">
                    <input type="password" id="confirmpass_value" class="form-control" placeholder="Confirm Password *"
                        name="confirmpasssword" onkeyup="confirmpassCheck()" onclick="normal('confirmpass-field')">
                    <span id="icons">
                        <i class="fa fa-check-circle"></i>
                        <i class="fa fa-exclamation-circle"></i>
                    </span>
                    <small class="text-danger">
                        <!-- <?php echo $confirmpassword_error; ?> -->
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
                        <?php echo $phoneNumber_error; ?>
                    </small>
                </div>
                <input type="date" id="date" class="form-control" name ="dateofbirth"   >
                
                <input type="text" id="address_value" class="form-control" placeholder= "Address *" name ="address">
               
                <div id="card-field">
                    <input type="text" id="card_value" placeholder="0000 0000 0000 0000" class="form-control" 
                        name="creditcard" onkeyup="cardCheck()" onclick="normal('card-field')">
                    <small class="text-danger">
                        <!-- <?php echo $creditcard_error; ?> -->
                    </small>
                </div>

                <button>SUBMIT</button>

                <p>Have already an account? <a href="login">login here</a></p>

            </div>
        </div>
        </div>
    </form>
</body>
<script src="views/js/main.js"></script>

</html>