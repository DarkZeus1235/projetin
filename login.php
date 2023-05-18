<?php
include('conexao.php');

if(isset($_POST['email']) || isset($_POST['senha'])) {

    if(strlen($_POST['email']) == 0){
    echo("Preencha seu email");

    }elseif(strlen($_POST['senha']) == 0){
        echo("Preencha sua senha");
    }else{
        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM pedido WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL" . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;

        if($quantidade == 1){

            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)){
                session_start();
            }

            $_SESSION['id_pedido'] = $usuario['id_pedido'];
            $_SESSION['nome'] = $usuario['nome'];
            $_SESSION['email'] = $usuario['email'];
            $_SESSION['senha'] = $usuario['senha'];


            header("Location: index.php");   

        }else{
            echo "Falha ao logar!Email ou senha incorretos";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<html>
    <link rel="stylesheet" href="css/style.css">
<head>
  <title>Página de Login</title>
</head>
<body>
  <div class="login-container">
    <h2>Faça login</h2>
    <form action="login.php" method="post">
      <input type="text" name="email" placeholder="Email" required>
      <input type="password" name="senha" placeholder="Senha" required>
      <input type="submit" value="Entrar">
    </form>
    <p>Não tem uma conta? <a href="cadastro.php">Registre-se</a></p>
  </div>
</body>
</html>
