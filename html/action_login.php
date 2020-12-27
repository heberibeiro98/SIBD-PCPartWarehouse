<?php
  require_once('config/init.php');

  if(!isset($_SESSION)) {
    session_start();
  }

  $email = $_POST['email'];
  $password = $_POST['password'];

  if(empty($email) || empty($password)) {
    $_SESSION['message'] = 'Deve preencher os dois campos!';
    header("Location: templates/login.php");
  }

  else {
    $stmt = $dbh->prepare('SELECT Id FROM Conta WHERE Email = ? AND Password = ?');
    $stmt->execute(array($email, $password));

    if($checkemail = $stmt->fetch(PDO::FETCH_ASSOC)) {
      $id = $checkemail['Id'];
      $stmt = $dbh->prepare('SELECT Nome, Email FROM Conta Where Id = ?');
      $stmt->execute(array($id));

      if($checkid = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $emailconta= $checkid['Email'];
        $nomeconta = $checkid['Nome'];
        $_SESSION['loggedin'] = true;
        $_SESSION['emailconta'] = $emailconta;
        $_SESSION['nomeconta'] = $nomeconta;

        $_SESSION['message'] = 'Login bem sucedido. Bem vindo!';
        header("Location: homepage.php");
      }

      else {
        $_SESSION['message'] = 'Ocorreu um erro! Tente de novo.';
        header("Location: templates/login.php");
      }
    }

    else {
      $_SESSION['message'] = 'Email ou password errados! Tente de novo';
      header("Location: templates/login.php");
    }
  }
?>
