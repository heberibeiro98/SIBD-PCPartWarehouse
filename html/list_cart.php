<?php
  require_once('config/init.php');

  if(!isset($_SESSION)) {
    session_start();
  }

  $title = 'Carrinho';

  include('templates/header.php');
  include('templates/cart.php');
?>
