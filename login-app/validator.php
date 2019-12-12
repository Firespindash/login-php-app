<?php

  if(empty($_POST['user']) || empty($_POST['passwd'])) {
    header('Location: index.html');
    exit();
  }

  if(strlen($_POST['user']) > 32 || strlen($_POST['passwd']) > 32) {
    header('Location: index.html');
    exit();
  }

  $user = preg_replace('/[^[:alpha:]_]/', '',$_POST['user']);
  $pass = preg_replace('/[^[:alnum:]_]/', '',$_POST['passwd']);

?>
