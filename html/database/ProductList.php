<<?php
  function getProductsByCategory($category) {
    global $dbh;
    $stmt = $dbh->prepare('SELECT * FROM Artigo WHERE Categoria = ?');

    $stmt->execute(array($category));
    return $stmt->fetchAll();
  }
 ?>
