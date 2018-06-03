<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <title></title>

<style media="screen">
  h3{
    font-family: Arial;
  }
</style>
  </head>
  <body>

<div class="login-page">

  <form method="post" action="login.php">
    <input type="text" name="user_uname" placeholder="Username">
    <input type="password" name="user_pwd" placeholder="Password">

    <input type="submit" name="submit" value="Login"><br>
    <?php
    include 'db-conn.php';

        if(isset($_POST['user_uname'])){

            $uname=$_POST['user_uname'];
            $password=$_POST['user_pwd'];

            $sql="SELECT * FROM users WHERE user_uname='".$uname."' AND user_pwd='".$password."' limit 1";

            $result = mysql_query($sql);

            if(mysql_num_rows($result) == 1){
                echo " You Have Successfully Logged in, "."$uname";


                $userquery = mysql_query("SELECT level FROM users WHERE user_uname='$uname'");
                if (mysql_num_rows($userquery) != 1){
                    die("User could not be found!");
                }

        //LEVEL FETCHING
                while($row = mysql_fetch_array($userquery, MYSQL_ASSOC)){
                  $userlevel = $row['level'];

                }

    //LEVEL FUNCTION
                function levelurl($userlevel){
                  if( $userlevel == 0 ){
                    header("Location: level0.php");
                    exit();
                  }

                  elseif ($userlevel == 1) {
                    header("Location: level1.php");
                  }

                  else{
                    header("Location: index.php");
                  }

                }

                levelurl();
              }

                else {
     // print
                echo "<h3>Username or Password is invalid</h3>";


              }}
    ?>
  </form>
          <br>

    <p>Haven't registered yet?<a href="signup.php">Register Here</a></p>
</div>

  </body>
</html>
