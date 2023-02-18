<?php
$id = $_GET['id'];
$movie = getMoiveById($id);
require("views/partials/header.php");
?>

<div class="container-fluid mx-auto w-100">
    <img src="../../assets/background/cinema.png" alt="" class="background">
    <form method="post" class="row d-flex justify-content-center w-100" id="form">
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
                                <input id="form1" name="quantity" id="well" value="1" type="number" maxlength="3"
                                    class="from-control width-card" onkeyup="count(this)" />
                            </div>
                        </div>
                        <button type="submit" class="width-card mt-4 ms-0">Choose sit</button>
                        <div class="form-group mb-0">
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" name="chk" class="mt-4">
                                <label class="">save my card for future payment</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5 text-sm-center  pt-3 pb-3 b">
                        <small class="text-sm text-ticket">Order number</small>
                        <h5 class="mb-5">12345678</h5>
                        <small class="text-sm text-ticket">Payment amount</small>
                        <div class="row px-3 justify-content-sm-center">
                            <h2 class=""><span class="text-md font-weight-bold mr-2">$</span><span id="showPrice">
                                    <?= $movie['prices'] ?>
                                </span></h2>
                        </div>
                        <button type="submit" id="confirm" class="mt-4 px-4 ms-3">PAY NOW</button>
                        <p id="text"></p>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>


<script src="views/js/cute-alert.js"></script>
<script src="views/js/main.js"></script>
