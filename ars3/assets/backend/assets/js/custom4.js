$(document).ready(function () {
    setInterval(function () {
        $.ajax({
            url: "ajax/",
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                $.each(data, function (key, value) {
                    for (var i = 1; i <= data.okuyucusayisi; i++) {
                        var makineadi = 'makine' + i;
                        var surebilgi = 'makine' + i + 'sure';
                        var sayacadi =   '#cihaz' +i + 'sayacid';
                        var makineadip = 'makine' + i + 'p';
                        var makineclass = '#cihaz'+i+'class';
                        var sayacclass = '#cihaz'+i+'sayacclass';
                        if (data[makineadi] == 0) 
                        {
                            document.getElementById(makineadi).innerHTML = "Çalışmıyor";
                            $(makineclass).removeClass("bg-success").addClass("bg-danger");
                            $(sayacclass).removeClass("bg-success").addClass("bg-danger");
                        }else
                        {
                            if (data[makineadip] == 1) 
                            {
                                document.getElementById(makineadi).innerHTML = "Yıkama Çalışıyor";
                                $(makineclass).removeClass("bg-danger").addClass("bg-success");
                                $(sayacclass).removeClass("bg-danger").addClass("bg-success");
                                function formatToDoubleDigit(number) {
                                    return number < 10 ? "0" + number : number.toString();
                                }
                                var ststring = data[surebilgi];
                                var sure = ststring.replace(/[ .]/g, ':');
                                var hedefZamanArray = sure.split(":");
                                var hedefGun = parseInt(hedefZamanArray[0]);
                                var hedefAy = parseInt(hedefZamanArray[1]);
                                var hedefYil = parseInt(hedefZamanArray[2]);
                                var hedefSaat = parseInt(hedefZamanArray[3]);
                                var hedefDakika = parseInt(hedefZamanArray[4]);
                                var hedefSaniye = parseInt(hedefZamanArray[5]);
                                var simdi = new Date();
                                var simdiGun = simdi.getDate();
                                var simdiAy = simdi.getMonth();
                                var simdiYil = simdi.getFullYear();
                                var simdiSaat = simdi.getHours();
                                var simdiDakika = simdi.getMinutes();
                                var simdiSaniye = simdi.getSeconds();
                                var dakikaFarki = hedefDakika - simdiDakika;
                                var saniyeFarki = hedefSaniye - simdiSaniye;
                                if (dakikaFarki < 0) {
                                    dakikaFarki += 60;
                                }

                                if (saniyeFarki < 0) {
                                    dakikaFarki--;
                                    saniyeFarki += 60;
                                }
                                dakikaFarki = formatToDoubleDigit(dakikaFarki);
                                saniyeFarki = formatToDoubleDigit(saniyeFarki);
                                $(sayacadi).text(dakikaFarki + ' : ' + saniyeFarki);
                                if (dakikaFarki === "00" && saniyeFarki === "00" || simdiDakika > hedefDakika || simdiSaat > hedefSaat || simdiYil > hedefYil || simdiGun > hedefGun) {
                                    $(sayacadi).text('00:00');
                                    $.ajax({
                                        type:'post',
                                        url:'islemkapat/',
                                        data:{ ono: i },
                                        dataType:'json',
                                        success: function(data){
                                            console.log(sayacadi);
                                        }
                                    });
                                }
                            }else
                            {
                                document.getElementById(makineadi).innerHTML = "Köpük Çalışıyor";
                                $(makineclass).removeClass("bg-danger").addClass("bg-success");
                                $(sayacclass).removeClass("bg-danger").addClass("bg-success");
                                function formatToDoubleDigit(number) {
                                    return number < 10 ? "0" + number : number.toString();
                                }
                                var ststring = data[surebilgi];
                                var sure = ststring.replace(/[ .]/g, ':');
                                var hedefZamanArray = sure.split(":");
                                var hedefGun = parseInt(hedefZamanArray[0]);
                                var hedefAy = parseInt(hedefZamanArray[1]);
                                var hedefYil = parseInt(hedefZamanArray[2]);
                                var hedefSaat = parseInt(hedefZamanArray[3]);
                                var hedefDakika = parseInt(hedefZamanArray[4]);
                                var hedefSaniye = parseInt(hedefZamanArray[5]);
                                var simdi = new Date();
                                var simdiGun = simdi.getDate();
                                var simdiAy = simdi.getMonth();
                                var simdiYil = simdi.getFullYear();
                                var simdiSaat = simdi.getHours();
                                var simdiDakika = simdi.getMinutes();
                                var simdiSaniye = simdi.getSeconds();
                                var dakikaFarki = hedefDakika - simdiDakika;
                                var saniyeFarki = hedefSaniye - simdiSaniye;
                                if (dakikaFarki < 0) {
                                    dakikaFarki += 60;
                                }

                                if (saniyeFarki < 0) {
                                    dakikaFarki--;
                                    saniyeFarki += 60;
                                }
                                dakikaFarki = formatToDoubleDigit(dakikaFarki);
                                saniyeFarki = formatToDoubleDigit(saniyeFarki);
                                $(sayacadi).text(dakikaFarki + ' : ' + saniyeFarki);
                                if (dakikaFarki === "00" && saniyeFarki === "00" || simdiDakika > hedefDakika || simdiSaat > hedefSaat || simdiYil > hedefYil || simdiGun > hedefGun) {
                                    $(sayacadi).text('00:00');
                                    $.ajax({
                                        type:'post',
                                        url:'islemkapat/',
                                        data:{ ono: i },
                                        dataType:'json',
                                        success: function(data){
                                            console.log(sayacadi);
                                        }
                                    });
                                }
                            }
                        }
                    }

                    for (var j = 1; j <= data.supurgesayisi; j++) {
                        var supurgeadi = 'supurge'+j;
                        var supurgeclass = '#supurge'+j + 'class';
                        var sayacadi = '#supurge'+j+'sayacid';
                        var sayacclass = '#supurge'+j+'sayacclass';
                        var surebilgi = 'supurge' + j + 'sure';
                        if (data[supurgeadi] == 0) 
                        {
                            document.getElementById(supurgeadi).innerHTML = "Çalışmıyor";
                            $(supurgeclass).removeClass("bg-success").addClass("bg-danger");
                            $(sayacclass).removeClass("bg-success").addClass("bg-danger");

                        }else
                        {
                            document.getElementById(supurgeadi).innerHTML = "Süpürge Çalışıyor";
                            $(supurgeclass).removeClass("bg-danger").addClass("bg-success");
                            $(sayacclass).removeClass("bg-danger").addClass("bg-success");
                            function formatToDoubleDigit(number) {
                                return number < 10 ? "0" + number : number.toString();
                            }
                            var ststring = data[surebilgi];
                            var sure = ststring.replace(/[ .]/g, ':');
                            var hedefZamanArray = sure.split(":");
                            var hedefGun = parseInt(hedefZamanArray[0]);
                            var hedefAy = parseInt(hedefZamanArray[1]);
                            var hedefYil = parseInt(hedefZamanArray[2]);
                            var hedefSaat = parseInt(hedefZamanArray[3]);
                            var hedefDakika = parseInt(hedefZamanArray[4]);
                            var hedefSaniye = parseInt(hedefZamanArray[5]);
                            var simdi = new Date();
                            var simdiGun = simdi.getDate();
                            var simdiAy = simdi.getMonth();
                            var simdiYil = simdi.getFullYear();
                            var simdiSaat = simdi.getHours();
                            var simdiDakika = simdi.getMinutes();
                            var simdiSaniye = simdi.getSeconds();
                            var dakikaFarki = hedefDakika - simdiDakika;
                            var saniyeFarki = hedefSaniye - simdiSaniye;
                            if (dakikaFarki < 0) {
                                dakikaFarki += 60;
                            }

                            if (saniyeFarki < 0) {
                                dakikaFarki--;
                                saniyeFarki += 60;
                            }
                            dakikaFarki = formatToDoubleDigit(dakikaFarki);
                            saniyeFarki = formatToDoubleDigit(saniyeFarki);
                            $(sayacadi).text(dakikaFarki + ' : ' + saniyeFarki);
                            if (dakikaFarki === "00" && saniyeFarki === "00" || simdiDakika > hedefDakika || simdiSaat > hedefSaat || simdiYil > hedefYil || simdiGun > hedefGun) {
                                $(sayacadi).text('00:00');
                                $.ajax({
                                    type:'post',
                                    url:'islemkapat/',
                                    data:{ ono: 'supurge' + j },
                                    dataType:'json',
                                    success: function(data){
                                        console.log(sayacadi);
                                    }
                                });
                            }
                        }
                    }


                    for (var f = 1; f <= data.havasayisi; f++) {
                        var makineadi = 'hava' + f;
                        var surebilgi = 'hava' +f + 'sure';
                        var sayacadi =   '#hava' +f + 'sayacid';
                        var makineadip = 'hava' + f + 'p';
                        var makineclass = '#hava'+f+'class';
                        var sayacclass = '#hava'+f+'sayacclass';
                        if (data[makineadi] == 0) 
                        {
                            document.getElementById(makineadi).innerHTML = "Çalışmıyor";
                            $(makineclass).removeClass("bg-success").addClass("bg-danger");
                            $(sayacclass).removeClass("bg-success").addClass("bg-danger");
                        }else
                        {
                            if (data[makineadip] == 3) 
                            {
                                document.getElementById(makineadi).innerHTML = "Süpürge Çalışıyor";
                                $(makineclass).removeClass("bg-danger").addClass("bg-success");
                                $(sayacclass).removeClass("bg-danger").addClass("bg-success");
                                function formatToDoubleDigit(number) {
                                    return number < 10 ? "0" + number : number.toString();
                                }
                                var ststring = data[surebilgi];
                                var sure = ststring.replace(/[ .]/g, ':');
                                var hedefZamanArray = sure.split(":");
                                var hedefGun = parseInt(hedefZamanArray[0]);
                                var hedefAy = parseInt(hedefZamanArray[1]);
                                var hedefYil = parseInt(hedefZamanArray[2]);
                                var hedefSaat = parseInt(hedefZamanArray[3]);
                                var hedefDakika = parseInt(hedefZamanArray[4]);
                                var hedefSaniye = parseInt(hedefZamanArray[5]);
                                var simdi = new Date();
                                var simdiGun = simdi.getDate();
                                var simdiAy = simdi.getMonth();
                                var simdiYil = simdi.getFullYear();
                                var simdiSaat = simdi.getHours();
                                var simdiDakika = simdi.getMinutes();
                                var simdiSaniye = simdi.getSeconds();
                                var dakikaFarki = hedefDakika - simdiDakika;
                                var saniyeFarki = hedefSaniye - simdiSaniye;
                                if (dakikaFarki < 0) {
                                    dakikaFarki += 60;
                                }

                                if (saniyeFarki < 0) {
                                    dakikaFarki--;
                                    saniyeFarki += 60;
                                }
                                dakikaFarki = formatToDoubleDigit(dakikaFarki);
                                saniyeFarki = formatToDoubleDigit(saniyeFarki);
                                $(sayacadi).text(dakikaFarki + ' : ' + saniyeFarki);
                                if (dakikaFarki === "00" && saniyeFarki === "00" || simdiDakika > hedefDakika || simdiSaat > hedefSaat || simdiYil > hedefYil || simdiGun > hedefGun) {
                                    $(sayacadi).text('00:00');
                                    $.ajax({
                                        type:'post',
                                        url:'islemkapat/',
                                        data:{ ono: 'hava' + f },
                                        dataType:'json',
                                        success: function(data){
                                            console.log(sayacadi);
                                        }
                                    });
                                }
                            }else
                            {
                                document.getElementById(makineadi).innerHTML = "Hava Çalışıyor";
                                $(makineclass).removeClass("bg-danger").addClass("bg-success");
                                $(sayacclass).removeClass("bg-danger").addClass("bg-success");
                                function formatToDoubleDigit(number) {
                                    return number < 10 ? "0" + number : number.toString();
                                }
                                var ststring = data[surebilgi];
                                var sure = ststring.replace(/[ .]/g, ':');
                                var hedefZamanArray = sure.split(":");
                                var hedefGun = parseInt(hedefZamanArray[0]);
                                var hedefAy = parseInt(hedefZamanArray[1]);
                                var hedefYil = parseInt(hedefZamanArray[2]);
                                var hedefSaat = parseInt(hedefZamanArray[3]);
                                var hedefDakika = parseInt(hedefZamanArray[4]);
                                var hedefSaniye = parseInt(hedefZamanArray[5]);
                                var simdi = new Date();
                                var simdiGun = simdi.getDate();
                                var simdiAy = simdi.getMonth();
                                var simdiYil = simdi.getFullYear();
                                var simdiSaat = simdi.getHours();
                                var simdiDakika = simdi.getMinutes();
                                var simdiSaniye = simdi.getSeconds();
                                var dakikaFarki = hedefDakika - simdiDakika;
                                var saniyeFarki = hedefSaniye - simdiSaniye;
                                if (dakikaFarki < 0) {
                                    dakikaFarki += 60;
                                }

                                if (saniyeFarki < 0) {
                                    dakikaFarki--;
                                    saniyeFarki += 60;
                                }
                                dakikaFarki = formatToDoubleDigit(dakikaFarki);
                                saniyeFarki = formatToDoubleDigit(saniyeFarki);
                                $(sayacadi).text(dakikaFarki + ' : ' + saniyeFarki);
                                if (dakikaFarki === "00" && saniyeFarki === "00" || simdiDakika > hedefDakika || simdiSaat > hedefSaat || simdiYil > hedefYil || simdiGun > hedefGun) {
                                    $(sayacadi).text('00:00');
                                    $.ajax({
                                        type:'post',
                                        url:'islemkapat/',
                                        data:{ono : 'hava' + f},
                                        dataType:'json',
                                        success: function(data){
                                            console.log(sayacadi);
                                        }
                                    });
                                }
                            }
                        }
                    }
                });
}
});
}, 1000);
});