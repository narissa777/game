$(document).ready(function(){
    $("#eklenecek").change(function(){
        var id = $(this).val();
        if (id != -1) 
        {
            $.ajax({
                url:"promosyonprocess/"+id,
                type:'GET',
                dataType: 'json',
                success: function(data){
                    $('select[name="promosyon"]').empty();
                        $('select[name="promosyon"]').append('<option value = "0">"Promosyon Seçiniz"</option>');
                        $('select[name="promosyon"]').append('<option value = "' +data.rakam+ '">'+data.yikama+' Yıkama + '+data.kopuk+' Köpük</option>');
                }
            });
        }else{
            $('select[name="promosyon"]').empty();
        }
    })
});