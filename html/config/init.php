<?php
  $dbh = new PDO('sqlite:./sql/loja.db');
  $dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  function GetNumberOfItemsCart() {
    $total = 0;

    if($_SESSION['cart'] != null) {
      foreach($_SESSION['cart'] as $quantity) {
        $total += $quantity['Quantidade'];
      }
    }

    return $total;
  }
 ?>
