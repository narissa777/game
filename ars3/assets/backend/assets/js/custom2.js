$(document).ready(function () {
    setInterval(function () {
        $.ajax({
            url: "musteriekle/",
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                $.each(data, function (key, value) {
                    document.getElementById("musteri").value = data.kart_id;
                });
            }
        });
    }, 1000);
});