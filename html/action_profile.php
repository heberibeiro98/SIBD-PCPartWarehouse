<?php
  require_once('config/init.php');
  require_once('database/ProfilePage.php');

  if(!isset($_SESSION)) {
    session_start();
  }

  $clientinfo = getClientInfo($_SESSION['emailconta']);

  $title = 'Perfil de utilizador';

  include('templates/header.php');
  include('templates/profile.php');
  include('templates/footer.php');
?>
