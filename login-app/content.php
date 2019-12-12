<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/content.css">
  </head>
  <body>
    <?php
      session_start();
      include('loginChecker.php');
    ?>

    <h2>Hi, <?php echo $_SESSION['user']; ?></h2>

    <h3>Nasa secrets panel</h3>

    <div class="buttons">
      <button type="button" name="logout" onclick="window.location.href='logout-agent.php'">Logout</button>
      <button type="button" name="delete" onclick="window.location.href='delete-agent.php'">Delete User</button>
    </div>
  </body>
</html>
