<?php 
//require "../includes/globals.php";
require "../includes/connect.php";

require "cart.php";
include 'header.php'; 
//require "../functions.php";
//require "fetch_app.php";
session_start();

if(!isset($_SESSION['name'])){

header("location: ../user-login.php");

                                    }
else {
?>

<html>
	<head>
		<title>Admin Panel</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/app.css">
	
       <link rel="stylesheet" type="text/css" href="../css/admin-panel-styles.css">
	</head>
<body>
<!-- JQuery CDN-->
<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
<!-- BOOTSTRAP Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<div id="sidebar">
<br><br> <span> WELCOME : </span>
<div class="admin-name"><?php echo $_SESSION['name']; ?></div>
<br> <br>
<button><a href="../user-logout.php">Logout</a></button> <br><br>
 <?php 
// myproducts(); ?> 


<?php cart(); ?>

 <?php echo '<pre>';
// var_dump($_SESSION);
// echo '</pre>';
 ?>



<br><br><br>
<?php products(); ?>


</body>
</html>

<?php } ?>