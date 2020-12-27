<?php
  require_once('config/init.php');
  require_once('database/RandHomePage.php');

  session_start();
  $title = 'PCPart Warehouse - O armazém com todas as partes que precisas!';
  include("templates/header.php");
?>

<a href="homepage.php">
  <img src="/images/logo.png" id="logo" alt="PCPart Warehouse logo">
</a>
<h1>Os nossos produtos</h1>

<?php
  $randSerialNo = getRandomProducts();
  $products = getProductsByNumSeries($randSerialNo);
  include('templates/category.php');
?>
