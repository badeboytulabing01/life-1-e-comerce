 <div class="row">
      <?php 
         $customerID =  $userdeatails['user_id'];      
       ?>
        <div class="col-md-12">
           <?php $view_product = mysqli_query($conn, "SELECT * FROM tbl_buying where user_id='$customerID' and status='Delivery'"); ?>
          <table class="table">
         <thead>
             <div class="d-flex">
                 <h5 class="text-uppercase me-1">To</h5>
                 <h5 class="text-uppercase text-success">Pay</h5>
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
              echo(number_format($totalPrice,2));
                 ?> </td>
           </tr>
         <?php endwhile;?>
     </tbody>
 <tbody>
    <td></td><td></td><td><td>
    <?php
    $user_id =  $userdeatails['user_id'];
    $view_totalSale = mysqli_query($conn, "SELECT user_id, SUM(price*qty+shipping_fee) as total_sale FROM tbl_buying WHERE user_id='$user_id' and status='Delivery'"); ?>
     <?php while ($row = mysqli_fetch_assoc($view_totalSale)):?>
    <td>
         <div class="row" id="check_out">
          <div class="col-md-12">          
           <span class="me-2"> Total: ₱<?php $total_sale = $row["total_sale"];
            echo(number_format($total_sale,2));?></span>
         </div><!-- end of col-dm-12 -->
        </div><!-- end of row -->
    </td>
     <?php endwhile; ?>
  </tbody>
      </table>
        </div><!-- end of col-m-12 --> 
      </div><!-- end of row -->