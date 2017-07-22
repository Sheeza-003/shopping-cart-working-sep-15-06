<?php
require "includes/connect.php";
//require "includes/globals.php";
?>


<?php

//require "views/reg/register.html";

if(isset($_POST['submit']))
{
	
$name_var = $_POST['name'];
$pass_var = $_POST['password'];
$email_var = $_POST['email'];


                          
 

// echo $date_var;
if($name_var=='' or $pass_var=='' or $code !== $user)
  {
echo '<script>alert("Please Fill all Fields Correctly!")</script>';
echo("<script>window.location = 'views/register.html';</script>");

exit();
  }
else {
  
$insert_query_var = "INSERT INTO user_login (user_name, user_pass , email) VALUES('$name_var', '$pass_var','$email_var') " ;
  
if(mysqli_query($connection, $insert_query_var)){
echo "<script>alert('You Registered Successfully !')</script>";
  echo("<script>window.location = 'user-login.php';</script>");

                                               }

}//............else
}//....on submit
?>