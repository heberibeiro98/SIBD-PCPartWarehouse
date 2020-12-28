<?php
  if(!isset($_SESSION)) {
    session_start();
  }

  require_once('config/init.php');
  require_once('database/UpdateData.php');

  $datafield = $_GET['data'];
  $email = $_SESSION['emailconta'];

  switch($datafield) {
    case 'Nome':
      $param = $_POST['nome'];

      if(empty($param)) {
        $_SESSION['message'] = 'O campo deve ser preenchido!';
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit();
      }

      UpdateData($datafield, $param, $email);
      break;

    case 'Morada':
      $param = $_POST['morada'];

      if(empty($param)) {
        $_SESSION['message'] = 'O campo deve ser preenchido!';
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit();
      }

      updateData($datafield, $param, $email);
      break;

    case 'Num_telefone':
      $numtelefone = $_POST['num_telefone'];

      if(strlen((string)$numtelefone) != 9) {
        $_SESSION['message'] = 'Número de telefone introduzido inválido!';
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit();
      }

      UpdateData($datafield, $numtelefone, $email);
      break;

    case 'NIF':
      $nif = $_POST['nif'];

      if(strlen((string)$nif) != 9) {
        $_SESSION['message'] = 'NIF introduzido inválido!';
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit();
      }

      UpdateData($datafield, $nif, $email);
      break;

    case 'Password':
      $oldpw = $_POST['oldpw'];
      $newpw = $_POST['newpw'];

      if(strlen($newpw) < 8) {
        $_SESSION['message'] = 'A password deve ter pelo menos 8 carateres!';
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit();
      }

      $pwcheck = CheckPassword($email);

      if(strcmp($pwcheck['Password'], sha1($oldpw)) == 0) {
        UpdateData($datafield, sha1($newpw), $email);
        $_SESSION['message'] = "Password alterada com sucesso!";
      }

      else {
        $_SESSION['message'] = "Password antiga incorreta!";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit();
      }

      break;
  }

  include('action_profile.php');
 ?>
