<?php
  require_once('config/init.php');
  require_once('database/ProductList.php');

  if(!isset($_SESSION)) {
    session_start();
  }

  $numref = $_GET['numref'];

  $Artigos = getProductByOrder($numref);

  include('templates/header.php');
  include('templates/encomenda.php');
?>