<?php
require_once("../mainClass.php");
$userdeatails = $ecomerce->get_userdata();

if(isset($userdeatails)){
   if($userdeatails['access'] != "ceo"){
      header("Location: ../index.php");
   }

}else{
    header("Location: ../index.php");
}
?>