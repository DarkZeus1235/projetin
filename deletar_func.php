<?php
    include("conexao.php");  // Arquivo php referente ao banco de dados   
    
    include('protect.php');

    if(isset($_GET['codigo_pedido'])){
        $id_func = $_GET['codigo_pedido'];
        $sql_consultar = "SELECT * FROM funcionarios WHERE id_funcionario = '$id_func'";
        $comando_sql = $mysqli->query($sql_consultar) or die($mysqli->error);
        $pedido = $comando_sql->fetch_assoc();

        if(isset($_POST['btn_deletar'])){ 
    
            $sql_deletar = "DELETE FROM funcionarios WHERE id_funcionario = '$id_func'";
    
            $deu_certo = $mysqli->query($sql_deletar) or die ($mysqli->error);

            header("location:lista_func.php");
            
           // var_dump($mysqli);
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
        <title>Página Inicial</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    </head>

    <body>
        <div class="container">
            <h1>Tela de Exclusão de Funcionários - Buteco do Nunes</h1>
            <h1>ID do funcionário: <?php echo $pedido['id_funcionario']?></h1>
            <p>Nome do Funcionário: <?php echo $pedido['nome']?></p>
            <p>Endereço do Funcionário: <?php echo $pedido['endereco']?></p>
            <p>Telefone do Funcionário: <?php echo $pedido['telefone']?></p>
            <p>CPF do Funcionário: <?php echo $pedido['cpf']?></p>
            <p>Função do Funcionário: <?php echo $pedido['funcao']?></p>           
        
            <form action="" method="post">
                <input name="btn_deletar" class="btn btn-danger" type="submit" value="DELETAR">
                <a class="btn btn-warning" href="lista_func.php">Voltar</a>
            </form>
            
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</html>