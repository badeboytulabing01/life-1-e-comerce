<?php  
  $category_id = $_REQUEST["category_id"];

$get_record = mysqli_query($conn, "SELECT * FROM tbl_category WHERE category_id ='$category_id'");
  while ($row_edit = mysqli_fetch_assoc($get_record)) {
  $category_id = $row_edit["category_id"];
  $db_image = $row_edit["image"];
  $db_category_name = $row_edit["category_name"];
  $db_user_id = $row_edit["user_id"];
  $db_employee_name = $row_edit["employee_name"];
  $db_encoder_update = $row_edit["encoder_update"];
}
//end of edit category

  
?>