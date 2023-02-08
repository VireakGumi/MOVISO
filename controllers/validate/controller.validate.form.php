
<?php

$users = getUser();
$isFound=false;
$isFoundEmail=false;

if (isset($_POST["password"]) && ($_POST["email"]))
{
    foreach ($users as $user):
        
        if (!empty($_POST["password"]) && !empty($_POST["email"]))
        {
            if($user["password"] !==$_POST["password"])
            {
              $isFound=true;

            }if (($user["email"] !== $_POST["email"])){
                $isFound=true;
            }
            if($user["email"] == $_POST["email"]){
                $isFoundEmail=true;
            }
        }    
    endforeach;
}



function validate_userName($userName){
    return ctype_alnum($userName) && ctype_alpha($userName[0]);

}

function validate_company($company){
    return strlen($company)<10;
}

function validate_email($email){
 
        return filter_var($email, FILTER_VALIDATE_EMAIL); 
}

function validate_password($password){
    return strlen($password)>=8 && strlen($password)<=16;
}

function validate_creditCard($creditCard){
    return strlen($creditCard) == 16 ;
} 
function validate_numberTicket($numberTicket){
    return strlen($numberTicket) == 50 ;
} 

function validate_phonenumber($phoneNumber){
    return strlen($phoneNumber)>16;
}


$userName_error = "";
$company_error = "";
$email_error = "";
$email_incorrect = "";  
$password_error = "";
$password_incorrect = "";
$date_error = "";
$creditCard_error = "";
$phoneNumber_error = "";
$location_error="";


$company="";
$userName = "";
$email = "";
$password="";
$date="";
$creditCard="";
$phoneNumber="";
$location="";


$company_valid = false;
$userName_valid = false;
$email_valid = false;
$password_valid = false;
$date_valid = false;
$creditCard_valid = false;
$phoneNumber_valid = false;
$location_valid=false;


function getDataKey($key){
    if (isset($_POST[$key])){
        $value = $_POST[$key];
        return $value;
    }
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $userName= getDataKey('username'); 
    $email= getDataKey('email'); 
    $password= getDataKey('password');  
    $date= getDataKey('dateofbirth'); 
    $creditCard= getDataKey('creditcard'); 
    $phoneNumber= getDataKey('phonenumber'); 
    $company= getDataKey('company'); 
    $location= getDataKey('location'); 


    if (empty($userName)){
        $userName_error="Please enter a user name";
    }elseif(validate_userName($userName)){
        $userName_error="Username should contains only letters and first letters isuppercase";
    }else{
        $userName_valid=true;
    };
    
    if(empty($comany)){
        $company_error="Please enter a company";
    }elseif((validate_company($comany))){
        $company_error="Company must be at least more than or equal 10";
    }else{
        $company_valid=true;
    };

    if(empty($email)){
        $email_error="Please enter an email.";
    }elseif($isFoundEmail){
        $email_error = "Email must be not exits.";
    }elseif ((!validate_email($email))) {
        $email_error = "Email must contain '@'.";
    }else{
        $email_valid=true;
    };
    
    if($isFound){
        $email_incorrect="Incorrect email.";
    }
   

    if(empty($password)){
        $password_error = "Please write your password here.";
    } elseif(!(validate_password($password))){
        $password_error = "password must be more than or equal 8.";
    }else{
        $password_valid=true;
    };

    if($isFound){
        $password_incorrect="Incorrect password.";
    }

    if (empty($date)){
        $date_error = "Please write a date of birth.";
    }else{
        $date_valid=true;
    };
    
    if (empty($location)){
        $location_error="Please enter a location.";
    }else{
        $location_valid=true;
    };
    

    if (empty($creditCard)){
        $creditCard_error= "Please write your credit card number.";
    }elseif(!(validate_creditCard($creditCard))){
        $creditCard_error= "Credit card must be 16 numbers.";
    }else{
        $creditCard_valid=true;
    };


    if (empty($phoneNumber)){
        $phoneNumber_error = "Please write your phonenumber.";
    }elseif(validate_phonenumber($phoneNumber)){
        $phoneNumber_error = "Phone number must be at least more than or equal 16.";
    }else{
        $phoneNumber_valid=true;
    };

}
if ($isFound=false){
    require ("../../views/login/view.login.form.php");
}

?>
