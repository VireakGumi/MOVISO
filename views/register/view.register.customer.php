<?php require("../partials/head.php"); ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER CUSTOMER</title>
    <link rel="stylesheet" href="../../views/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../views/css/style.css">
</head>

<body>
    <img src="../../assets/bg-register-customer.png" alt="" class="background">
    <form action="#" method="post" >
        <div class="form_left">
            <img src="../../assets/moviso-logo1.png" class="logo_on_form" alt="" width="65%">
            <h3>WELCOME</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.Velit aut facilis autem odio 
                exercitationem Lorem ipsum dolor sit amet consectetur, adipisicing elit consectetur, adipisicing elit</p>
            <div class="icon">
                <img src="../../assets/google_PNG102344.png" alt="" width="11%">
                <img src="../../assets/Telegram-Logo-PNG-Photo.png" alt="" width="12%">
                <img src="../../assets/twitter.png" alt="" width="12%">
            </div>
        </div>
        <div class="form_right">
            <div class="container">
                <h2 class="text-center">REGISTER</h2><br>
                <input type="text" class="form-control" placeholder="User Name *" name="Username" >
                <!-- <small><?php echo $userName_error; ?></small> -->

                <input type="text" class="form-control" placeholder="Email *" name="email" >
                <small class="form-text text-danger"><?php echo $email_error; ?></small>

                <input type="password" class="form-control" placeholder="Password *" name="password">
                <small class="form-text text-danger"><?php echo $password_error; ?></small>

                <input type="number" class="form-control" placeholder="Credit Card *" name="creditcard">
                <!-- <small><?php echo $phoneNumber_error; ?></small> -->
                
                <button>SUBMIT</button>
            </div>
        </div>
    </form>
<?php require("../partials/footer.php"); ?>