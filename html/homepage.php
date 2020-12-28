<?php
  require_once('config/init.php');
  require_once('database/RandHomePage.php');
  require_once('database/Stock.php');

  session_start();
  $title = 'PCPart Warehouse - O armazém com todas as partes que precisas!';
  include("templates/header.php");
?>

<a href="homepage.php">
  <img src="/images/logo.png" id="logo" alt="PCPart Warehouse logo">
</a>
<h1>Os nossos produtos</h1>

<?php
  $isHomepage = true;
  include('templates/homepage.php');
  include('templates/footer.php');
?>
