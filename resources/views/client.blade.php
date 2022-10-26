<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/client.css">
    <title>Client</title>
</head>
<body>
    
    <div class="container text-center">
    <div class="row">
        <div class="col">
        Nome    <br>
        <p>{{$client[0]->name}}</p>
        </div>
        <div class="col">
        Telefone <br>
        <p>{{$client[0]->phone}}</p>
        </div>
    </div>
    <div class="row">
        <div class="col">
        Email <br>
        <p>{{$client[0]->email}}</p>
        </div>
        <div class="col">
        Empresa <br>
        <p>{{$client[0]->business}}</p>
        </div>
        <div class="col">
        Serviços <br>
        <p>{{$services}}</p>
        </div>
    </div>
    <br>
    <button type="button" id="return" onclick="returnIni()" class="btn btn-success">Voltar ao inicio</button>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./js/dash.js"></script>
</body>
</html>