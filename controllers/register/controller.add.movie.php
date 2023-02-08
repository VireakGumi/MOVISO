<?php


require ("controllers/validate/controller.validate.form.php");
$isFound=false;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if($title_valid && $price_valid && $description_valid && $price_valid && $genre_valid && $country_valid && $duration_valid && $prodution_valid && $linkTrailer_valid && $image_valid && $cinemaName_valid && $numberTicket_valid && $address_valid){
        createShow($_POST["title"],$_POST["numberticket"],$_POST["datetime"],$_POST["description"],$_POST["genre"],$_POST["duration"],$_POST["released"],$_POST["country"],$_POST["prodution"],$_POST["trailer"],$_FILES["image"]["name"],$_POST["price"],);
        newVenue($_POST["cinemename"],$_POST["address"]);
        $isFound=true;
    }
       
    
    
    if($isFound){
        header("Location: / ");
    }
    
}

require ("views/register/view.add.movie.php");