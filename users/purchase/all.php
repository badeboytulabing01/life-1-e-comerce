<div class="row">
      <?php 
         $customerID =  $userdeatails['user_id'];      
       ?>
        <div class="col-md-12">
           <?php $view_product = mysqli_query($conn, "SELECT * FROM tbl_buying where user_id='$customerID'"); ?>
          <table class="table" id="category">
         <thead>
           <div class="d-flex">
                 <h5 class="text-uppercase me-1"></h5>
                 <h5 class="text-uppercase text-success">All</h5>
              </div>
           <tr>
             <th>Product</th>
              <th>Unit Price</th>
              <th>Quantity</th>
              <th>Shipping Fee</th>
              <th>Total Price</th>
            </tr>  
            <br>
         </thead>
       
         <tbody>
         <?php while ($row    = mysqli_fetch_assoc($view_product)):
                  $buy_id     = $row["buy_id"];
                  $product_id = $row["product_id"];
                  $image = $row["image"];
                  $discount = $row["discount"];
                  $shipping_fee = $row["shipping_fee"];

                
                  ?>
         <tr>
            <td>
            <img src="../img/products/<?php echo $row['image'];?>" class="img-fluid" width="50">
            <label><?php $product_name = $row["product_name"];?> <?php echo $product_name;?></label>
           </td>
           <td><?php $price = $row["price"];?>₱<?php echo (number_format($price,2));?></td>
           <td><?php $qty = $row["qty"];?> <?php echo $qty;?></td>
           <td><?php echo $shipping_fee; ?></td>
           <td>₱<?php 
             $totalPrice = $price * $qty + $shipping_fee;
              echo(number_format($totalPrice,2));?>
         </td>
        </tr>
         <?php endwhile;?>
         </tbody>
      </table>
    </div><!-- end of col-m-12 --> 
 </div><!-- end of row -->