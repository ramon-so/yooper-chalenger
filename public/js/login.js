$("#login").on("click", () => {
    $.ajax({
        url: "/api/login", 
        data: {
            "username" : $('#inputUser').val(),
            "password" : $('#inputPassword').val(),
        },
        method: "post",
        accepts: "application/json; charset=utf-8",
        success: function(result){
            result = JSON.parse(result);
            if(result.erro === undefined){
                console.log(result[0].username);
                window.location.href = "/dash?username=" + result[0].username;
            }else{
                console.log(result.erro);
                document.getElementById('responseMessage').innerText = result.erro;
            }
        }
    });
});