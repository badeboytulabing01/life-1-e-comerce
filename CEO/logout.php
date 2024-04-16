<?php
  require_once("../mainClass.php"); 
$ecomerce->logout();
header("location: ../ceo_login.php");