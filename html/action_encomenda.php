<?php
  require_once('config/init.php');
  require_once('database/Order.php');
  require_once('database/ProductOrderQuantity.php');
  require_once('database/Stock.php');

  if(!isset($_SESSION)) {
    session_start();
  }

  $metodo = $_POST['metodo'];

  $numref = insertOrder($metodo, $_SESSION['emailconta'], 1);

  foreach ($_SESSION['cart'] as $Artigo) {
    UpdateProduct($numref, $Artigo['Num_serie']);
    InsertProductQuantity($Artigo['Num_serie'], $numref, $Artigo['Quantidade']);
    $oldquant = GetStockQuantity($Artigo['Num_serie'], 1);
    $newquant = $oldquant['Quantidade'] - $Artigo['Quantidade'];

    if($newquant < 0)
      UpdateStockQuantity(0, $Artigo['Num_serie'], 1);

    else
      UpdateStockQuantity($newquant, $Artigo['Num_serie'], 1);
  }

  unset($_SESSION['cart']);
  $_SESSION['message'] = 'Encomenda efetuada!';

  include("action_profile.php");
?>
