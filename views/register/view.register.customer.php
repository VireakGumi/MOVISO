<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER CUSTOMER</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <form action="#" method="post" >
        <div class="form-left">
            <img src="../../assets/moviso-logo1.png" alt="" width="40%">
            <h3>WELCOME</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.Velit aut facilis autem odio 
                exercitationem Lorem ipsum dolor sit amet consectetur, adipisicing elit consectetur, adipisicing elit</p>
            <div class="icon">
                <img src="../../assets/icon-google.png" alt="" width="12%">
                <img src="../../assets/icon-telegram.png" alt="" width="12%">
                <img src="../../assets/icon-twifter.png" alt="" width="12%">
            </div>
        </div>
        <div class="form-right">
            <div class="container">
                <h2>REGISTER</h2>
                <input type="text" class="form-control" placeholder="User Name *    " name="Username" >
                <small><?php echo $userName_error; ?></small>

                <input type="text" class="form-control" placeholder="Email *" name="email" >
                <small><?php echo $email_error; ?></small>

                <input type="password" class="form-control" placeholder="Password *" name="Password">
                <small><?php echo $password_error; ?></small>

                <input type="date" class="form-control" placeholder="Date of birth *" name="dateofbirth">
                <small><?php echo $date_error; ?></small>

                <input type="number" class="form-control" placeholder="Credit Card *" name="creditcard">
                <small><?php echo $phoneNumber_error; ?></small>

                <button>SUBMIT</button>
            </div>
        </div>
    </form>
</body>

</html>