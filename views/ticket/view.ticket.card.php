
<?php
// require("views/partials/header.php");
foreach($tickets as $ticket){
    $movie = getMoveiByID($ticket['movies_id']);
    $dateTime = explode(' ', $movie['date_time']);;
    $date = $dateTime[0];
    $time = $dateTime[1];
   ?>
    <div class="container d-flex mt-5">
        <div class="big_card_right bg-danger ps-2 pt-2 pb-2">
            <div class="sub_card_right bg-white p-3 d-flex">
                <div class="ms-2">
                    <img src="../../assets/moviso-logo.png" alt="" class="w-50 mt2" width="100px">
                    <div class="about_show mt-5 w-75">
                        <h5 class="fw-bold">TICKET PRICE: <?= $movie['prices']?></h5>
                        <h5 class="fw-bold">DATE: <?= $date ?></h5>
                        <h5 class="fw-bold">TIME: <?= $time ?></h5>
                    </div>
                    <div class="place_of_seat d-flex mt-5">
                        <div class="gate">
                            <h5 class="fw-bold"><?=$ticket['gate']?></h5>
                        </div>
                        <div class="row ms-5">
                            <h5 class="fw-bold"><?=$ticket['row']?></h5>
                        </div>
                        <div class="seat">
                            <h5 class="fw-bold"><?=$ticket['seat']?></h5>
                        </div>
                    </div>
                </div>
                <img src="../../assets/Movie-Icon.png" alt="" class="w-50 me-3">
            </div>
        </div>
        <div class="big_card_left bg-white pe-2 pt-2 w-75">
            <div class="sub_card_left bg-danger p-4 text-center">
                <div class="scan pb-1">
                    <h1>ADMIT ONE</h1>
                    <img src="../../assets/qr_code.png" alt="" class="w-75">
                    <h5 class="mt-2">DA4 233 344 455 566</h5>
                </div>
            </div>
        </div>
    </div>
    <?php
}
