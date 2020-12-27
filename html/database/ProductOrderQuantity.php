<?php
  function InsertProductQuantity($numserie, $numref, $qtdd) {
    global $dbh;

    $stmt = $dbh->prepare('INSERT INTO Quantidade VALUES(?, ?, ?)');
    $stmt->execute(array($numserie, $numref, $qtdd));
  }

  function GetProductQuantity($numserie, $numref) {
    global $dbh;

    $stmt = $dbh->prepare('SELECT Qtdd FROM Quantidade WHERE Artigo = ? AND Encomenda = ?');
    $stmt->execute(array($numserie, $numref));

    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

?>
