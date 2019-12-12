<?php

  if (!$_SESSION['user']) {
    header('Location: login.php');
    exit();
  }

?>
