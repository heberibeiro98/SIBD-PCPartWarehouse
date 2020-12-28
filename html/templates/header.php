<?php
  if(!isset($_SESSION)) {
    session_start();
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="/css/headerstyle.css">
    <link rel="stylesheet" href="/css/productlist.css">
    <link rel="stylesheet" href="/css/cart.css">
    <link rel="stylesheet" href="/css/encomendas.css">
    <link rel="stylesheet" href="/css/product.css">
    <link rel="stylesheet" href="/css/homepage.css">
    <link rel="stylesheet" href="/css/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/footer.css">
  </head>
  <body>
    <div class="page_wrapper">
      <div class="navbar">
        <div class="dropdown">
          <button class="dropbtn">Categorias</button>
          <div class="dropdown-content">
            <a href="/list_products.php?category=Monitor">Monitores</a>
            <a href="/list_products.php?category=Rato">Ratos</a>
            <a href="/list_products.php?category=Teclado">Teclados</a>
            <a href="/list_products.php?category=Headphones">Headphones</a>
            <a href="/list_products.php?category=Processador">Processadores</a>
            <a href="/list_products.php?category=Placa gráfica">Placas gráficas</a>
            <a href="/list_products.php?category=RAM">Memórias RAM</a>
            <a href="/list_products.php?category=PSU">Fontes de alimentação</a>
            <a href="/list_products.php?category=Disco">Discos de armazenamento</a>
          </div>
        </div>
        <div class="centerNav">
          <a href="/homepage.php">
            <img src="/images/smol_logo.png" alt="PCPart Warehouse logo small">
          </a>
        </div>
        <div class="rightNav">
          <?php
            if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
          ?>
            <a href="/action_logout.php">Terminar sessão</a>
            <a href="/action_profile.php">Perfil</a>
            <a href="/list_cart.php"><i class="fa fa-shopping-cart" style="font-size:24px"></i>[<?= GetNumberOfItemsCart() ?>]</a>
          <?php
            }
            else {
          ?>
            <a href="/templates/login.php">Iniciar sessão</a>
            <a href="/templates/register.php">Registar</a>
          <?php
            }
          ?>
        </div>
      </div>
      <br class="hdr_break">

      <?php echo $_SESSION['message'];
      unset($_SESSION['message']); ?>
