<?php
  function GetStockQuantity($numserie, $armazem) {
    global $dbh;

    $stmt = $dbh->prepare('SELECT Quantidade FROM Stock WHERE Artigo = ? AND Armazem = ?');
    $stmt->execute(array($numserie, $armazem));

    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  function UpdateStockQuantity($quantidade, $numserie, $armazem) {
    global $dbh;

    $stmt = $dbh->prepare('UPDATE Stock SET Quantidade = ? WHERE Artigo = ? AND Armazem = ?');
    $stmt->execute(array($quantidade, $numserie, $armazem));
  }
?>
