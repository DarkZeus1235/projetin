<?php
include('conexao.php');

if (!isset($_SESSION)) {
  session_start();
}

$consultar_banco = "SELECT * FROM lanches";

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
  <link rel="icon" href="img/hamburguer-queijo-com-ilustracao-do-icone-do-vetor-dos-desenhos-animados-do-fogo-conceito-de-icone-de-objeto-de-comida-isolado-premium_138676-5539.avif">
  <title>Página Inicial</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Buteco do Nunes</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Buteco do Nunes</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Início</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="combos.php">Combos</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Informações
                </a>
                <ul class="dropdown-menu dropdown-menu-dark">
                  <li><a class="dropdown-item" href="#">Sobre nós</a></li>
                  <li><a class="dropdown-item" href="login.php">Login</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <?php
                  if (isset($_SESSION['nome'])) {
                  ?>

                    <li><a class="btn btn-warning" href="cadastrar_func.php">Funcionários</a></li>
                  <?php

                  }
                  ?>
                  <?php
                  if (isset($_SESSION['nome'])) {
                  ?>

                    <li><a class="btn btn-success" href="cadastrar_lanche.php">Cadastro de Lanches</a></li>
                  <?php

                  }
                  ?>
                  <li><a class="btn btn-danger" href="logout.php">Sair</a></li>
                </ul>
              </li>
            </ul>
            <form class="d-flex mt-3" role="search">
              <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
              <button class="btn btn-success" type="submit">Pesquisar</button>
            </form>
          </div>
        </div>
      </div>
    </nav>
    <div class="container">
    <?php
    if (isset($_SESSION['nome'])) {
    ?>

      <h1>Bem-vindo <?php echo $_SESSION['nome']; ?></h1>
    <?php

    }
    ?>
    <h1>Destaques</h1>
    <div class="card-group">
      <div class="card">
        <img  src="img/asset-generation-fc12b65e-7fc6-4ee2-b139-16f3eb7d1ef4-1-watermarked.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">X-Nunes</h5>
          <p class="card-text">Ingredientes: pão, tomate, alface, carne, maionese, molho caseiro da casa, queijo cheddar.</p>
          <a href="pedido.php" class="btn btn-primary">Faça o seu pedido</a>
        </div>
      </div>
      <div class="card">
        <img id="lanche" src="img/Xsouza.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">X-Souza</h5>
          <p class="card-text">O lanche favorito da galera, o X-Souza é um lanche especial do chefe recheado com: maionese, bacon, frango desfiado, carne de hambúrguer, tomate, alface, queijo cheddar e pão caseiro da casa.</p>
          <a href="pedido.php" class="btn btn-primary">Faça o seu pedido</a>
        </div>
      </div>
      <div class="card">
        <img id="lanche" src="img/hamburguer-queijo-com-ilustracao-do-icone-do-vetor-dos-desenhos-animados-do-fogo-conceito-de-icone-de-objeto-de-comida-isolado-premium_138676-5539.avif" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">X-Dieimes</h5>
          <p class="card-text">O lanche mais caro de todos, mas o que mais alivia sua fome apresentamos o X-Dieimes um dos melhores da casa que satisfaz a fome de um Excelente Aluno, ingredientes: pão caseiro da casa, queijo cheddar, carne, tomate, alface, maionese, ketchup, mostarda, molho caseiro. </p>
          <a href="pedido.php" class="btn btn-primary">Faça o seu pedido</a>
        </div>
      </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</html>