<?php  
  $user_id  = $_REQUEST["user_id"];
$get_record = mysqli_query($conn, "SELECT * FROM  tbl_users WHERE user_id  ='$user_id'");
  while ($row_edit = mysqli_fetch_assoc($get_record)) {
  $image = $row_edit["image"];
  $lastname= $row_edit["lastname"];
  $firstname = $row_edit["firstname"];
  $username = $row_edit["username"];
  $contact_number = $row_edit["contact_number"];
  $email = $row_edit["email"];
  $address = $row_edit["address"];

}
//end of edit categoy

  
?>