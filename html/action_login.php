<?php
  require_once('config/init.php');

  if(!isset($_SESSION)) {
    session_start();
  }

  $email = $_POST['email'];
  $password = $_POST['password'];

  if(!empty($email) && !empty($password)) {
    $stmt = $dbh->prepare('SELECT Id FROM Conta WHERE Email = ? AND Password = ?');
    $stmt->execute(array($email, $password));

    if($checkemail = $stmt->fetch(PDO::FETCH_ASSOC)) {
      $id = $checkemail['Id'];
      var_dump($id);
      $stmt = $dbh->prepare('SELECT Nome FROM Cliente WHERE Id = ?');
      $stmt->execute(array($id));

      if($checkid = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $nomecliente = $checkid['Nome'];
        var_dump($nomecliente);
        $_SESSION['loggedin'] = true;
        $_SESSION['nomecliente'] = $nomecliente;
        header("Location: templates/homepage.php");
      }

      else {
        header("Location: templates/login.php");
      }
    }

    else {
      header("Location: templates/login.php");
    }

  }
?>
