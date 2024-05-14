<?php
session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <title>COSC4806</title>
  </head>

  <body>
    <h1>Welcome <?php echo $_SESSION["username"] ?> to COSC4806 Assignment#1</h1>
    <p><a href="/login.php">Login</a></p>
  </body>
</html>