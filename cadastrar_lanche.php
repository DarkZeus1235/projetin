    <?php
         include('conexao.php');

         include('protect.php');
     
         if(isset($_POST['bt_nome'])){
             /*----------------------------------*/
             $nome = $_POST['bt_nome'];
             $ingredientes = $_POST['bt_ingredientes'];
             $quantidade = $_POST['bt_quantidade'];
             $valor = $_POST['bt_valor'];
             /*----------------------------------*/
             $mysqli -> query("INSERT INTO lanches (nome, ingredientes,  quantidade , valor) values('$nome', '$ingredientes', '$quantidade', '$valor')") or
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
    <title>Cadastro Lanches - Buteco</title>
</head>
<body>
<div class="container">
            <h1>Cadastro de Lanches - Buteco do Nunes</h1>
                    <form action="" method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nome do Lanche:</label>
                        <input name="bt_nome" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">Coloque o nome do lanche</div>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Ingredientes</label>
                        <input name="bt_ingredientes" type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Quantidade de lanches disponíveis</label>
                        <input name="bt_quantidade" type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Valor do Lanche:</label>
                        <input name="bt_valor" type="text" class="form-control" id="exampleInputPassword1">
                    </div>
                    <input class="btn btn-success" type="submit" value="Cadastrar Lanche">
                    <a class="btn btn-danger" href="index.php">Cancelar</a>
                    <a class="btn btn-primary" href="lista_lanches.php">Lanches</a>
                    </form>
                </div>
            </form>
        </div>
</body>
</html>