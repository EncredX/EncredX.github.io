<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php

    //     $host="localhost";
    //     $user="root";
    //     $password="";
    //     $db="loginsystem";
    //
    //     $con = mysql_connect($host,$user,$password);
    //     mysql_connect($host,$user,$password);
    //     mysql_select_db($db);
    //
    //     if(isset($_POST['user_uname'])){
    //
    //         $uname=$_POST['user_uname'];
    //         $password=$_POST['user_pwd'];
    //
    //         $sql="SELECT * FROM users WHERE user_uname='".$uname."' AND user_pwd='".$password."' limit 1";
    //
    //         $result = mysql_query($sql);
    //
    //         if(mysql_num_rows($result) == 1){
    //             echo " You Have Successfully Logged in, "."$uname";
    // }}
    //

    ?>

    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>WELCOME to level 0 </h1>


<?php

//LEVEL FETCHING
            include 'login-conn.php';
            include 'level-conn.php';
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




}}
//Level Increment

$answer = $_GET['answer'];

if($answer == "zero"){
  $userLevel += 1;
  echo "$userLevel";


  $levelsql = "SELECT "
}

else{

  echo "<h1> RETRY</h1>";
}

 ?>
 <form method="get" action="level0.php">
   <input type="text" name="answer" placeholder="Answer">
   <input type="submit" name="submit" value="Submit">
    </form>


  </body>
</html>
