<?php
  require_once('config/init.php');
  require_once('database/ProductPage.php');
  require_once('database/Stock.php');

  $numserie = $_GET['numserie'];
  $category = $_GET['category'];

  $spec = getSepcsByProduct($category, $numserie);
  $quantidade = GetStockQuantity($numserie, 1);

  $title = $spec['Marca'] . ' ' . $spec['Modelo'];
  include('templates/header.php');
  include('templates/product.php');
?>
