

$('#confirm').click(function (event) {
    cuteAlert({
        type: "question",
        title: "Ticket",
        message: "Are you sure you want to confirm",
        confirmText: "Confirm",
        cancelText: "Cancel"
    }).then((e) => {
        if (e == ("confirm")) {
            let id = $("#id").val();
            let username = $('#username').val();
            let card = $('#card_value').val();
            $.ajax({
                url: 'controllers/buyticket/validate.with.js.php',
                data: { name: username, card_num: card, id: id },
                type: 'POST',
                success: function (response) {
                    if (Number(response)) {
                        cuteToast({
                            type: "success",
                            title: "Confirmed",
                            message: "You succes to buy the ticket ",
                            timer: 3000
                        })
                        $("form").attr('action', '/buyticket');
                        $("form").submit();
                    } else {
                        cuteToast({
                            type: "error",
                            title: "Error",
                            message: "You haven't fill yet",
                            timer: 5000
                        })
                    }
                }
            });
        }

    })
    event.preventDefault();
})

function count(element) {
    let price = $('#price').val();
    $('#showPrice').html(element.value * price);
}

$("#slideshow > div:gt(0)").hide();

setInterval(function () {
    $('#slideshow > div:first')
        .fadeOut(1000)
        .next()
        .fadeIn(1000)
        .end()
        .appendTo('#slideshow');
}, 4000);

function userNameCheck() {
    let userName = document.getElementById('user_value').value;
    let conditionUsername = /^[A-Z]{1}[a-z-A-Za" "]{2,}$/;
    if (conditionUsername.test(userName)) {
        document.querySelector('#user-field').classList = "success";
    } else {
        document.querySelector('#user-field').classList = "fail";
    }
}


try {
    fetch(new Request("https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js", { method: 'HEAD', mode: 'no-cors' })).then(function (response) {
        return true; 2
    }).catch(function (e) {
        var carbonScript = document.createElement("script");
        carbonScript.src = "//cdn.carbonads.com/carbon.js?serve=CE7DC2JW&placement=wwwcssscriptcom";
        carbonScript.id = "_carbonads_js";
        document.getElementById("carbon-block").appendChild(carbonScript);
    });
} catch (error) {
    console.log(error);
}



(function (i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
        (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date(); a = s.createElement(o),
        m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

ga('create', 'UA-46156385-1', 'cssscript.com');
ga('send', 'pageview');


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
    if (conditionPassword.test(password)) {
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
    let conditionCard = /^[0-9-" "]{19}$/;
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
    let month = todayDate.getMonth() + 1;
    let maxyear = todayDate.getUTCFullYear() - 12;
    let minyear = todayDate.getUTCFullYear() - 100;
    let date = todayDate.getDate();

    if (month < 10) {
        month = "0" + month;
    }
    if (date < 10) {
        date = "0" + date;
    }

    let maxDate = maxyear + "-" + month + "-" + date

    let minDate = minyear + "-" + month + "-" + date

    document.getElementById("date").setAttribute("max", maxDate);

    document.getElementById("date").setAttribute("min", minDate);
}
dateCheck()
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


