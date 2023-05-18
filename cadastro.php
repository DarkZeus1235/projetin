<?php
        include('conexao.php');

        if(isset($_POST['bt_nome'])){
            /*----------------------------------*/
            $email = $_POST['bt_email'];
            $senha - $_POST['bt_senha'];
            $nome = $_POST['bt_nome'];
            $telefone = $_POST['bt_telefone'];
            $endereco = $_POST['bt_endereco'];
            /*----------------------------------*/
            $mysqli -> query("INSERT INTO pedido (email, senha, nome, endereco, telefone) values('$nome', '$endereco', '$telefone', '$email', '$senha')") or
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
<html>
<head>
    <link rel="stylesheet" href="css/style.css">
  <title>Página de Cadastro</title>
</head>
<body>
  <div class="signup-container">
    <h2>Cadastro</h2>
    <form action="login.php" method="post">
    <input type="email" name="bt_email" placeholder="Email" required>
      <input type="password" name="bt_senha" placeholder="Senha" required>
      <input type="text" name="bt_nome" placeholder="Nome completo" required>
      <input type="text" name="bt_telefone" placeholder="Telefone" required>
      <input type="text" name="bt_endereco" placeholder="Endereço" required>
      <input type="submit" value="Cadastrar">
    </form>
  </div>
</body>
</html>