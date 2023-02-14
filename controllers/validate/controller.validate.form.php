
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

function validate_passwordConfirm($passwordConfirm){
    return strlen($passwordConfirm)>=8 && strlen($passwordConfirm)<=16;
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
$passwordConfirm_error = "";

$date_error = "";
$creditCard_error = "";
$phoneNumber_error = "";
$address_error="";



$title_error=false;
$price_error=false;
$genre_error=false;
$duration_error=false;
$released_error=false;
$country_error=false;
$dateTime_error=false;
$production_error=false;
$numberTicket_error=false;
$cinemaName_error=false;
$linkTrailer_error=false;
$image_error=false;
$description_error=false;


$company="";
$userName = "";
$email = "";
$password="";
$passwordConfirm="";

$date="";
$creditCard="";
$phoneNumber="";
$address="";

$title="";
$price="";
$genre="";
$duration="";
$released="";
$country="";
$dateTime="";
$production="";
$numberTicket="";
$cinemaName="";
$linkTrailer="";
$image="";
$description="";



$title_valid=false;
$price_valid=false;
$genre_valid=false;
$duration_valid=false;
$released_valid=false;
$country_valid=false;
$dateTime_valid=false;
$production_valid=false;
$numberTicket_valid=false;
$cinemaName_valid=false;
$linkTrailer_valid=false;
$image_valid=false;
$description_valid=false;



$company_valid = false;
$userName_valid = false;
$email_valid = false;
$password_valid = false;
$passwordConfirm_valid = false;
$date_valid = false;

$dateTime_valid = false;
$creditCard_valid = false;
$phoneNumber_valid = false;
$address_valid=false;


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
    $address= getDataKey('address');  
    $passwordConfirm= getDataKey('confirmpassword');   

    
    $title= getDataKey('title');
    $price= getDataKey('price');
    $genre= getDataKey('genre');
    $duration= getDataKey('duration');
    $released= getDataKey('released');
    $country= getDataKey('country');
    $dateTime= getDataKey('datetime');
    $production= getDataKey('production');
    $numberTicket= getDataKey('numberticket');
    $linkTrailer= getDataKey('linktrailer');
    
    $description= getDataKey('description');
    $cinemaName= getDataKey('cinemaname');




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


    if(empty($passwordConfirm)){
        $passwordConfirm_error = "Please confirm password here.";
    } elseif(!(validate_password($passwordConfirm))){
        $passwordConfirm_error = "password incorrect";
    }else{
        $passwordConfirm_valid=true;
    };
    if($isFound){
        $password_incorrect="Incorrect password.";
    }

    if (empty($date)){
        $date_error = "Please write a date of birth.";
    }else{
        $date_valid=true;
    };
    
    if (empty($address)){
        $address_error="Please enter a Address.";
    }else{
        $address_valid=true;
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


    if(empty($title)){
        $title_error="Please enter a title.";
    }else{
        $title_valid=true;
    };

    if(empty($price)){
        $price_error="Please enter a price.";
    }else{
        $price_valid=true;
    }

    if(empty($genre)){
        $genre_error="Please enter a genre.";
    }else{
        $genre_valid=true;
    };

    if(empty($duration)){
        $duration_error="Please enter a duration.";
    }else{
        $duration_valid=true;
    };

    if(empty($released)){
        $released_error="Please enter a released.";
    }else{
        $released_valid=true;
    };
    
    if(empty($country)){
        $country_error="Please enter a country.";
    }else{
        $country_valid=true;
    };
    
    if(empty($dateTime)){
        $dateTime_error="Please enter a country.";
    }else{
        $dateTime_valid=true;
    };

    if(empty($numberTicket)){
        $numberTicket_error="Please enter a Number Ticket.";
    }else{
        $numberTicket_valid=true;
    };

    if(empty($cinemaName)){
        $cinemaName_error="Please enter a Ciname Name.";
    }else{
        $cinemaName_valid=true;
    };

    if(empty($production)){
        $production_error="Please enter a production.";
    }else{
        $production_valid=true;
    };

    if(empty($linkTrailer)){
        $linkTrailer_error="Please enter a link trailer.";
    }else{
        $linkTrailer_valid=true;
    };

    if(empty($_FILES["image"]["name"])){
        $image_error="Please enter a image.";
    }else{
        $image_valid=true;
    };

    if(empty($description)){
        $description_error="Please enter a description.";
    }else{
        $description_valid=true;
    };
}

if ($isFound=false){
    require ("../../views/login/view.login.form.php");
}

?>
 