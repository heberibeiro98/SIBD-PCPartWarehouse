<?php
  require_once('config/init.php');

  $data = $_GET['data'];

  if($data == 'Num_telefone')
    $data = 'Número de telefone';

  $title = 'Alterar ' . $data;
  include('templates/header.php');
  include('templates/changedata.php');
?>
