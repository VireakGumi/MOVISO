<?php
require("views/partials/header.php");
$id = $_GET['id'];
$movie = getMoiveById($id);
$tickets = getTicketByMovieID($id);
$ticket = [];
foreach($tickets as $value){
    $seatoken = $value['row'] . $value['seat'];
    array_push($ticket, $seatoken);
}
$row = ['F', 'E', 'D', 'C', 'B', 'A'];

?>


<body class="bg-dark text-white">
    <img src="../../assets/background/cinema.png" alt="" class="background">
    <div class="container row" id="container">
        <form method="post" class="row d-flex justify-content-center w-100 col-5" id="form">
            <div class="col-xl-7 col-lg-8 col-md-9 col-sm-11">
                <div class="card-ticket border-0">
                    <div class="d-flex justify-content-center mt-2">
                        <img class="" src="../../assets/logo/moviso-logo1.png" class="" width=150 height="50">
                    </div>
                    <h3 class="mt-2 credit-card">Credit Card Checkout</h3>
                    <div class="row">
                        <input type="hidden" name="id" id="id" value="<?= $id ?>">
                        <input type="hidden" name="price" id="price" value="<?= $movie['prices'] ?>">
                        <div class="col-sm-7 border-line pb-2 px-5">
                            <div class="form-group">
                                <p class="text-ticket text-sm mb-0">Name on the card*</p>
                                <input type="text" name="name" placeholder="Name" class="width-card" id="userame">
                            </div>
                            <div class="form-group d-flex mt-2 ">
                                <div id="card-field">
                                    <p class="text-ticket text-sm mb-0">Card Number*</p>
                                    <input type="text" name="card-num" id="card_value" placeholder="0000 0000 0000 0000"
                                        width="55" class="width-card" maxlength="19">

                                </div>
                                <div class="mt-4">
                                    <p class="ms-5">/</p>
                                </div>
                                <div class="mt-3">
                                    <img class="" src="../../assets/logo/ticketcard.png" width='55'>
                                </div>
                            </div>
                            <p class="text-ticket text-sm mb-0 mt-2">Quantity*</p>

                            <div class="form-group d-flex">
                                <div class="col-md-3 col-lg-3 col-xl-2 d-flex width-card">
                                    <input id="quantity" name="quantity" data-index="1" type="number" maxlength="3"
                                        class="from-control width-card" />
                                </div>
                            </div>
                            <div class="form-group">
                                <p class="text-ticket text-sm mb-0">Seat*</p>
                                <input type="text" name="seat" placeholder="Row and seat" class="width-card" id='seat'>
                            </div>
                            <button type="button" class="width-card mt-4 ms-0" onclick="show('#seat_form')">Choose
                                Seat</button>

                            <div class="form-group mb-0">
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input type="checkbox" name="chk" class="mt-4">
                                    <label class="">save my card for future payment</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-5 text-sm-center  pt-3 pb-3 b">
                            <small class="text-sm text-ticket">Order number</small>
                            <h5 class="mb-5"><?= count($ticket) ?></h5>
                            <small class="text-sm text-ticket">Payment amount</small>
                            <div class="row px-3 justify-content-sm-center">
                                <h2 class=""><span class="text-md font-weight-bold mr-2">$</span><span id="showPrice">
                                        0
                                    </span></h2>
                            </div>
                            <button type="submit" id="confirm" class="mt-4 px-4 ms-3">PAY NOW</button>
                            <p id="text"></p>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <dialog class="seats me-3 mt-5 col-2  " id="seat_form" style="display: none;">
            <h1 class="text-white my-4 fw-bold">Choose your Seat</h1>
            <div>
                <iframe src="<?= $movie['trailer']?>" frameborder="0" class="w-100"></iframe>
            </div>
            <div class="select_seat my-4">

                <?php
                $seatNumber = 0;
                foreach ($row as $key):
                    ?>
                    <div class="row d-flex">
                        <h5​ class="text-white d-flex pe-3 align-items-center">
                            <?= $key ?>
                            </h5>
                            <?php
                            for ($col = 1; $col <= 8; $col++):
                                $seat = $key . $col; 
                                    if(in_array($seat ,$ticket)){

                                        ?>
                                        <label  class="px-2 py-1">
                                            <img src="../../assets/logo/sit.png" alt="" class="aSeat">
                                        </label>
                                        
                                        <?php
                                    }else{
                                        ?>
                                        <label for="selector<?=$seat; ?>" class="px-2 py-1">
                                            <input type="checkbox" value="<?= $seat ?>" hidden class="selector"
                                                id="selector<?= $seat ?>" name="selector"  >
                                            <img src='../../assets/logo/seat.png' alt="" id="img" class="aSeat"
                                                data-index=<?= $col ?>>
                                        </label>
                                        <?php
 
                                    }

                            endfor;
                            ?>
                            <h5 class="text-white mr-0">
                                <?= $key ?>
                                </h5>
                    </div>
                    <?php
                endforeach;
                ?>
            </div>
            <div class="introction d-flex text-white text-center">
                <div class="chair">
                    <img src="../../assets/logo/seat.png" alt="" class="">
                    <h5>Avairable</h5>
                </div>
                <div class="chair">
                    <img src="../../assets/logo/selected.png" alt="" class="">
                    <h5>Selected</h5>
                </div>
                <div class="chair">
                    <img src="../../assets/logo/sit.png" alt="" class="">
                    <h5>Unselect</h5>
                </div>
            </div>
            <div class="my-4">
                <button onclick="hide('#seat_form')">Close</button>
            </div>
    </div>
    </dialog>
    </div>

</body>

<script src="views/js/cute-alert.js"></script>
<script src="views/js/main.js"></script>

</html>