<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/login.css">
    <title>Contracts</title>
</head>
<body>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Telefone</th>
                <th scope="col">Empresa</th>
                <th scope="col">Serviços</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($clients as $client)
            <tr>
                <td scope="col">{{$client['id']}}</td>
                <td scope="col">{{$client['name']}}</td>
                <td scope="col">{{$client['email']}}</td>
                <td scope="col">{{$client['phone']}}</td>
                <td scope="col">{{$client['business']}}</td>
                <td scope="col">{{$client['services']}}</td>
                <td><button type="button" onclick="showClient({{$client['id']}})" class="btn btn-success">Abrir</button> 
                <button type="button" class="btn btn-primary" onclick="openModel({{$client['id']}})" data-bs-toggle="modal" data-bs-target="#modal">Editar</button> 
                <button type="button" class="btn btn-danger" onclick="openModelDelete({{$client['id']}})" data-bs-toggle="modal" data-bs-target="#modal">Excluir</button></td>
            </tr>
            @endforeach
        </tbody>
    </table>

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
                        <input type="text" id="id" style="display: none">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary" onclick="save()" id="save">Atuaizar</button>
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
            <div class="modal-content" id="content3" style="display: none">
                <div class="modal-header">
                    <h5 class="modal-title">Confirme a exclusão</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Você confirma a exclusão deste cliente</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-danger" onclick="deleteClient()" id="save">Excluir</button>
                </div>
            </div>
            <div class="modal-content" id="content4" style="display: none">
                <div class="modal-header">
                    <h5 class="modal-title">Exclusão de cliente</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal2" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h1>Cliente Excluido com sucesso!</h1>
                </div>
            </div>
        </div>
    </div>

    <button type="button" id="return" onclick="returnIni()" class="btn btn-success">Voltar ao inicio</button>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./js/client.js"></script>
</body>
</html>