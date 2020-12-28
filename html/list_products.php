<?php
  require_once('config/init.php');
  require_once('database/ProductList.php');

  $category = $_GET['category'];
  $search_name = $_GET['search-name'];
  $search_min = $_GET['search-min-price'];
  $search_max = $_GET['search-max-price'];

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


  if (isset($search_name) && isset($search_min) && isset($search_max)) {
    $products = getProductsBySearch($category, $search_name, $search_min, $search_max);
  }
  else {
    $products = getProductsByCategory($category, ($page - 1));
  }

  $title = 'Categoria: ' . $category;
  include('templates/header.php');
?>

<form class="search" action="list_products.php" method="get">
  <input type="hidden" name="category" value="<?php echo $category; ?>">
  <input type="text" name="search-name" placeholder="O que pretende pesquisar?">
  <input type="number" placeholder="0" name="search-min-price">
  <input type="number" placeholder="5000" name="search-max-price">
  <input type="submit" name="search-button" value="Pesquisar">
</form>

<?php
  include('templates/category.php');
  include('templates/footer.php')
?>
