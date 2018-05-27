<?php
$dbServerName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "loginsystem";
$conn = mysql_connect($dbServerName, $dbUsername, $dbPassword, $dbName);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<div class="signup-page">

  <form method="post"  action="signup-conn.php">
    <input type="text" name="user_name" placeholder="Name">
    <input type="text" name="user_uname" placeholder="Username">
    <input type="password" name="user_pwd" placeholder="Password">
    <input type="email" name="user_email" placeholder="E-mail">



    <input type="submit" name="submit" value="Sign In">

  </form>
          <br><br>

    <p><a href="index.php">Login</a></p>
</div>



  </body>
</html>
