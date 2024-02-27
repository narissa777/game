function FetchState(id){
    $.ajax({
        type:'post',
        url:'iadebakiyecek/',
        data:{ kart_id: id },
        dataType:'json',
        success: function(data){
            document.getElementById("iadebakiye").value = data.bakiye;
            document.getElementById("iadedepozito").value = data.depozito;
            console.log(data);
        }
    });
}