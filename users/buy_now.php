<?php  require_once("../parts/users_parts/user_session.php"); ?>
<?php require_once ("../inc/conn.php"); ?>
<?php  require_once("../mainClass.php"); ?>
<!DOCTYPE html>
<html lang="en">
<?php require_once "../parts/users_parts/user_head.php"; ?>

<body>
 <!-- navigation -->
 <?php require_once "../parts/user_controller/home_nav.php"; ?>
 <!-- search bar -->
 <?php require_once "../parts/user_controller/home_search.php"; ?>
   <div class="container mt-2" id="buy_now">
      <div class="row">
      <?php 
         $customerID =  $userdeatails['user_id'];      
       ?>
        <div class="col-md-12">
           <?php $view_product = mysqli_query($conn, "SELECT * FROM tbl_buying where status='process' and user_id='$customerID'"); ?>
          <table class="table">
         <thead>
           <tr>
             <th>Product</th>
              <th>Unit Price</th>
              <th>Quantity</th>
              <th>Shipping Fee</th>
              <th>Total Price</th>
              <th>Actions</th>
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
           <td>
             <form action="buy_now.php" method="POST">
              <input type="hidden" name="buy_id" value="<?php echo $row['buy_id'];?>">  
              <button type="submit" id="cancel" name="cancel" class="btn btn-outline-danger">Cancel order</button>
            </form>
           </td>
        </tr>
         <?php endwhile;?>
         </tbody>

          <tbody>
    <td></td><td></td><td><td>
    <?php
    $user_id =  $userdeatails['user_id'];
    $view_totalSale = mysqli_query($conn, "SELECT status, user_id, SUM(price*qty+shipping_fee) as total_sale FROM tbl_buying WHERE user_id='$user_id' AND  status='process'"); ?>
     <?php while ($row = mysqli_fetch_assoc($view_totalSale)):
     $status = $row["status"];?>
    <td>
         <div class="row" id="check_out">
          <div class="col-md-12">          
           <span class="me-2"> Total: ₱<?php $total_sale = $row["total_sale"];
            echo(number_format($total_sale,2));?></span>
            <?php 
               if ($status>="process") {
                 echo
                  "
                    <button href='place_order.php'  data-bs-toggle='modal' data-bs-target='#payment' class='btn btn-success'>Pay Now</button>
                    </form>
                  ";
                  require_once"modal/payment.php";
               }else{
                echo "";
               }
             ?> 
         </div><!-- end of col-dm-12 -->
        </div><!-- end of row -->
    </td>
     <?php endwhile; ?>
  </tbody>


      </table>
        </div><!-- end of col-m-12 --> 
      </div><!-- end of row -->
   </div><!-- end of- contaienr -->
 
<br><br><br><br>
 <?php require_once "delete/delete.php" ?>
 <?php 
  require_once "../parts/user_controller/footer.php"; ?>
  <!-- end of footer -->  
 <?php require_once "../parts/users_parts/user_js.php" ?>
  <!-- end of js -->
</body>
</html>