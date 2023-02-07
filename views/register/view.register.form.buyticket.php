<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BuyTicket</title>
    <link rel="stylesheet" href="../../views/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../views/css/style.css">
</head>

<div class="container-fluid px-1 py-5 mx-auto">
    <img src="../../assets/cinema.png" alt="" class="background">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-9 col-sm-11" >
                <div class="card-ticket border-0">
                    <div class="d-flex justify-content-center mt-2">
                        <img class="" src="../../assets/moviso-logo1.png" class="" width=150 height="50">
                    </div>
                    <h3 class="mt-2">Credit Card Checkout</h3>
                    <div class="row">
                        <div class="col-sm-7 border-line pb-4 px-5">
                            <div class="form-group">
                                <p class="text-ticket text-sm mb-0">Name on the card</p>
                                <input type="text" name="name" placeholder="Name" >
                            </div>
                            
                            <div class="form-group d-flex mt-2">
                                <div>
                                    <p class="text-ticket text-sm mb-0">Card Number</p>
                                    <input type="text" name="card-num" placeholder="0000 0000 0000 0000" width="40">
                                </div>
                                <div class="mt-4">
                                    <p class="ms-4">/</p>
                                </div>
                                <div class="mt-3">
                                    <img class="" src="../../assets/ticketcard.png" width='40'>
                                </div>
                            </div>
                            <div class="form-group">
                                <p class="text-ticket text-sm mb-0">Expiry date</p>
                                <input type="text" name="exp" placeholder="MM/YY" >
                            </div>
                            <div class="form-group">
                                <p class="text-ticket text-sm mb-0 mt-3">CVV/CVC</p>
                                <input type="password" name="cvv" placeholder="000">
                            </div>
                            <div class="form-group mb-0">
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input type="checkbox" name="chk" class="mt-4" checked> 
                                    <label class="">save my card for future payment</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-5 text-sm-center  pt-3 pb-3 b">
                            <small class="text-sm text-ticket">Order number</small>
                            <h5 class="mb-5">12345678</h5>
                            <small class="text-sm text-ticket">Payment amount</small>
                            <div class="row px-3 justify-content-sm-center">
                                <h2 class=""><span class="text-md font-weight-bold mr-2">$</span><span class="text-danger">25.49</span></h2>
                            </div>
                            <button type="submit" class="mt-4 px-4 ms-3">PAY NOW</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>