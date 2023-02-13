<?php require("views/partials/header.php"); ?>

<div class="container-fluid mx-auto w-100">
    <img src="../../assets/cinema.png" alt="" class="background">
        <form action="#" method="post"class="row d-flex justify-content-center w-100">
            <div class="col-xl-7 col-lg-8 col-md-9 col-sm-11" >
                <div class="card-ticket border-0">
                    <div class="d-flex justify-content-center mt-2">
                        <img class="" src="../../assets/moviso-logo1.png" class="" width=150 height="50">
                    </div>
                    <h3 class="mt-2 credit-card">Credit Card Checkout</h3>
                    <div class="row">
                        <div class="col-sm-7 border-line pb-2 px-5">
                            <div class="form-group">
                                <p class="text-ticket text-sm mb-0">Name on the card*</p>
                                <input type="text" name="name" placeholder="Name" class="width-card">
                            </div>
                            <small class="text-danger">

                                <?=$cardName_error?>
                              
                            </small>
                            <div class="form-group d-flex mt-2 ">
                                <div id="card-field">
                                    <p class="text-ticket text-sm mb-0">Card Number*</p>
                                    <input type="text" name="card-num" id="card_value" placeholder="0000 0000 0000 0000" width="55" class="width-card" onkeypress="cardCheck()" onclick="normal('card-field')"  maxlength="19">
                                    
                                </div>
                                <div class="mt-4">
                                    <p class="ms-5">/</p>
                                </div>
                                <div class="mt-3">
                                    <img class="" src="../../assets/ticketcard.png" width='55'>
                                </div>
                            </div>
                            <small class="text-danger w-100">
                                        <?=$cardNumber_error?>
                            </small>
                            <p class="text-ticket text-sm mb-0 mt-2">Quantity*</p>
                            
                            <div class="form-group d-flex">
                                <div class="col-md-3 col-lg-3 col-xl-2 d-flex width-card">
                                    <input id="form1"  name="quantity" value="1" type="number" maxlength="3" class="from-control width-card"/>
                                </div>
                            </div>
                            <small class="text-danger">
                               
                                <?=$quantityTicket_error?>
                            </small>
                            <button type="submit" class="width-card mt-4 ms-0">Choose sit</button>
                            <div class="form-group mb-0">
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input type="checkbox" name="chk" class="mt-4" > 
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
                            <button type="submit" id="confirm" class="mt-4 px-4 ms-3">PAY NOW</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 
</div>
<script>
    var cardNum = document.getElementById('card_value');
    cardNum.onkeyup = function (e) {
        if (this.value == this.lastValue) return;
        var caretPosition = this.selectionStart;
        var sanitizedValue = this.value.replace(/[^0-9]/gi, '');
        var parts = [];

        for (var i = 0, len = sanitizedValue.length; i < len; i += 4) {
            parts.push(sanitizedValue.substring(i, i + 4));
        }

        for (var i = caretPosition - 1; i >= 0; i--) {
            var c = this.value[i];
            if (c < '0' || c > '9') {
                caretPosition--;
            }
        }
        caretPosition += Math.floor(caretPosition / 4);

        this.value = this.lastValue = parts.join(' ');
        this.selectionStart = this.selectionEnd = caretPosition;
    }
    $('#confirm').click(function () {
    cuteAlert({
        type: "question",
        title: "Ticket",
        message: "Are you sure you want to confirm",
        confirmText: "Confirm",
        cancelText: "Cancel"
    }).then((e) => {
        if (e == ("confirm")) {
            cuteToast({
                type: "success",
                title: "Confirmed",
                message: "You succes to buy the ticket ",
                timer: 3000
            })
            $.ajax({
                url: "test.php",
                method: "POST",
                data: { moives_id: movies_id, },
                success: function (result) {
                    $("#test").html(result);
                }

            })
        }
    })
})
</script>