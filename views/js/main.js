function userNameCheck() {
    let userName = document.getElementById('user_value').value;
    let conditionUsername = /^[A-Z]{1}[a-z-A-Za" "]{2,}$/;
    if (conditionUsername.test(userName)) {
        document.querySelector('#user-field').classList = "success";
    } else {
        document.querySelector('#user-field').classList = "fail";
    }
}

function emailCheck() {
    let email = document.getElementById('email_value').value;
    let conditionEmial = /^[a-z._]{2,}@[a-z]{3,}[.]{1,}[a-z.]{2,}$/;
    if (conditionEmial.test(email)) {
        document.querySelector('#email-field').classList = "success";
    } else {
        document.querySelector('#email-field').classList = "fail";
    }
}

function passwordCheck() {
    let password = document.getElementById('password_value').value;
    let conditionPassword = /^[A-Za-z0-9]{8,16}$/;
    if (conditionPassword.test(password )) {
        document.querySelector('#password-field').classList = "success";
    } else {
        document.querySelector('#password-field').classList = "fail";
    }
}

function confirmpassCheck() {
    let confirmpassword = document.getElementById('confirmpass_value').value;
    let password = document.getElementById('password_value').value;
    if (confirmpassword == password && password != '') {
        document.querySelector('#confirmpass-field').classList = "success";
    } else {
        document.querySelector('#confirmpass-field').classList = "fail";
    }
}

function phoneCheck() {
    let phone = document.getElementById('phone_value').value;
    let conditionphone = /^[0-9]{9,10}$/;
    if (conditionphone.test(phone)) {
        document.querySelector('#phone-field').classList = "success";
    } else {
        document.querySelector('#phone-field').classList = "fail";
    }
}

function cardCheck() {
    let card = document.getElementById('card_value').value;
    let conditionCard =/^[0-9-" "]{19}$/;
    if (conditionCard.test(card)) {
        document.querySelector('#card-field').classList = "success";
    } else {
        document.querySelector('#card-field').classList = "fail";
    }   
}

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

function dateCheck() {
    let todayDate = new Date();
    let month = todayDate.getMonth() + 1 ;
    let maxyear = todayDate.getUTCFullYear() - 12;
    let minyear = todayDate.getUTCFullYear() - 100;
    let date = todayDate.getDate();

    if (month < 10){
        month = "0" + month;
    }
    if(date < 10){
        date = "0" + date;
    }
    
    let maxDate = maxyear + "-" + month + "-" + date

    let minDate = minyear + "-" + month + "-" + date

    document.getElementById("date").setAttribute("max", maxDate);

    document.getElementById("date").setAttribute("min", minDate);
}

function normal(key) {
    let keys = "#" + key;
    let keyValues = document.querySelector(keys);
    let input = keyValues.querySelector("input");
    if (input.value.length == 0) {
        keyValues.classList = "normal";
    }
}

function showHint(str) {
    if (str.length == 0) {
        document.getElementById("product").innerHTML = "";
        return;
    } else {
        let xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("product").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "../../controllers/search/search.controller.php?search=" + str, true);
        xmlhttp.send();
    }
}

dateCheck()