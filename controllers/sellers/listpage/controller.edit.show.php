<?php 
require ("controllers/validate/controller.validate.form.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
      $id = $_POST["id"];
      $venueID = $_POST["venueId"];
      $title = $_POST["title"];
      $price = $_POST["price"];
      $genre = $_POST["genre"];  
      $duration = $_POST["duration"];
      $released = $_POST["released"];
      $country = $_POST["country"];
      $dateTime = $_POST["datetime"];
      $name = $_POST["cinemaname"];
      $production = $_POST["production"];
      $address = $_POST["address"];
      $trailer = $_POST["linktrailer"];
      $numberTicket = $_POST["numberticket"];
      $old = $_POST["oldImage"];
      $img = $_FILES['image']['name'];
      $description = $_POST["description"];
      if($img!="") {
        move_uploaded_file($_FILES['image']['tmp_name'],'assets/'.$img);
      }else if($old != "") {
        $img = $old;
        $image_valid = true;
      }
      if($title_valid && $genre_valid && $duration_valid && $released_valid && $dateTime_valid &&  $numberTicket_valid && $address_valid && $numberTicket_valid && $image_valid && $description_valid && $price_valid &&  $country_valid && $cinemaName_valid && $production_valid && $linkTrailer_valid && $dateTime_valid){
          updateMovie($id, $title, $genre, $price, $released, $duration, $numberTicket, $dateTime, $description, $country, $production, $trailer, $img);        
          updateVenue($venueID,$name,$address);
          header("Location:/");
      }else{
          $path = "/edit?id=".$id;
          header("Location:$path");
        }
    }