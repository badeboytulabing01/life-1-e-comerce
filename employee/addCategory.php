<?php require_once "../parts/employee_parts/employee_session.php"; ?>
<?php require_once ("../inc/conn.php"); ?>
<?php  require_once("../mainClass.php");?>

<!DOCTYPE html>
<html lang="en">
<?php require_once "../parts/employee_parts/employee_head.php"; ?>

<body>
<?php require_once "../parts/employee_parts/employee_sidebar.php"; ?>

<?php 
if (isset($_POST["submit"])) {
  $name  = $_POST["name"];

  if ($_FILES["image"]["error"] === 4) {
    echo 
    "<script>alert('Image Does not Exist'); </script>";
  }
  else{
    $fileName = $_FILES["image"]["name"];
    $fileSize = $_FILES["image"]["size"];
    $tmpName  = $_FILES["image"]["tmp_name"];

    $validImageExtension = ['jpg','jpeg','png'];
    $imageExtension = explode('.', $fileName);
    $imageExtension = strtolower(end($imageExtension));

    if (!in_array($imageExtension, $validImageExtension)) {
      echo 
    "<script>alert('invalid image Extension '); </script>";
    }
    else if($fileSize > 100000){
      echo 
    "<script>alert('Image Size is to large'); </script>";
    }

    else{
      $newImageName = uniqid();
      $newImageName .= '.' . $imageExtension;

      move_uploaded_file($tmpName, '../img/category/' . $newImageName);
      $query = "INSERT INTO tbl_category (image, category_name ) VALUES('$newImageName', '$name')";
      mysqli_query($conn, $query);

      echo 
    "<script>
    alert('Succesfully added');
    document.location.href = 'category.php'; 
    </script>"; 
    }
  }
}

 ?>
<div class="col py-3">
          <div class="container-fluid" id="category_table">
          <form action="" method="post" autocomplete="off" enctype="multipart/form-data">
             <label for="image">Category Image</label>
             <input type="file" name="image" id="img" accept="image/*" required class="form-control"/>
           
             <label for="image">Category Name</label>
             <input type="text" name="name" id="name" required class="form-control"/>
            <button type="submit" name="submit" id="submit" class="btn btn-outline-success mt-2 text-right"> Submit</button>
            </form>
          </div><!-- end of container -->
        </div><!-- end of col-py -->
    </div><!-- end of flex wrap -->
</div><!-- end of container -->
 
  <?php require_once "update_delete/delete.php" ?>
 <?php require_once "../parts/employee_parts/employee_js.php" ?>
  <!-- end of js -->

</body>
</html>