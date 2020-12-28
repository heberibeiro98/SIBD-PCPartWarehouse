<?php
  require_once('config/init.php');
  require_once('database/ProductList.php');

  if(!isset($_SESSION)) {
    session_start();
  }

  if($_SESSION['loggedin'] != true) {
    $_SESSION['message'] = 'Deve fazer login para adicionar produtos ao seu carrinho!';
    header('Location: templates/login.php');
    exit();
  }

  if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
  }

  $numserie = $_POST['Num_serie'];

  $artigo = getProductByNumSerie($numserie);

  if($_SESSION['cart'][$numserie] == null) {
    $artigo_cart = array(
      'Num_serie' => $numserie,
      'Marca' => $artigo['Marca'],
      'Modelo' => $artigo['Modelo'],
      'Preço' => $artigo['Preço'],
      'Categoria' => $artigo['Categoria'],
      'Quantidade' => 1
    );

    $_SESSION['cart'][$numserie] = $artigo_cart;
  }

  else {
    $aux = $_SESSION['cart'][$numserie]['Quantidade'] += 1;
  }

  $_SESSION['message'] = 'Produto adicionado ao carrinho!';
  header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
