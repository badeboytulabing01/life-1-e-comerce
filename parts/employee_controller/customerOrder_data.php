<?php  
  $user_id = $_REQUEST["user_id"];
$get_record = mysqli_query($conn, "SELECT * FROM tbl_buying WHERE user_id ='$user_id'");
  while ($row_edit = mysqli_fetch_assoc($get_record)) {
  $db_product_id = $row_edit["product_id"];
  $db_customer_name = $row_edit["customer_name"];
  $db_buy_id = $row_edit["buy_id"];
  $db_image = $row_edit["image"];
  $db_price = $row_edit["price"];
  $db_discount = $row_edit["discount"];
  $db_shipping_feee = $row_edit["shipping_fee"];
  $db_color = $row_edit["color"];
  $db_size = $row_edit["size"];
  $db_address = $row_edit["address"];
  $db_mobile_number = $row_edit["mobile_number"];
  $db_qty = $row_edit["qty"];
  $db_statuse = $row_edit["status"];

}
//end of edit category

  
?>