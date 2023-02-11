<?php


require ("controllers/validate/controller.validate.form.php");
$isFound=false;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if($title_valid && $price_valid && $description_valid && $price_valid && $genre_valid && $country_valid && $duration_valid && $production_valid && $linkTrailer_valid && $cinemaName_valid && $numberTicket_valid && $address_valid && $image_valid){

        $image = $_FILES['image']['name'];
        $image_tmp_name=$_FILES['image']['tmp_name'];
        $image_folder='assets/'. $image;
        move_uploaded_file($image_tmp_name, $image_folder);
      
        $venueId=newVenue($_POST["cinemaname"],$_POST["address"]);
        
        createShow($venueId,$_POST["title"],$_POST["numberticket"],$_POST["datetime"],$_POST["description"],$_POST["genre"],$_POST["duration"],$_POST["released"],$_POST["country"],$_POST["production"],$_POST["linktrailer"],$image,$_POST["price"],);
        $isFound=true;

    }
       
    
    
    if($isFound){
        header("Location: / ");
    }
    
}

require ("views/sellers /newshow/view.add.movie.php");