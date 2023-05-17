<?php
    if(!isset($_SESSION)){
    session_start();
    }

    if(!isset($_SESSION['email'])) {
        die("Voce não pode acessar está página porque não está logado como administrador. <p><a href=\"login.php\">Entrar</p>");
    }
    ?>