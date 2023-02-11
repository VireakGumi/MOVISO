<?php
require_once('views/partials/navbar.php');
?>
<div class="container text-white" style="margin-top:100px;">
    <div class="container_1 m-5 ms-0 d-flex justify-content-evenly w-100">
        <img src="<?= $img ?>" alt="" width="500px">
        <div class="movie_information w-100 m-5 mt-0">
            <h1 class="mt-5 mb-5">
                <?= $movie_name ?>
            </h1>
            <div class="genre d-flex mt-5">
                <h5 class="">GENRE:</h5>
                <a href="#" class="ms-5 text-white">
                    <?= $genre ?>
                </a>
            </div>
            <div class="duration d-flex mt-5">
                <h5 class="">DURATION:</h5>
                <p class="ms-5">
                    <?= $duration ?>
                </p>
            </div>
            <div class="released d-flex mt-5">
                <h5>RELEASED:</h5>
                <P class="ms-5">
                    <?= $released ?>
                </P>
            </div>
            <div class="country d-flex mt-5">
                <h5>COUNTRY:</h5>
                <a href="#" class="ms-5 text-white">
                    <?= $country ?>
                </a>
            </div>
            <div class="production d-flex mt-5">
                <h5>PRODUCTION:</h5>
                <a href="#" class="ms-5 text-white">
                    <?= $production ?>
                </a>
            </div>
            <div class="me-5 mt-5">
                <button>Ticket</button>
            </div>
        </div>
    </div>
    <div class="production d-flex mt-5">
        <h5>DESCRIPTION:</h5>
        <p class="ms-5 text-white"><?=$description?></p>
    </div>
    <div class="trailer">
        <hr class=" w-100 border border-2">
        <iframe class="w-100 mt-4" width="560" height="500" src=<?= $trailer ?> title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>
        <div class="vote mt-3">
            <img src="../../assets/like.png" alt="">
            <label class="ms-3" for="">0</label>
            <img class="ms-5" src="../../assets/unlike.png" alt="">
            <label class="ms-3" for="">0</label>
        </div>
    </div>
    <div class="select_or_view_date mt-4">
        <div class="select d-flex w-100">
            <h6 class="bg-secondary p-2 w-50 text-center">RESERVE/ BUY</h6>
            <h6 class="seat p-2 w-50 text-center">SELECT A SEAT</h6>
            <h6 class="showtime p-2 w-50 text-center text-dark">SELECT SHOWTIME</h6>
        </div>
        <div class="date d-flex mt-3">
            <h6 class="bg-danger rounded-pill p-2 pe-3 ps-3">TODAY</h6>
            <i class="material-icons ms-3 me-3">chevron_left</i>
            <hr>
            <h6><span class="ms-3 me-3">|</span> 29-JAN <span class="ms-3 me-3">|</span></h6>
            <hr>
            <h6>30-JAN <span class="ms-3 me-3">|</span></h6>
            <i class="material-icons ms-3 me-3">chevron_right</i>
        </div>
        <div class="card_showtime w-100 rounded mt-3 p-3 mb-5">
            <div class="card_header d-flex justify-content-around">
                <div class="logo_theatre d-flex m-3">
                    <img src="../../assets/moviso-logo-removebg-preview.png" alt="" class="card_logo">
                    <h6 class="mt-4 ms-5">MAJOR CINEPLEX AEON MALL PHNOM PENH</h6>
                </div>
                <h6 class="m-4">2D</h6>
            </div>
            <div class="time d-flex mb-4">
                <h6 class="me-5 p-2 bg-danger ps-3 pe-3 rounded-pill">11:00 AM</h6>
                <h6 class="me-5 p-2 bg-secondary ps-3 pe-3 rounded-pill">15:00 PM</h6>
            </div>
        </div>
        <div class="card_showtime w-100 rounded mt-3 p-3 mb-5">
            <div class="card_header d-flex justify-content-around">
                <div class="logo_theatre d-flex m-3">
                    <img src="../../assets/moviso-logo-removebg-preview.png" alt="" class="card_logo">
                    <h6 class="mt-4 ms-5">MAJOR CINEPLEX AEON MEAN CHEY</h6>
                </div>
                <h6 class="m-4">2D</h6>
            </div>
            <div class="time d-flex mb-4">
                <h6 class="me-5 p-2 bg-danger ps-3 pe-3 rounded-pill">11:00 AM</h6>
                <h6 class="me-5 p-2 bg-secondary ps-3 pe-3 rounded-pill">15:00 PM</h6>
            </div>
        </div>
        <div class="card_showtime w-100 rounded mt-3 p-3 mb-5">
            <div class="card_header d-flex justify-content-around">
                <div class="logo_theatre d-flex m-3">
                    <img src="../../assets/moviso-logo-removebg-preview.png" alt="" class="card_logo">
                    <h6 class="mt-4 ms-5">MAJOR CINEPLEX AEON SEN SOK</h6>
                </div>
                <h6 class="m-4">2D</h6>
            </div>
            <div class="time d-flex mb-4">
                <h6 class="me-5 p-2 bg-danger ps-3 pe-3 rounded-pill">11:00 AM</h6>
                <h6 class="me-5 p-2 bg-secondary ps-3 pe-3 rounded-pill">15:00 PM</h6>
            </div>
        </div>
    </div>
</div>
<?php
require_once('views/partials/footer.php');
?>