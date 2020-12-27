<?php
  function getRandomProducts() {
    global $dbh;

    $stmt = $dbh->prepare('SELECT Num_serie FROM Artigo ORDER BY RANDOM() LIMIT 4');
    $stmt->execute(array());

    return $stmt->fetchAll();
  }

  function getProductsByNumSeries($numserie) {
    global $dbh;

    $stmt = $dbh->prepare('SELECT * FROM Artigo WHERE Num_serie = ? OR Num_serie = ? OR Num_serie = ? OR Num_serie = ?');
    $stmt->execute(array($numserie[0]['Num_serie'],$numserie[1]['Num_serie'],$numserie[2]['Num_serie'],$numserie[3]['Num_serie']));

    return $stmt->fetchAll();
  }
?>
