<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER CUSTOMER</title>
    <link rel="stylesheet" href="../../views/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../views/css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <div class="list">
        <div class="search">
            <h5 class="text-white">CATEGROY</h5>
            <input type="search" placeholder="Search">
            <i class="material-icons ">search</i>
        </div>
        <div class="choose">
            <button class="hover-zoom"><i class="material-icons">chevron_left</i></button>
            <button class="btn-top"><a href="" class="text-decoration-none  ">ALL MOVIES</a> </button>
            <button><a href="" class="text-decoration-none ">ACTION</a> </button>
            <button><a href="" class="text-decoration-none">COMEDY</a> </button>
            <button><a href="" class="text-decoration-none">CRIME</a> </button>
            <button><a href="" class="text-decoration-none">SHOW</a> </button>
            <button><i class="material-icons">chevron_right</i></button>
        </div>
        <div class="allcard">

            <?php  
            foreach($movies as $movie){
            ?>

            <div class="card" style="width: 18rem;">
                <a href="../../views/home/view.home.php" class="text-decoration-none" name=""
                    onclick="<?php $_SESSION['movie_id'] = $movie["movie_id"] ?>">

                    <img class="card-img-top" src="../../assets/seller-form.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title text-white"><?= $movie["movie_title"];?></h5>
                        <p class="card-text text-white"><?= $movie["decription"]; ?></p>
                    </div>
                </a>
            </div>

            <?php
            }
            ?>

        </div>

    </div>
</body>