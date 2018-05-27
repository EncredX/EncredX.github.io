<?php

$host="localhost";
$user="root";
$password="";
$db="loginsystem";

$con = mysql_connect($host,$user,$password);
mysql_connect($host,$user,$password);
mysql_select_db($db);

if(isset($_POST['user_uname'])){

    $uname=$_POST['user_uname'];
    $password=$_POST['user_pwd'];

    $sql="SELECT * FROM users WHERE user_uname='".$uname."' AND user_pwd='".$password."' limit 1";

    $result = mysql_query($sql);

    if(mysql_num_rows($result) == 1){
        echo " You Have Successfully Logged in";

        $sql="SELECT user_level FROM users WHERE user_uname='".$uname."' ";
        echo "$sql";
        // header("Location: dashboard.php"); // Redirecting To Other Page
        // exit();
        } else {
        header("Location: index.php"); // Redirecting To Other Page
        echo "Username or Password is invalid";
        exit();
      }
//https://www.tutorialspoint.com/php/mysql_select_php.htm
?>
