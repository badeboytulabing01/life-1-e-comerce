<?php  
  $product_id = $_REQUEST["product_id"];

$get_record = mysqli_query($conn, "SELECT * FROM  tbl_product WHERE product_id ='$product_id'");
  while ($row_edit = mysqli_fetch_assoc($get_record)) {
  $db_image = $row_edit["image"];
  $db_product_name= $row_edit["product_name"];
  $db_discription = $row_edit["discription"];
  $db_category = $row_edit["category"];
  $db_price = $row_edit["price"];
  $db_discount = $row_edit["discount"];
  $db_shipping_fee = $row_edit["shipping_fee"];
  $db_color = $row_edit["color"];
  $db_size = $row_edit["size"];
  $db_product_stock = $row_edit["product_stock"];
  $employee_id = $row_edit["employee_id"];
  $display_status = $row_edit["display_status"];
  

}
//end of edit categoy

  
?>