<?php
  require_once('config/init.php');
  require_once('database/ProductList.php');
  require_once('database/Stock.php');

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

  if (!empty($search_name) || !empty($search_min) || !empty($search_max)) {
    $products = getProductsBySearch($category, $search_name, $search_min, $search_max);

    if($products == null) {
      $_SESSION['message'] = 'Não foi encontrado nenhum produto que corresponda à pesquisa.';
      $products = getProductsByCategory($category, ($page - 1));
      unset($search_name);
      unset($search_min);
      unset($search_max);
    }
  }

  else {
    $products = getProductsByCategory($category, ($page - 1));
  }

  $title = 'Categoria: ' . $category;
  include('templates/header.php');
?>

<form class="search" action="list_products.php" method="get">
  <input type="hidden" name="category" value="<?php echo $category; ?>">
  <input type="hidden" name="page" value="<?php echo $page; ?>">
  <input type="text" name="search-name" placeholder="O que pretende pesquisar?">
  <input type="text" placeholder="Preço mínimo" name="search-min-price">
  <input type="text" placeholder="Preço máximo" name="search-max-price">
  <button type="submit" name="search-button" value="Pesquisar">
    <i class="fa fa-search"></i>
  </button>
</form>

<?php
  include('templates/category.php');
  include('templates/footer.php')
?>
