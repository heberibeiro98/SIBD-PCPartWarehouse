<?php
  require_once('config/init.php');
  require_once('database/ProductPage.php');

  $category = 'GPU';
  $numserie = 865514;

  $specs = getSepcsByProduct($category, $numserie);

  include('templates/product.php');
?>
