let balance = document.querySelector(".balance");

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