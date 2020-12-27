<?php
  function getClientInfo($email) {
    global $dbh;

    $stmt = $dbh->prepare('SELECT Nome, Morada, Num_telefone, NIF FROM Conta WHERE Email = ?');
    $stmt->execute(array($email));

    return $stmt->fetch(PDO::FETCH_ASSOC);
  }
?>
