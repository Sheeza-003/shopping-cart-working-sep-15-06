<div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="..." alt="...">
      <div class="caption">
        <h3>Thumbnail label</h3>
        <p>...</p>
        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
      </div>
    </div>
  </div>
</div>

<?php
function products(){
  $get = mysql_query('SELECT id, title, price, description, quantity, image From products WHERE quantity > 0 ORDER BY id ASC');
  if(mysql_num_rows($get)==0){  echo "no products to display"; } 
  else{
  //echo '<div class="col-sm-6 col-md-4" >';
  while ($get_row = mysql_fetch_assoc($get)){
    ?>
    <div class="row">
  <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <?php echo "<img src='".$get_row['image']."' class='img-responsive'>"; ?>

                <div class="caption">
                    <h3><?php echo '<br/>'.$get_row['title']; ?> </h3>
                <p class="description"> <?php echo '<br/>'.$get_row['description']; ?></p>             

                  <?php echo '<br/>'.number_format($get_row['price'], 2); ?> 
                  
                   <p> <a href="cart.php?add='. $get_row['id'].'" class="btn btn-primary pull-right" role="button"> Add to cart <i class="fa fa-shopping-cart" aria-hidden="true"></i> </a></p>
                     </div>
    </div>
  </div>
</div>
  <?php
    }
    }//else
}//product