$('#cpf').mask('000.000.000-00');
$('#dataNascimento').mask('00/00/0000');

// function cadastrarForm(){
//     var form = $("#formCadastro")[0];
//     var formData = new FormData(form);
//     $.ajax({
//         url:getRoot(getURL()+'/cadastrar'),
//         type:'POST',
//         dataType:'json',
//         data:formData,
//         timeout:(1*60*1000),
//         cache:false,
//         processData: false,
//         contentType:false,
//         success: function(data,status,xhr){
//             console.log(data.sucessos);
//             alert(data);
//         },
//         error: function(jqXhr, textStatus, errorMessage){
//             console.log(jqXhr+" "+textStatus+" "+errorMessage);
//         }
//     });
// }