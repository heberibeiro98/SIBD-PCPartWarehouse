<?php
  require_once('config/init.php');
  require_once('database/ProductList.php');
  require_once('database/ProductOrderQuantity.php');

  if(!isset($_SESSION)) {
    session_start();
  }

  $numref = $_GET['numref'];

  $Artigos = getProductByOrder($numref);

  $title = 'Encomenda #' . $numref;
  include('templates/header.php');
  include('templates/encomenda.php');
  include('templates/footer.php');
?>
