<?php
  session_start();
  include('connection-manager.php');

  $user = $_SESSION['user'];

  $query = "delete from data where user = '{$user}'";

  $test = "select * from data where user = '{$user}'";

  $result = mysqli_query($connection, $test);

  $exist = mysqli_num_rows($result);

  if ($exist == 1) {
    $delete = mysqli_query($connection, $query);
    session_destroy();
    header('Location: index.html');
    exit();
  }
  else {

    exit();
  }

?>
