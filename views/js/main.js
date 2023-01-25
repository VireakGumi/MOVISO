function email() {
    var a = document.getElementById('email_value').value;
    var b = /^[a-z._]{2,}@[a-z]{3,}[.]{1,}[a-z.]{2,}$/;
    if (b.test(a)) {
        document.querySelector('#email_field').classList = "success";
    } else {
        document.querySelector('#email_field').classList = "fail";
    }
}

function normal() {
    var a = document.getElementById('email_value');
    if (a.value.length == 0) {
        document.querySelector('#email_field').classList = "normal";
    }
}


