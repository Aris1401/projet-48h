// Utilisation code

$(document).ready(() => {
    $(".user-code").hide()
})

$("#use-code").on("click", (e) => {
   $(".user-code").slideDown();
});

/////////////////////////////////////////////////////////////////////////////
let balance = document.querySelector(".balance");
let imc = document.querySelector(".IMC");

$.ajax({
        url: url,
        type: 'GET',
        headers: {
            "X-Requested-With": "XMLHttpRequest",
        },
        success: (response) => {
            balance.textContent = response + " Ar";
        },
        error: function(response) {
            // alert("Error occured")
        }
    });
    
    $.ajax({
        url: urlIMC,
        type: 'GET',
        headers: {
            "X-Requested-With": "XMLHttpRequest",
        },
        success: (response) => {
            imc.textContent = response;
        },
        error: function(response) {
            // alert("Error occured")
        }
    });

setInterval(() => {
    $.ajax({
        url: url,
        type: 'GET',
        headers: {
            "X-Requested-With": "XMLHttpRequest",
        },
        success: (response) => {
            balance.textContent = response + " Ar";
        },
        error: function(response) {
             alert("Error occured")
        }
    });
}, 2000);