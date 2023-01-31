function username() {
    var userName = document.getElementById('user_value').value;
    var conditionUsername = /^[A-Za-z]{3,30}$/;
    if (conditionUsername.test(userName)) {
        document.querySelector('#user-field').classList = "success";
    } else {
        document.querySelector('#user-field').classList = "fail";
    }
}

function email() {
    var email = document.getElementById('email_value').value;
    var conditionEmial = /^[a-z._]{2,}@[a-z]{3,}[.]{1,}[a-z.]{2,}$/;
    if (conditionEmial.test(email)) {
        document.querySelector('#email-field').classList = "success";
    } else {
        document.querySelector('#email-field').classList = "fail";
    }
}

function password() {
    var password = document.getElementById('password_value').value;
    var coditionPassword = /^[A-Za-z0-9]{8,16}$/;
    if (coditionPassword.test(password )) {
        document.querySelector('#password-field').classList = "success";
    } else {
        document.querySelector('#password-field').classList = "fail";
    }
}

function phone() {
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