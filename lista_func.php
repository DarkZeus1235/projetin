<?php
        include("conexao.php");

        include("protect.php");

        $consultar_banco = "SELECT * FROM funcionarios";

        $retorno_consulta = $mysqli->query($consultar_banco) or die($mysqli->error);
        $quantidade_pedidos = $retorno_consulta->num_rows;
    ?>
<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <title>Lista de Funcionários</title>
    </head>

    <body>
        <div class="container">
            <h1>Lista de funcionários - Buteco do Nunes</h1>
            <table class="table table-striped">
                <tr>
                    <th>Nome do Funcionário:</th>
                    <th>Endereço do Funcionário:</th>
                    <th>Telefone do Funcionário:</th>
                    <th>CPF do Funcionário:</th>
                    <th>Função:</th>
                    <th>Funcionalidades:</th>
                </tr>
                <tr>
                    <?php
                        while($funcionarios = $retorno_consulta -> fetch_assoc()){
                       ?>
                       <tr>
                        <td><?php echo $funcionarios['nome'];?> </td>
                        <td><?php echo $funcionarios['endereco'];?> </td>
                        <td><?php echo $funcionarios['telefone'];?> </td>
                        <td><?php echo $funcionarios['cpf'];?> </td>
                        <td><?php echo $funcionarios['funcao'];?> </td>
                        <td><a class="btn btn-danger" href="deletar_func.php?codigo_pedido=<?php echo $funcionarios['id_funcionario']; ?>">Deletar</a></td>
                    </tr>
                    <?php
                    }


                    ?>
                </tr>
            </table>
            <a class="btn btn-warning" href="index.php">Voltar para Página Principal</a>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</html>