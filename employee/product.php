<?php require_once "../parts/employee_parts/employee_session.php"; ?>
<?php require_once ("../inc/conn.php"); ?>
<?php  require_once("../mainClass.php");
 $ecomerce->add_product();
 ?>
<!DOCTYPE html>
<html lang="en">
<?php require_once "../parts/employee_parts/employee_head.php"; ?>

<body>
<?php require_once "../parts/employee_parts/employee_sidebar.php"; ?>
<?php $employee_id = $userdeatails['user_id'];?>
<div class="col py-3">
          <div class="container-fluid" id="category_table">
          <button type="button" class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#productModal"> <i class="fa fa-plus" aria-hidden="true"></i> Add Product</button>
          <?php require_once "modal/addCategory.php"; ?>
        <div class="table">
           <?php $view_product = mysqli_query($conn, "SELECT * FROM  tbl_product where status='view_product' and employee_id='$employee_id' "); ?>
        <table id="category" class="table table-responsive" cellspacing="0" width="100%">
            <thead>
             <tr>
               <th>Product ID</th>
               <th>Image</th>
               <th>Product Name</th>
               <th>Category</th>
               <th>Price</th>
               <th>Discount</th>
               <th>Stock</th>
               <th>Shipping Fee</th>
               <th>Action</th>
             </tr> 
             </thead>
                <tbody>
                 <?php while ($row = mysqli_fetch_assoc($view_product)):
                  $product_id   = $row["product_id"];?>
                 <tr>
                 <td><?php echo $product_id; ?></td>
                 <td><img src="../img/products/<?php echo $row['image'];?>"></td> 
                 <td><?php $product_name = $row["product_name"];?> <?php echo $product_name;?></td> 
                 <td><?php $category = $row["category"];?> <?php echo $category;?></td> 
                 <td><?php $price = $row["price"];?>₱<?php echo (number_format($price,2));?></td> 
                 <td><?php $discount = $row["discount"];?> <?php echo $discount;?> %</td> 
                 <td><?php $product_stock = $row["product_stock"];?><?php echo (number_format($product_stock,2));?></td> 
                 <td><?php $shipping_fee = $row["shipping_fee"];?>₱<?php echo (number_format($shipping_fee,2));?></td>
                 <td>
                  <form action="product.php" method="POST">
                  <input type="hidden" name="product_id" value="<?php echo $row['product_id'];?>">
                  <div class="d-flex">
                 <?php echo "<a href='product_view.php?product_id=$product_id'
                   class='btn btn-outline-success me-1'><i class='fa fa-eye' aria-hidden='true'></i> View</a>"; ?>

                    <?php echo "<a href='product_update.php?product_id=$product_id'
                   class='btn btn-outline-primary me-1'><i class='fa fa-edit' aria-hidden='true'></i> Edit</a>"; ?>

                  <button type="submit" id="delete_product" name="delete_product" class=" btn btn-outline-danger">
                    <i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                    </div><!-- end of d-flex --> 
                  </form>
                  </td>
                 </tr>
                 <?php endwhile;?>
             </tbody> 
              </table>
            </div><!-- end of category -->
          </div><!-- end of container -->
        </div><!-- end of col-py -->
    </div><!-- end of flex wrap -->
</div><!-- end of container -->
  <?php require_once "update_delete/delete.php" ?>
 <?php require_once "../parts/employee_parts/employee_js.php" ?>
  <!-- end of js -->

</body>
</html>