$(document).ready(function () {
    setInterval(function () {
        $.ajax({
            url: "bakiyegetir",
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                $.each(data, function (key, value) {
                    document.getElementById("musteri").value = data.kart_id;
                    document.getElementById("musteriadi").value = data.musteriadi;                  
                    document.getElementById("bakiye").value = data.mevcut_bakiye;
                    document.getElementById("depozito").value = data.depozito;
					 document.getElementById("id").value = data.id;
                });
            }
        });
    }, 1000);
});