<?php
  require_once('config/init.php');
  require_once('database/ProfilePage.php');

  $data = $_GET['data'];

  if($data == 'Num_telefone')
    $data = 'Número de telefone';

  $title = 'Alterar ' . $data;

  include('templates/header.php');
  include('templates/profile.php');
  include('templates/changedata.php');
  include('templates/footer.php');
?>
