$("#select").on('change', ()=>{
    document.getElementById('servicesList').innerText = document.getElementById('servicesList').innerText + $('select').val() + ';';
});
$("#openModal").on('click', ()=>{
    document.getElementById('content2').style.display = 'none';
    document.getElementById('content1').style.display = 'block';
    document.getElementById('servicesList').innerText = "";
});
$('#save').on('click', ()=>{
    $.ajax({
        url: "/api/saveContract", 
        data: {
            "name" : $('#name').val(),
            "email" : $('#email').val(),
            "phone" : $('#phone').val(),
            "business" : $('#business').val(),
            "services" : document.getElementById('servicesList').innerText,
        },
        method: "post",
        accepts: "application/json; charset=utf-8",
        success: function(result){
            result = JSON.parse(result);
            if(result[0] === 'usuario salvo com sucesso'){
                document.getElementById('content1').style.display = 'none';
                document.getElementById('content2').style.display = 'block';
            }
        }
    });
});
$('#cadastros').on('click', ()=>{
    window.location.href = '/contracts';
});
$('#cadastros2').on('click', ()=>{
    window.location.href = '/contracts';
});
function returnIni(){
    window.location.href = '/dash';
}