<?php
  require_once('config/init.php');

  $email = $_POST['email'];
  $password = $_POST['password'];
  $nome = $_POST['nome'];
  $morada = $_POST['morada'];
  $num_telefone = $_POST['num_telefone'];
  $nif = $_POST['nif'];

  if(!empty($email) && !empty($password) && !empty($nome) && !empty($morada) && !empty($num_telefone) && !empty($nif)) {
    $stmt = $dbh->prepare('SELECT COUNT(*) FROM Conta WHERE Email = ?');
    $stmt->execute(array($email));

    if($stmt->fetchColumn()) {
      header("Location: templates/register.php");
    }

    else {
      $ca = $dbh->prepare('INSERT INTO Conta(Email, Password, Nome, Morada, Num_telefone, NIF) VALUES(? , ?, ?, ?, ?, ?)');
      $ca->execute(array($email, $password, $nome, $morada, $num_telefone, $nif));
      header("Location: templates/login.php");
    }
  }
?>
