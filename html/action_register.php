<?php
  require_once('config/init.php');

  if(!isset($_SESSION)) {
    session_start();
  }

  $email = $_POST['email'];
  $password = $_POST['password'];
  $nome = $_POST['nome'];
  $morada = $_POST['morada'];
  $num_telefone = $_POST['num_telefone'];
  $nif = $_POST['nif'];

  if(empty($email) || empty($password) || empty($nome) || empty($morada) || empty($num_telefone) || empty($nif)) {
    $_SESSION['message'] = 'Todos os campos devem ser preenchidos!';
    header("Location: templates/register.php");
  }

  else {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $_SESSION['message'] = 'Email introduzido inválido!';
      header("Location: templates/register.php");
      exit();
    }

    if(strlen($password) < 8) {
      $_SESSION['message'] = 'A password deve ter pelo menos 8 carateres!';
      header("Location: templates/register.php");
      exit();
    }

    if(strlen((string)$num_telefone) != 9) {
      $_SESSION['message'] = 'Número de telefone introduzido inválido!';
      header("Location: templates/register.php");
      exit();

    }

    if(strlen((string)$num_telefone) != 9) {
      $_SESSION['message'] = 'NIF introduzido inválido!';
      header("Location: templates/register.php");
      exit();

    }

    $stmt = $dbh->prepare('SELECT COUNT(*) FROM Conta WHERE Email = ?');
    $stmt->execute(array($email));

    if($stmt->fetchColumn()) {
      $_SESSION['message'] = 'Já existe uma conta com este Email!';
      header("Location: templates/register.php");
      exit();
    }

    $ca = $dbh->prepare('INSERT INTO Conta(Email, Password, Nome, Morada, Num_telefone, NIF) VALUES(? , ?, ?, ?, ?, ?)');
    $ca->execute(array($email, $password, $nome, $morada, $num_telefone, $nif));
    $_SESSION['message'] = 'Registo bem sucedido!';
    header("Location: homepage.php");
  }
?>
