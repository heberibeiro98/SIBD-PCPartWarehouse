<?php
  require_once('config/init.php');

  $email = $_POST['email'];
  $password = $_POST['password'];
  $nif = $_POST['nif'];
  $nome = $_POST['nome'];
  $num_telefone = $_POST['num_telefone'];

  if(!empty($email) && !empty($password) && !empty($nif) && !empty($nome) && !empty($num_telefone)) {
    $sql = "SELECT COUNT(*) FROM Conta WHERE Email = '$email'";
    $checkemail = $dbh->query($sql);

    if($checkemail->fetchColumn()) {
      header("Location: templates/register.php");
    }

    else {
      $ca = $dbh->prepare('INSERT INTO Conta(Email, Password) VALUES(? , ?)');
      $ca->execute(array($email, $password));
      $ca = $dbh->prepare('INSERT INTO Cliente(NIF, Nome, Num_telefone) VALUES(?, ?, ?)');
      $ca->execute(array($nif, $nome, $num_telefone));
      header("Location: templates/login.php");
    }
  }
?>
