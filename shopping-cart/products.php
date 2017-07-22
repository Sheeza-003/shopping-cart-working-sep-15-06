<?php

 function products(){

	$get = mysql_query('SELECT id, title, price, description, quantity From products WHERE quantity > 0 ORDER BY id DESC');
	if(mysql_num_rows($get)==0)
	{
		echo "no products to display";

	} else{
		
	while ($get_row = mysql_fetch_assoc($get)){
   
<div class="row">
        
        <div class="col-sm-6 col-md-4" >
            <div class="thumbnail">
                <img src= "{{ $product->imagePath }}" alt="..." class="img-responsive">

                <div class="caption">
                    <h3><?php echo '<br/>'.$get_row['title']; ?> </h3>
                    <p class="description"><?php echo '<br/>'.$get_row['description']; ?></p>
                  <div class="clearfix">
                      <div class="pull-left price"> <?php echo '<br/>'.number_format($get_row['price'], 2); ?> </div>
                    <?php echo '<br/>'.$get_row['quantity'];  ?>
                    <a href="cart.php?add='. $get_row['id'].'" class="btn btn-primary pull-right" role="button"> Add to cart <i class="fa fa-shopping-cart" aria-hidden="true"></i> </a>
                  </div>
                </div>
            </div>
        </div>
           
    </div>
	
		}
    }//else
}//product

?>