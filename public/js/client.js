function showClient(id){
    window.location.href = '/client?id=' + id;
}
function openModel(id){
    document.getElementById('content4').style.display = 'none';
    document.getElementById('content3').style.display = 'none';
    document.getElementById('content2').style.display = 'none';
    document.getElementById('content1').style.display = 'block';
    $.ajax({
        url: "/api/clientInfo", 
        data: {
            "id" : id,
        },
        method: "post",
        accepts: "application/json; charset=utf-8",
        success: function(result){
            result = JSON.parse(result);
            console.log(result[0]);
            document.getElementById('name').value = result[0].name;
            document.getElementById('email').value = result[0].email;
            document.getElementById('phone').value = result[0].phone;
            document.getElementById('business').value = result[0].business;
            document.getElementById('id').value = result[0].id;
        }
    });
}
function save(){
    $.ajax({
        url: "/api/attContract", 
        data: {
            "id" : $('#id').val(),
            "name" : $('#name').val(),
            "email" : $('#email').val(),
            "phone" : $('#phone').val(),
            "business" : $('#business').val(),
        },
        method: "post",
        accepts: "application/json; charset=utf-8",
        success: function(result){
            result = JSON.parse(result);
            console.log(result);
            if(result[0] === 'usuario salvo com sucesso'){
                document.getElementById('content4').style.display = 'none';
                document.getElementById('content3').style.display = 'none';
                document.getElementById('content1').style.display = 'none';
                document.getElementById('content2').style.display = 'block';
            }
        },
        error(a, b, c){
            console.log(a, b, c);
        }
    });
    window.location.href = '/contracts';
}
function openModelDelete(id){
    document.getElementById('id').value = id;
    document.getElementById('content4').style.display = 'none';
    document.getElementById('content2').style.display = 'none';
    document.getElementById('content1').style.display = 'none';
    document.getElementById('content3').style.display = 'block';
}
function deleteClient(){
    $.ajax({
        url: "/api/deleteClient", 
        data: {
            "id" : $('#id').val(),
        },
        method: "post",
        accepts: "application/json; charset=utf-8",
        success: function(result){
            result = JSON.parse(result);
            console.log(result);
            if(result[0] === 'usuario excluido com sucesso'){
                document.getElementById('content2').style.display = 'none';
                document.getElementById('content3').style.display = 'none';
                document.getElementById('content1').style.display = 'none';
                document.getElementById('content4').style.display = 'block';
            }
        },
        error(a, b, c){
            console.log(a, b, c);
        }
    });
    window.location.href = '/contracts';
}

function returnIni(){
    window.location.href = '/dash';
}
