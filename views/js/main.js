function userNameCheck() {
    var userName = document.getElementById('user_value').value;
    var conditionUsername = /^[A-Z]{1}[a-z-A-Za" "]{3,}$/;
    if (conditionUsername.test(userName)) {
        document.querySelector('#user-field').classList = "success";
    } else {
        document.querySelector('#user-field').classList = "fail";
    }
}

function emailCheck() {
    var email = document.getElementById('email_value').value;
    var conditionEmial = /^[a-z._]{2,}@[a-z]{3,}[.]{1,}[a-z.]{2,}$/;
    if (conditionEmial.test(email)) {
        document.querySelector('#email-field').classList = "success";
    } else {
        document.querySelector('#email-field').classList = "fail";
    }
}

function passwordCheck() {
    var password = document.getElementById('password_value').value;
    var coditionPassword = /^[A-Za-z0-9]{8,16}$/;
    if (coditionPassword.test(password)) {
        document.querySelector('#password-field').classList = "success";
    } else {
        document.querySelector('#password-field').classList = "fail";
    }
}

function phoneCheck() {
    var card = document.getElementById('phone_value').value;
    var coditionCard = /^[0-9]{9,10}$/;
    if (coditionCard.test(card)) {
        document.querySelector('#phone-field').classList = "success";
    } else {
        document.querySelector('#phone-field').classList = "fail";
    }
}

function normal(key) {
    let keys = "#" + key;
    var keyValues = document.querySelector(keys);
    var input = keyValues.querySelector("input");
    if (input.value.length == 0) {
        keyValues.classList = "normal";
    }
}
function showHint(str) {
    if (str.length == 0) {
        document.getElementById("product").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("product").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "../../controllers/search/search.controller.php?search=" + str, true);
        xmlhttp.send();
    }
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
