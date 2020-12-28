<?php
  require_once('config/init.php');
  require_once('database/ProductList.php');

  $category = $_GET['category'];

  $numproducts = getNumberOfProductsByCategory($category);

  $numpages = ceil($numproducts['count'] / 4);

  if(isset($_GET['page'])) {
    $page = $_GET['page'];

    if($page < 1)
      $page = 1;

    if($page > $numpages)
      $page = $numpages;
  }

  else {
    $page = 1;
  }

  $products = getProductsByCategory($category, ($page - 1));

  $title = 'Categoria: ' . $category;
  include('templates/header.php');
  include('templates/category.php');
  include('templates/footer.php')
?>
