function login(){
    var form = $("#formLogin")[0];
    var formData = new FormData(form);
    $.ajax({
        url:getRoot(getURL()+'login'),
        type:'POST',
        dataType:'json',
        data:formData,
        timeout:(1*60*1000),
        cache:false,
        processData: false,
        contentType:false,
        success: function(data,status,xhr){
            console.log(data);
            alerta(data);
        },
        error: function(jqXhr, textStatus, errorMessage){
            console.log(jqXhr+" "+textStatus+" "+errorMessage);
        }
    });
}