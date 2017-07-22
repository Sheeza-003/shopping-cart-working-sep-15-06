<?php

session_start();
//session_destroy();
error_reporting(E_ERROR);

$page = 'index.php';
mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('cart') or die(mysql_error());
//echo "done!";
//require "../includes/connect.php"; 

if (isset($_GET['add'])) {
 $quantity = mysql_query('SELECT id, quantity FROM products WHERE id='.mysql_real_escape_string((int)$_GET['add']));
 while ($quantity_row = mysql_fetch_assoc($quantity)){
 	if ($quantity_row['quantity']!=$_SESSION['cart_'.(int)$_GET['add']]){
 		$_SESSION['cart_'.(int)$_GET['add']]+='1';
 	}
 }
header('Location: '.$page);
 
}

if (isset($_GET['remove'])){
	$_SESSION['cart_'.(int)$_GET['remove']]--;
	header('Location:'.$page);
}

if (isset($_GET['delete'])){
	$_SESSION['cart_'.(int)$_GET['delete']]='0';
	header('Location: '.$page);
}



function products(){
  $get = mysql_query('SELECT id, title, price, description, quantity, image From products WHERE quantity > 0 ORDER BY id ASC');
  if(mysql_num_rows($get)==0){  echo "no products to display"; } 
  else{
  //echo '<div class="col-sm-6 col-md-4" >';
  while ($get_row = mysql_fetch_assoc($get)){
    ?>
    <div class="row-pull-left">
  <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <?php echo "<img src='".$get_row['image']."' class='img-responsive'>"; ?>

                <div class="caption">
                    <h3><?php echo '<br/>'.$get_row['title']; ?> </h3>
                <p class="description"> <?php echo '<br/>'.$get_row['description']; ?></p>             

                  <div class="clearfix">
                      <div class="pull-left price"> <?php echo '<br/>'.number_format($get_row['price'], 2); ?> </div> 
                  
                   <p> <?php echo '<a href="cart.php?add='. $get_row['id'].'" class="btn btn-primary pull-right" role="button">Add to cart <i class="fa fa-shopping-cart" aria-hidden="true"></i></a>'; ?>
                   
                   </p>
</div>
</div> 
</div> 
</div>
  <?php
    }
    }//else
}//product
	

function cart(){
	//echo '<h1>'.$_SESSION['cart_1'].$_SESSION['name'].'</h1>';
	// $cart_id = $_SESSION['cart_1'];
	 $u_name = $_SESSION['name'];
	// $query = "UPDATE user_cart SET product_id = '$cart_id' WHERE user_name = '$u_name' " ;

	// mysql_query($query) or trigger_error(mysql_error()." in ".$query);

	echo '<h2> My Cart </h2>';
	foreach ($_SESSION as $name => $value) {
	if($value>0){
		if(substr($name, 0, 5)=='cart_'){
			$id = substr($name, 5, (strlen($name)-5));
			$get = mysql_query('SELECT id, title, price FROM products WHERE id =' .mysql_real_escape_string((int)$id));
			while ($get_row=mysql_fetch_assoc($get)) {
            $total= $get_row['price'] * $value;  

            $title =$get_row['title'];

  //  Remove coments if you want to insert Product in mysql 
  // $query = "UPDATE user_cart SET product = CONCAT(product , ',$title x$value,') WHERE user_name = '$u_name' " ;
	 // mysql_query($query) or trigger_error(mysql_error()." in ".$query);

 			echo '<h3>'.$get_row['title'].'</h3>' .' | Quantity:'.$value.'| Price: $'.$get_row['price'].' | Total= '.$total.'<a href="cart.php?remove='.$id.'"> [-] </a> <a href="cart.php?add='.$id.'"> [+] </a> <a href="cart.php?delete='.$id.'"> Delete </a> <br/>';
			}
		}
         
         $sub += $total;
	}
	}
       if($sub==0){
         	echo 'Your cart is empty.';
         }else 
         { echo '<br/> Total: &pound'. number_format($sub, 2);
         // below paypal code, out of php for fast
         ?>
         
         <?php

         echo '<hr/>';

          }
}

	?>


 
<!-- for showing their products to user throught mysql
<?php
 // function myproducts(){
 // 	$u_name = $_SESSION['name'];
	// $myquery = mysql_query("SELECT product FROM user_cart WHERE user_name ='$u_name'");
	// while ($item = mysql_fetch_assoc($myquery)) {
	// 	echo '<h3>'.$item['product'].'</h3>';	}	
	// }
?> -->
 