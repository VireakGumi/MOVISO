<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER CUSTOMER</title>
    <link rel="stylesheet" href="views/css/bootstrap.min.css">
    <link rel="stylesheet" href="views/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <img src="../../assets/bg-register-customer.png" alt="" class="background">
    <form action="#" method="post" >
        <div class="form_left">
            <img src="../../assets/moviso-logo1.png" class="logo_on_form" alt="" width="65%">
            <h3>Welcome</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.Velit aut facilis autem odio 
                exercitationem Lorem ipsum dolor sit amet consectetur, adipisicing elit consectetur, adipisicing elit</p>
            <div class="icon">
                <img src="../../assets/icon-google.png" alt="" width="12%">
                <img src="../../assets/icon-telegram.png" alt="" width="12%">
                <img src="../../assets/icon-twifter.png" alt="" width="12%">
            </div>
        </div>
        <div class="form_right">
            <div class="container ">
                <h2 class="text-center">REGISTER</h2>

                <div id="user-field" >
                    <input type="text" id ="user_value" class="form-control" placeholder="User Name *" name="" onkeyup="username()" onclick="normal('user-field')">
                    <span id="icons">
                        <i class="fa fa-check-circle"></i>
                        <i class="fa fa-exclamation-circle"></i>
                    </span>
                    <small class="text-danger"><?php echo $userName_error; ?></small>
                </div>

                <div id="email-field" >
                    <input type="email" id ="email_value" class="form-control" placeholder="Email *" name="" onkeyup="email()" onclick="normal('email-field')">
                    <span id="icons">
                        <i class="fa fa-check-circle"></i>
                        <i class="fa fa-exclamation-circle"></i>
                    </span>
                    <small class="text-danger"><?php echo $email_error; ?></small>
                </div>

                <div id="password-field" >
                    <input type="password" id ="password_value" class="form-control" placeholder="Password *" name="" onkeyup="password()" onclick="normal('password-field')">
                    <span id="icons">
                        <i class="fa fa-check-circle"></i>
                        <i class="fa fa-exclamation-circle"></i>
                    </span>
                    <small class="text-danger"><?php echo $password_error; ?></small>
                </div>

                <div id="phone-field" >
                    <input type="text" id ="phone_value" class="form-control" placeholder="Phone Number *" name="" onkeyup="phone()" onclick="normal('phone-field')">
                    <span id="icons">
                        <i class="fa fa-check-circle"></i>
                        <i class="fa fa-exclamation-circle"></i>
                    </span>
                    <small class="text-danger"><?php echo $phoneNumber_error; ?></small>
                </div>

    
                <button>SUBMIT</button>
                
            </div>
        </div>
    </form>
    <script src="views/js/main.js"></script>
</body>

</html>
