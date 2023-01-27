<?php
require_once('views/partials/header.php');
?>
<img src="../../assets/bg-register-customer.png" alt="" class="background">
<form action="#" method="post">
    <div class="form_left">
        <img src="../../assets/moviso-logo1.png" class="logo_on_form" alt="" width="65%">
        <h3>WELCOME</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.Velit aut facilis autem odio
            exercitationem Lorem ipsum dolor sit amet consectetur, adipisicing elit consectetur, adipisicing elit</p>
        <div class="icon">
            <img src="../../assets/icon-google.png" alt="" width="12%">
            <img src="../../assets/icon-telegram.png" alt="" width="12%">
            <img src="../../assets/icon-twifter.png" alt="" width="12%">
        </div>
    </div>
    <div class="form_right">
        <div class="container">
            <h2>REGISTER</h2>
            <input type="text" class="form-control" placeholder="User Name *" name="username">
            <small class="form-text text-danger">
                <?php echo $userName_error; ?>
            </small>

            <input type="text" class="form-control" placeholder="Email *" name="email">
            <small class="form-text text-danger">
                <?php echo $email_error; ?>
            </small>

            <input type="password" class="form-control" placeholder="Password *" name="password">
            <small class="form-text text-danger">
                <?php echo $password_error; ?>
            </small>

            <input type="number" class="form-control" placeholder="Credit Card *" name="creditcard">
            <small class="form-text text-danger">
                <?php echo $creditCard_error; ?>
            </small>

            <input type="date" class="form-control" placeholder="Date of birth *" name="dateofbirth">
            <small class="form-text text-danger">
                <?php echo $date_error; ?>
            </small>

            <button>SUBMIT</button>
        </div>
    </div>
</form>
</body>

</html>