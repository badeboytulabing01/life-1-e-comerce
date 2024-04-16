	<?php 
	require_once ('../inc/conn.php') ;
	 ?>

	<?php 
	  if (isset($_POST)) {
	  	    
	   $product_id     = $_POST['product_id'];
       $customer_id    = $_POST['customer_id'];
       $customer_name  = $_POST['customer_name'];
       $image          = $_POST['image'];
       $price          = $_POST['price'];
       $discount       = $_POST['discount'];
       $shipping       = $_POST['shipping'];
       $color          = $_POST['color'];
       $Size           = $_POST['Size'];
       $address        = $_POST['address'];
       $contact_number = $_POST['contact_number'];
       $qty            = $_POST['qty'];
       $product_name   = $_POST['product_name'];
       $employee_id   = $_POST['employee_id'];
	 	  	
	         $query = mysqli_query($conn, "INSERT INTO tbl_buying
	         	(
	         	product_id,
	         	user_id,
	         	customer_name,
	         	image,
	         	product_name,
	         	price,
	         	discount,
	         	shipping_fee,
	         	color,
	         	size,
	         	address,
	         	mobile_number,
	         	qty,
	         	employee_id
	         	
	         	)
	         	VALUES
	         	(
	         	'$product_id',
	         	'$customer_id',
	         	'$customer_name',
	         	'$image',
	         	'$product_name',
	         	'$price',
	         	'$discount',
	         	'$shipping',
	         	'$color',
	         	'$Size',
	         	'$address',
	         	'$contact_number',
	         	'$qty',
	         	'$employee_id'
	         	 )");		
	          
	          echo "Proced to payment";
           }else{
	 	 echo "no data";
	 	}//nd of else

	 ?>