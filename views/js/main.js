function email() {
    var email= document.getElementById('email_value').value;
    var conditionEmail = /^[a-z._]{2,}@[a-z]{3,}[.]{1,}[a-z.]{2,}$/;
    if (conditionEmail .test(email)) {
        document.querySelector('#email_field').classList = "success";
    } else {
        document.querySelector('#email_field').classList = "fail";
    }
}

function normal() {
    var email = document.getElementById('email_value');
    if (email.value.length == 0) {
        document.querySelector('#email_field').classList = "normal";
    }
}


