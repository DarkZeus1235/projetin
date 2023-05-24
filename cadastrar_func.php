<?php
    include('conexao.php');

    include('protect.php');


    if(isset($_POST['bt_nome'])){
        /*----------------------------------*/
        $nome = $_POST['bt_nome'];
        $endereco = $_POST['bt_endereco'];
        $telefone = $_POST['bt_telefone'];
        $cpf = $_POST['bt_cpf'];
        $funcao = $_POST['bt_funcao'];
        /*----------------------------------*/
        $mysqli -> query("INSERT INTO funcionarios (nome, endereco, telefone, cpf, funcao) values('$nome', '$endereco', '$telefone', '$cpf', '$funcao')") or
        die ($mysqli->error);

        if(isset($_POST['nome']) || isset($_POST['endereco'])) {

        if(($_POST['nome']) == 1){
            echo("Parabéns você está logado");

        if(($_POST['endereco']) == 1){
            echo("Parabéns você está logado");

        }    
        }
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="icon" href="img/hamburguer-queijo-com-ilustracao-do-icone-do-vetor-dos-desenhos-animados-do-fogo-conceito-de-icone-de-objeto-de-comida-isolado-premium_138676-5539.avif">
    <title>Cadastro Func - Buteco</title>
</head>
<body>
<div class="container">
            <h1>Cadastro de Funcionários- Buteco do Nunes</h1>
                    <form action="" method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-labelgigantossaurusfeg4okekrogkghkt">Nome do Funcionário:</label>
                        <input name="bt_nome" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">Coloque seu Nome completo</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Endereço do Funcionário:</label>
                        <input name="bt_endereco" type="text" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="">Telefone:</label>
                        <input name="bt_telefone" type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">CPF do Funcionário:</label>
                        <input name="bt_cpf" type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Função do Funcionário:</label>
                        <input name="bt_funcao" type="text" class="form-control">
                    </div>
                    <input class="btn btn-success" type="submit" value="Cadastrar Funcionário">
                    <a class="btn btn-danger" href="index.php">Cancelar</a>
                    <a class="btn btn-primary" href="lista_func.php">Funcionários</a>
                    </form>
                </div>
            </form>
        </div>
</body>
</html>