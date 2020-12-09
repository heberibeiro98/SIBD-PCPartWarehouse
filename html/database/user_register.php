<?php
  require_once('config/init.php');
  
  function insertUser($email, $password) {
    $stmt = $dbh->prepare('INSERT INTO Conta(Email, Password) VALUES(?, ?)');
    $stmt->execute(array($email, sha1($password)));
  }
 ?>
