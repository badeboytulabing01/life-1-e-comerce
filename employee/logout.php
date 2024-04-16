<?php
  require_once("../mainClass.php"); 
$ecomerce->logout();
header('Refresh: 3;url=../index.php?log out successfull');