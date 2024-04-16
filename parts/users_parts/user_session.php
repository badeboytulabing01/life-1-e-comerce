<?php
require_once("../mainClass.php");
$userdeatails = $ecomerce->get_userdata();

if(isset($userdeatails)){
   if($userdeatails['access'] != "users"){
      header("Location: ../index.php");
   }

}else{
    header("Location: ../index.php");
}
?>