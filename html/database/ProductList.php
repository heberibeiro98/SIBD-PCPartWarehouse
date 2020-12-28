<?php
  function getProductsByCategory($category, $offset) {
    global $dbh;

    $stmt = $dbh->prepare('SELECT * FROM Artigo WHERE Categoria = ? LIMIT 4 OFFSET ?');
    $stmt->execute(array($category, $offset*2));

    return $stmt->fetchAll();
  }

  function getProductByNumSerie($numserie) {
    global $dbh;

    $stmt = $dbh->prepare('SELECT * FROM Artigo WHERE Num_serie = ?');
    $stmt->execute(array($numserie));

    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  function getProductByOrder($numref) {
    global $dbh;

    $stmt = $dbh->prepare('SELECT * FROM Artigo WHERE Encomenda = ?');
    $stmt->execute(array($numref));

    return $stmt->fetchAll();
  }

  function getNumberOfProductsByCategory($category) {
    global $dbh;

    $stmt = $dbh->prepare('SELECT COUNT(*) AS count FROM Artigo WHERE Categoria = ?');
    $stmt->execute(array($category));
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  function getProductsBySearch($category, $search_name, $search_min, $search_max) {
    global $dbh;
    $queryMarca = 'SELECT * FROM Artigo WHERE Categoria = ?';
    $queryModelo = 'OR Categoria = ?';
    $paramsMarca = array($category);
    $paramsModelo = array($category);

    if ($search_name != '') {
      $queryMarca = $queryMarca . ' AND Marca LIKE ?';
      $queryModelo = $queryModelo . ' AND Modelo LIKE ?';
      $paramsMarca[] = "%$search_name%";
      $paramsModelo[] = "%$search_name%";
    }

    if ($search_min != '') {
      $queryMarca = $queryMarca . ' AND Preço >= ?';
      $queryModelo = $queryModelo . ' AND Preço >= ?';
      $paramsMarca[] = $search_min;
      $paramsModelo[] = $search_min;
    }

    if ($search_max != '') {
      $queryMarca = $queryMarca . ' AND Preço <= ?';
      $queryModelo = $queryModelo . ' AND Preço <= ?';
      $paramsMarca[] = $search_max;
      $paramsModelo[] = $search_max;
    }

    $query = $queryMarca." ".$queryModelo;
    $params = array_merge($paramsMarca, $paramsModelo);

    $stmt = $dbh->prepare($query);
    $stmt->execute($params);

    return $stmt->fetchAll();
  }
 ?>
