<?php require_once "../parts/employee_parts/employee_session.php"; ?>
<?php require_once ("../inc/conn.php"); ?>
<?php  require_once("../mainClass.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<?php require_once "../parts/employee_parts/employee_head.php"; ?>

<body>
<?php require_once "../parts/employee_parts/employee_sidebar.php"; ?>

<div class="col py-3">
          <div class="container-fluid" id="category_table">
          
          <a href="addCategory.php">add</a>
           <?php $view_category = mysqli_query($conn, "SELECT * FROM  tbl_category where status='view'"); ?>
          <div class="table">  
        <table id="category" class="table table-responsive" cellspacing="0" width="100%">
            <thead>
             <tr>
               <th>Category ID</th>
               <th>Image</th>
               <th>Category Name</th>
               <th>Action</th>
             </tr> 
             </thead>
                 <tbody>
                 <?php while ($row = mysqli_fetch_assoc($view_category)):
                  $category_id   = $row["category_id"];?>
                 <tr>
                 <td><?php echo $category_id; ?></td>
                 <td><img src="../img/category/<?php echo $row['image'];?>"></td> 
                 <td><?php $category_name = $row["category_name"];?> <?php echo $category_name;?></td> 
                 <td>
                  <form action="category.php" method="POST">
                  <input type="hidden" name="category_id" value="<?php echo $row['category_id'];?>">
                  <?php echo "<a href='caetgory_update.php?category_id=$category_id'
                   class='btn btn-outline-primary me-2'><i class='fa fa-edit' aria-hidden='true'></i> Edit</a>"; ?>
                  <button type="submit" id="delete_category" name="delete_category" class="btn btn-outline-danger">
                    <i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
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