<?php 
session_start();
?>

<html>
	<head>
		<title> User Login </title>
	</head>
<body bgcolor="gray">
	
	<form method="post" action="user-login.php">
	
		<table width="400" border="10" align="center" bgcolor="#79CDCD">
			
			<tr>
				<td bgcolor="yellow" colspan="4" align="center"><h1> Log In </h1></td>
			</tr>
		
			<tr>
				<td align="right"> User Name: </td>
				<td><input type="text" name="name"></td>
			</tr>
			
			<tr>
				<td align="right"> User Password: </td>
				<td><input type="password" name="pass"></td>
			</tr>
			
			<tr>
				<td colspan="4" align="center"><input type="submit" name="login" value="Login"></td>
			</tr>
		</table>
	</form>
</body>
</html>

<?php

require("includes/connect.php");

if(isset($_POST['login'])){
	
	$user_name = $_POST['name'];
	$user_pass = $_POST['pass'];
	
	// $encrypt = md5($user_password);

$admin_query = "SELECT * from user_login WHERE user_name='$user_name' AND user_pass='$user_pass'";
	$run = mysqli_query($connection, $admin_query);     
/*
$db = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);

$sql="SELECT * FROM admin_login where admin_name='$user_name' AND admin_pass='$user_pass'";
$STH = $db->prepare($sql);
$STH->execute(array($user_name));
$User = $STH->fetch();

if (!empty($user_name) && password_verify($user_pass,$User[admin_pass]))
  echo "Logged in";
else
  echo "User/password incorrect";               */
	if(mysqli_num_rows($run)>0)
	{
	
	$_SESSION['name'] = $user_name;
	
	echo "<script>window.open('users/index.php','_self')</script>";
	}
	else {
	echo "<script>alert('User name or password is incorrect')</script>";
		  }
                               }
?>