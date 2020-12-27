<?php
  function insertOrder($metodo, $conta, $armazem) {
    global $dbh;

    $stmt = $dbh->prepare('INSERT INTO Encomenda (Data, Metodo_pagamento, Conta, Armazem) VALUES(?, ?, ?, ?)');
    $stmt->execute(array(date('d/m/Y H:i', time()), $metodo, $conta, $armazem));

    return $dbh->lastInsertId();
  }

  function getOrders($conta) {
    global $dbh;

    $stmt = $dbh->prepare('SELECT * FROM Encomenda WHERE Conta = ?');
    $stmt->execute(array($conta));

    return $stmt->fetchAll();
  }

  function UpdateProduct($numref, $numserie) {
    global $dbh;

    $stmt = $dbh->prepare('UPDATE Artigo SET Encomenda = ? WHERE Num_serie = ?');
    $stmt->execute(array($numref, $numserie));
  }
?>
