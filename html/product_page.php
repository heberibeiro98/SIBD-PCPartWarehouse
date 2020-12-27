<?php
  require_once('config/init.php');
  require_once('database/ProductPage.php');
  require_once('database/Stock.php');

  $numserie = $_GET['numserie'];
  $category = $_GET['category'];

  $specs = getSepcsByProduct($category, $numserie);
  $quantidade = GetStockQuantity($numserie, 1);

  include('templates/header.php');
  include('templates/product.php');
?>
