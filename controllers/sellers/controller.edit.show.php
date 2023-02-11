<?php 
  require "../../database/database.php";
  require "../../model/model.php";
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $title = $_POST["title"];
      $price = $_POST["price"];
      $genre = $_POST["genre"];  
      $duration = $_POST["duration"];
      $released = $_POST["released"];
      $country = $_POST["country"];
      $dateTime = $_POST["datetime"];
      $name = $_POST["name"];
      $production = $_POST["production"];
      $address = $_POST["address"];
      $trailer = $_POST["trailer"];
      $numberTicket = $_POST["numberticket"];
      $old = $_POST["oldImage"];
      $img = $_FILES['image']['name'];
      if($img!="") {
        move_uploaded_file($_FILES['image']['tmp_name'],'../../assets/'.$img);
      } else {
        $img = $old;
      }
      $description = $_POST["description"];
      $id = $_POST["id"];

        updateMovie($id, $title, $genre, $price, $released, $duration, $numberTicket, $dateTime, $description, $country, $production, $trailer, $img);        
        updateVenue($id,$name,$address);
        header("Location:/");
      
  }
  require_once "../../views/sellers/view.edit.show.php";