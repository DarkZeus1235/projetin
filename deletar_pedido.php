<?php
        include('conexao.php');

        if(isset($_GET['codigo_pedido'])){
            $id_pedido = $_GET['codigo_pedido'];
            $sql_consultar = "SELECT * FROM pedido WHERE id_pedido = '$id_pedido'";
            $comando_sql = $mysqli->query($sql_consultar) or die ($mysqli->error);
            $pedido = $comando_sql->fetch_assoc();

            if(isset($_POST['btn_deletar'])){
                $sql_deletar = "DELETE FROM pedido WHERE id_pedido = '$id_pedido'";

                $deu_certo = $mysqli->query($sql_deletar) or die ($mysqli->error);

                if($deu_certo){
                 $voltar = header("Location: lista_pedidos.php");
                 }
                 
            }
        }else{
            echo "Não tem código de consulta disponível";
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
            <h1>Tela de Exclusão de Pedidos - Buteco do Nunes</h1>
            <h1>ID do Pedido: <?php echo $pedido['id_pedido']?></h1>
            <p>Nome: <?php echo $pedido['nome']?></p>
            <p>Endereco: <?php $pedido['endereco']?></p>
            <p>Telefone: <?php $pedido['telefone'] ?></p>
            <p>Pedido: <?php echo $pedido ['pedido']?></p>

            <form action="" method="post">
                <input name="btn_deletar" class="btn btn-danger" type="submit" value="DELETAR">
                <a class="btn btn-warning" href="lista_pedidos.php">Voltar</a>
            </form>
        </div>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</html>