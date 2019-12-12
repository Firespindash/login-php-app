<?php
  session_start();
  include('connection-manager.php');
  include('validator.php');

  $query = "insert into data (user, passwd) values ('{$user}', md5('{$pass}'))";

  $test = "select * from data where user = '{$user}' and passwd = md5('{$pass}')";

  $result = mysqli_query($connection, $test);

  $exist = mysqli_num_rows($result);

  if ($exist == 1) {
    header('Location: signup.php');
    exit();
  }
  else {
    $insert = mysqli_query($connection, $query);
    header('Location: login.php');
    exit();
  }

?>
