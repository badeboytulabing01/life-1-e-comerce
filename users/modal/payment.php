  <!-- add category -->
    <div class="modal fade" id="payment" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
 
 <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">

   <div class="modal-content">
     
     <div class="modal-header">
       <h5 class="modal-title text-uppercase" id="exampleModalLabel">Cash on delivery only</h5>
       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
     </div>
     
     <div class="modal-body text-center">
        <p><img src="../img/icon/location.png" class="img-fluid" width="20"> <?= $userdeatails['address'];?></p>

        <p><img src="../img/icon/contact.png" class="img-fluid" width="20"> <?= $userdeatails['contact_number'];?></p>

        <form action="update/payment_process.php" method="post" autocomplete="off" enctype="multipart/form-data">
             <input type="hidden" name="buy_id" id="buy_id" required class="form-control" value="<?php echo $buy_id; ?>" />
             <input type="hidden" name="user_id" id="user_id" required class="form-control" value="<?php echo $user_id; ?>" />

             <input type="hidden" name="product_id" id="product_id" required class="form-control" value="<?php echo $product_id; ?>" />

             <label for="image">Total Payment</label>
              <h5>₱<?php  echo(number_format($total_sale,2)); ?></h5>
             <input type="hidden" name="status" id="status" required class="form-control" value="Delivery" />

            <button type="submit" name="submit" class="btn btn-outline-success mt-2 text-right">Confirm</button>
        </form>
     </div><!--end of modal body -->

     <div class="modal-footer">
       <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
     </div>

   </div>

 </div>

</div>
<!-- end of add category -->

