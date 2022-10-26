<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/login.css">
    
    <title>dash</title>
</head>
<body>
    <div id="bodyContent">
        <div id="formDiv" >
            <form>
                <h1>Bem vindo! {{$username}}</h1>
                <div class="row mb-3" style="padding: 10px;">
                    <button type="button" class="btn btn-primary" id="openModal" data-bs-toggle="modal" data-bs-target="#modal">Cadastrar cliente</button>
                </div>
                <div class="row mb-3" style="padding: 10px;">
                    <button type="button" id="cadastros" class="btn btn-primary">Ver todos os cadastros</button>
                </div>
                <p id="responseMessage"></p>
            </form>
        </div>
    </div>

    <div class="modal" tabindex="-1" id="modal">
        <div class="modal-dialog">
            <div class="modal-content" id="content1">
                <div class="modal-header">
                    <h5 class="modal-title">Cadastrar cliente</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="name" placeholder="Example input placeholder">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" placeholder="Another input placeholder">
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Telefone</label>
                            <input type="text" class="form-control" id="phone" placeholder="Example input placeholder">
                        </div>
                        <div class="mb-3">
                            <label for="business" class="form-label">Empresa</label>
                            <input type="text" class="form-control" id="business" placeholder="Another input placeholder">
                        </div>
                        <div class="mb-3">
                            <label for="select" class="form-label">Serviços</label>
                            <select name="" class="form-control" id="select">
                                <option value=""></option>
                                @foreach ($services as $service)
                                    <option value="{{ $service->servicce_name }}">{{ $service->servicce_name }}</option>
                                @endforeach
                            </select>
                            <p id="servicesList"></p>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary" id="save">Cadastrar</button>
                </div>
            </div>
            <div class="modal-content" id="content2" style="display: none">
                <div class="modal-header">
                    <h5 class="modal-title">Cadastrar cliente</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h1>Usuario Salvo com sucesso!</h1>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./js/dash.js"></script>
</body>
</html>