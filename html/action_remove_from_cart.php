<?php
  require_once('config/init.php');
  require_once('database/ProductList.php');

  if(!isset($_SESSION)) {
    session_start();
  }

  $limpar = $_POST['limpar'];
  $numserie = $_GET['numserie'];

  if(strcmp($limpar, 'limpar') == 0) {
    unset($_SESSION['cart']);
    header('Location: list_cart.php');
    exit();
  }

  $_SESSION['cart'][$numserie]['Quantidade'] -= 1;

  if($_SESSION['cart'][$numserie]['Quantidade'] == 0)
    unset($_SESSION['cart'][$numserie]);

  if($_SESSION['cart'] == null) {
    unset($_SESSION['cart']);
    header('Location: list_cart.php');
    exit();
  }


  $_SESSION['message'] = 'Produto removido do carinho!';
  header('Location: list_cart.php');
?>
