<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="../css/headerstyle.css">
    <link rel="stylesheet" href="../css/mainpage.css">
  </head>
  <body>
    <div class="navbar">
      <div class="dropdown">
        <button class="dropbtn">Categorias</button>
        <div class="dropdown-content">
          <a href="../list_products.php">Periféricos</a>
          <a href="">Componentes</a>
        </div>
      </div>
      <div class="rightNav">
        <<?php
          if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        ?>
          <a href="../action_logout.php">Terminar sessão</a>
          <a href="">Perfil</a>
          <a href="">Carrinho</a>
        <?php
          }

          else {
        ?>
          <a href="login.php">Iniciar sessão</a>
          <a href="register.php">Registar</a>
          <a href="">Carrinho</a>

        <?php
          }
        ?>
      </div>
    </div>
