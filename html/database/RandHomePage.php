<?php
  function getProductsRand($category) {
    global $dbh;

    $stmt = $dbh->prepare('SELECT * FROM Artigo WHERE Categoria = ? ORDER BY RANDOM() LIMIT 4');
    $stmt->execute(array($category));

    return $stmt->fetchAll();
  }
?>
