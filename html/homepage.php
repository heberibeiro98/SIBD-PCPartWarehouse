<?php
  require_once('config/init.php');
  require_once('database/RandHomePage.php');
  require_once('database/Stock.php');

  session_start();
  $title = 'PCPart Warehouse - O armazém com todas as partes que precisas!';
  include("templates/header.php");
?>

<div class="homepage-intro">
  <h1>O armazém com todas as partes que precisas!</h1>
</div>


<?php
  $isHomepage = true;
  include('templates/homepage.php');
  include('templates/footer.php');
?>
