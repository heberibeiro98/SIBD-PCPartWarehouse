<?php
  require_once('config/init.php');

  if(!isset($_SESSION)) {
    session_start();
  }

  $numserie = $_POST['Num_serie'];
  $quantidade = 1;
  $preço = $_POST['Preço'];

  $artigo = array(
    'Num_serie' => $numserie;
    'Quantidade' => $quantidade;
    'Preço' => $preço;
  );

  if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
  }

    $_SESSION['cart'][$numserie] = $artigo;

    header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
