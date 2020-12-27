<?php
  require_once('config/init.php');
  require_once('database/Order.php');
  require_once('database/ProductOrderQuantity.php');

  if(!isset($_SESSION)) {
    session_start();
  }

  $metodo = $_POST['metodo'];

  $numref = insertOrder($metodo, $_SESSION['emailconta'], 1);

  foreach ($_SESSION['cart'] as $Artigo) {
    UpdateProduct($numref, $Artigo['Num_serie']);
    InsertProductQuantity($Artigo['Num_serie'], $numref, $Artigo['Quantidade']);
  }

  unset($_SESSION['cart']);
  $_SESSION['message'] = 'Encomenda efetuada!';

  include("action_profile.php");
?>
