<?php
  session_start();
  require_once('config/init.php');

  if(isset($_SESSION) && $_SESSION['loggedin'] == true) {
    session_destroy();
    header("Location: templates/homepage.php");
  }
?>
