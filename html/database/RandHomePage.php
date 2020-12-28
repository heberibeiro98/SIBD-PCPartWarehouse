<?php
  function getProductsRand() {
    global $dbh;

    $stmt = $dbh->prepare('SELECT * FROM Artigo ORDER BY RANDOM() LIMIT 4');
    $stmt->execute(array());

    return $stmt->fetchAll();
  }
?>
