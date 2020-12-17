<?php
  function getSepcsByProduct($category, $numserie) {
    global $dbh;

    switch($category) {

      case 'Monitor':
        $stmt = $dbh->prepare('SELECT * FROM Monitor JOIN Artigo ON Artigo.Num_serie = ? AND Monitor.Num_serie = ?');
        break;

      case 'Rato':
        $stmt = $dbh->prepare('SELECT * FROM Rato JOIN Artigo ON Artigo.Num_serie = ? AND Rato.Num_serie = ?');
        break;

      case 'Teclado':
        $stmt = $dbh->prepare('SELECT * FROM Teclado JOIN Artigo ON Artigo.Num_serie = ? AND Teclado.Num_serie = ?');
        break;

      case 'Headphones':
        $stmt = $dbh->prepare('SELECT * FROM Headphones JOIN Artigo ON Artigo.Num_serie = ? AND Headphones.Num_serie = ?');
        break;

      case 'PSU':
        $stmt = $dbh->prepare('SELECT * FROM PSU JOIN Artigo ON Artigo.Num_serie = ? AND PSU.Num_serie = ?');
        break;

      case 'CPU':
        $stmt = $dbh->prepare('SELECT * FROM CPU JOIN Artigo ON Artigo.Num_serie = ? AND CPU.Num_serie = ?');
        break;

      case 'GPU':
        $stmt = $dbh->prepare('SELECT * FROM GPU JOIN Artigo ON Artigo.Num_serie = ? AND GPU.Num_serie = ?');
        break;

      case 'RAM ':
        $stmt = $dbh->prepare('SELECT * FROM RAM JOIN Artigo ON Artigo.Num_serie = ? AND RAM.Num_serie = ?');
        break;

      case 'Disco':
        $stmt = $dbh->prepare('SELECT * FROM Disco JOIN Artigo ON Artigo.Num_serie = ? AND Disco.Num_serie = ?');
        break;
    }

    $stmt->execute(array($numserie, $numserie));
    return $stmt->fetchAll();
  }
 ?>
