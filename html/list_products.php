<?php
  require_once('config/init.php');
  require_once('database/product.php');

  $category = 'Monitores';

  $products = getProductsByCategory($category);

  include('templates/products.php');
?>
