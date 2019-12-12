<?php
  session_start();
  include('connection-manager.php');
  include('validator.php');

  $query = "select * from data where user = '{$user}' and passwd = md5('{$pass}')";

  $result = mysqli_query($connection, $query);

  $row = mysqli_num_rows($result);

  if ($row == 1) {
    $_SESSION['user'] = $user;
    header('Location: content.php');
    exit();
  }
  else {
    header('Location: login.php');
    exit();
  }
?>
