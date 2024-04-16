<?php  
  $user_id = $_REQUEST["user_id"];
$get_record = mysqli_query($conn, "SELECT * FROM tbl_request WHERE user_id ='$user_id'");
  while ($row_edit = mysqli_fetch_assoc($get_record)) {
  $employee_id = $row_edit["employee_id"];
  $product_id = $row_edit["product_id"];
  $product_name = $row_edit["product_name"];
  $image = $row_edit["image"];
  $full_name = $row_edit["full_name"];
  $contact = $row_edit["contact"];
  $email = $row_edit["email"];
  $address = $row_edit["address"];
  $qty = $row_edit["qty"];
  $color = $row_edit["color"];
  $Size = $row_edit["Size"];
  $status = $row_edit["status"];

}
//end of edit category

  
?>