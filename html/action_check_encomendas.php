<?php
  require_once('config/init.php');
  require_once('database/Order.php');

  if(!isset($_SESSION)) {
    session_start();
  }

  $encomendas = getOrders($_SESSION['emailconta']);

  $title = "Encomendas";
  include('templates/header.php');
  include('templates/encomendas.php');
  include('templates/footer.php');
?>
