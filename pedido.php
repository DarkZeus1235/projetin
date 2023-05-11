<?php
        include('conexao.php');

        if(isset($_POST['bt_nome'])){
            /*----------------------------------*/
            $nome = $_POST['bt_nome'];
            $endereco = $_POST['bt_endereco'];
            $telefone = $_POST['bt_telefone'];
            $pedido = $_POST['bt_pedido'];
            /*----------------------------------*/
            $mysqli -> query("INSERT INTO pedido (nome, endereco, telefone, pedido) values('$nome', '$endereco', '$telefone', '$pedido')") or
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
        <title>Pedidos</title>
    </head>
    <body>
        <div class="container">
            <h1>Tela de Pedidos - Buteco do Nunes</h1>
                    <form action="" method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-labelgigantossaurusfeg4okekrogkghkt">Nome:</label>
                        <input name="bt_nome" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">Coloque seu Nome completo</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Endereço:</label>
                        <input name="bt_endereco" type="text" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="">Telefone:</label>
                        <input name="bt_telefone" type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Seu pedido:</label>
                        <input name="bt_pedido" type="text" class="form-control">
                    </div>
                    <input class="btn btn-success" type="submit" value="Pedir">
                    <a class="btn btn-danger" href="index.php">Cancelar</a>
                    <a class="btn btn-primary" href="lista_pedidos.php">Pedidos</a>
                    </form>
                </div>
            </form>
        </div>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</html>