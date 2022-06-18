<?php
  session_start();

  if(!isset($_SESSION['authy']) || $_SESSION['authy'] != 'yes') {
    header('Location: login.php?login=erro2');
  } else if($_SESSION['authy'] = 'yes' && isset($_GET['logout'])){
    session_destroy();
    header("Location: login.php");
  };

?>