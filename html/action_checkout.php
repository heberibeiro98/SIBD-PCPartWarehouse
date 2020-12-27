<?php
  require_once('config/init.php');
  require_once('database/ProfilePage.php');

  if(!isset($_SESSION)) {
    session_start();
  }

  $clientinfo = getClientInfo($_SESSION['emailconta']);

  $title = 'Checkout';
  include('templates/header.php');
  include('templates/checkout.php');
?>
