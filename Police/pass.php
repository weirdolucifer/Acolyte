
<?php
session_start();
$errors = array();
$message =NULL; 

$con=mysql_connect('localhost','root','') or die(mysql_error());  
mysql_select_db('Law') or die("cannot select DB"); 
 
if(isset($_POST['submit']))
{

$user_1=$_SESSION['sess_user'];
$user_2=$_POST['user'];
$pass_1=$_POST['pass1'];
$pass_2=$_POST['pass2'];
$pass_3=$_POST['pass3'];

if ($user_1 != $user_2) {
      array_push($errors, "Citizen_id is not correct");
    }

if ($pass_2 != $pass_3) {
  array_push($errors, "The confirm new password do not match");
  }

$query=mysql_query("SELECT Password FROM police WHERE Officer_id='".$user_2."' AND Password='".$pass_1."'");  
$num=mysql_num_rows($query); 

if($num==0){
  array_push($errors, "Old Password is not correct");
}

if (count($errors) == 0) {
if($num>0)
{
mysql_query("UPDATE police SET Password='".$pass_2."' where Officer_id='".$user_2."'");


$message = "Password Changed";
}
}
}
?>
