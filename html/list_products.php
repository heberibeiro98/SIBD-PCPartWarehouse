<?php
  require_once('config/init.php');
  require_once('database/ProductList.php');

  $category = $_GET['category'];

  $products = getProductsByCategory($category);
  print_r($products);
  die();
  include('templates/header.php');
  include('templates/category.php');
?>
