  <!-- add category -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
 
 <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">

   <div class="modal-content">
     
     <div class="modal-header">
       <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
     </div>
     
     <div class="modal-body">
       
        <form action="" method="post" autocomplete="off" enctype="multipart/form-data">
             <label for="image">Category Image</label>
             <input type="file" name="image" id="image" accept="image/*" required class="form-control"/>
           
             <label for="image">Category Name</label>
             <input type="text" name="name" id="name" required class="form-control"/>

             <input type="hidden" name="employee_id" id="employee_id" value="<?= $userdeatails['user_id'];?>" />
 
             <input type="hidden" name="empname" id="empname" value="<?= $userdeatails['Lastname'];?>, <?= $userdeatails['firstname'];?>" />
            <button type="submit" name="addCategory" class="btn btn-outline-success mt-2 text-right"> Submit</button>
        </form>
     </div><!--end of modal body -->

     <div class="modal-footer">
       <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
     </div>

   </div>

 </div>

</div>
<!-- end of add category -->


  <!-- add product -->
    <div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
 
 <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">

   <div class="modal-content">
     
     <div class="modal-header">
       <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
     </div>
     
     <div class="modal-body">
       
        <form action="" method="post" autocomplete="off" enctype="multipart/form-data">
            <div class="row">
              <div class="col-md-12">
                <label>Image</label>
                <input type="file" name="image" id="image" accept="image/*" required class="form-control"/>
              </div><!-- end of col-md-4 -->
              <div class="col-md-12">
               <label for="image">Product Name</label>
                  <input type="text" name="name" id="name" required class="form-control" placeholder="Enter Product Name" />
              </div><!-- end of col-md-12 -->

              <div class="col-md-12">
               <label for="image">Description</label>
                  <input type="text" name="description" id="description" required class="form-control" 
                  placeholder="Enter Product Description" />
              </div><!-- end of col-md-12 -->

              <div class="col-md-12">
               <label>Category</label>
                <select name="category" class="form-control"> 
                 <option>Select</option>
                 <?php $view_category = mysqli_query($conn, "SELECT * FROM  tbl_category where status='view'"); ?>
                    <?php while ($row = mysqli_fetch_assoc($view_category)):?>                   
                   <option value=" <?php $category_id = $row["category_id"];?> <?php echo $category_id;?>">
                    <?php $category_name = $row["category_name"];?> <?php echo $category_name;?>
                   </option>
                   
                   <?php endwhile; ?>
                </select>
              </div><!-- end of colmd 12 -->

              <div class="col-md-6">
               <label for="image">Price</label>
                  <input type="number" name="price" id="price" required class="form-control" 
                  placeholder="Enter Product Product Price" value="0" />
              </div><!-- end of col-md-12 -->

            <div class="col-md-6">
               <label for="image">Discount Fee</label>
                  <input type="number" name="discount" id="discount" required class="form-control" 
                  placeholder="Discount Fee" value="0" />
              </div><!-- end of col-md-12 -->

                <div class="col-md-6">
               <label for="image">Shipping Fee</label>
                  <input type="number" name="shipping" id="shipping" required class="form-control" 
                  placeholder="Shipping Fee" value="0" />
              </div><!-- end of col-md-12 -->
              
              <div class="col-md-6">
               <label for="image">Stock</label>
                  <input type="number" name="stock" id="stock" required class="form-control" 
                  placeholder="Stock" value="0" />
              </div><!-- end of col-md-12 -->

              <div class="col-md-12">
               <label for="image">Color</label>
                  <input type="text" name="color" id="color" class="form-control" 
                  placeholder="Available Color"/>
              </div><!-- end of col-md-12 -->

               <div class="col-md-12">
               <label for="image">Size</label>
                  <input type="text" name="Size" id="size" class="form-control" 
                  placeholder="Available Size" />
              </div><!-- end of col-md-12 -->


               <div class="col-md-12">
               <label for="image">Product Status</label>
                  <select name="statusProduct" class="form-control">
                     <option>Select Product Status</option>
                     <option value="Customer Allowed to Request Price">Customer Allowed to Request Quotation </option>
                     <option value="none">none</option>
                  </select>
              </div><!-- end of col-md-12 -->
                
            <input type="hidden" name="empname" id="empname" value="<?= $userdeatails['Lastname'];?>, <?= $userdeatails['firstname'];?>" />
            <input type="hidden" name="employee_id" id="employee_id" value="<?= $userdeatails['user_id'];?>" />
            
            </div><!-- end of row -->
              <button type="submit" name="submit" class="btn btn-outline-success mt-2 text-right"> Submit</button>
        </form>
     </div><!--end of modal body -->

     <div class="modal-footer">
       <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
     </div>

   </div>

 </div>

</div>
<!-- end of add product -->

   