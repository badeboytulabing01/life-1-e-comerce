<?php require_once "../parts/employee_parts/ceo_session.php"; ?>
<?php  require_once("../mainClass.php"); ?>
<?php  require_once("../inc/conn.php"); ?>

<!DOCTYPE html>
<html lang="en">
<?php require_once "../parts/employee_parts/employee_head.php"; ?>

<body>
<?php require_once "../parts/employee_parts/ceonav.php"; ?>
 <div class="container-fluid" id="employeeDashboard">
           
            <div class="row mt-3">
            <div class="col-md-3"></div>
            	<div class="col-md-3 me-1" id="user">
            		<h4>Total of User</h4>
            		 <label class="fs-2"><img src="../img/icon/users.png" class="img-fluid" width="100"> <?php  $sql="SELECT count(user_id) AS total FROM  tbl_users WHERE access='employee'";  $result=mysqli_query($conn,$sql); $values=mysqli_fetch_assoc($result); $total_users=$values['total']; echo (number_format($total_users));?></label>
            	</div><!-- end of col-md-3 -->
                
            	<div class="col-md-2 me-1" id="sales">
            		<h4>Total of Sales</h4>
            		 <label class="fs-2"><img src="../img/icon/sales.png" class="img-fluid" width="100">
                  <?php  $sql="SELECT user_id, SUM(price*qty+shipping_fee) as total_sale FROM tbl_buying WHERE status='complete'";   $result=mysqli_query($conn,$sql); $values=mysqli_fetch_assoc($result); $total_sale=$values['total_sale']; echo (number_format($total_sale));?>      
             
                 </label>
                 <br>
            	</div><!-- end of col-md-3 -->

            	<div class="col-md-2 me-1" id="sales">
            		<h4>Total  Sales Today</h4>
            		 <label class="fs-2"><img src="../img/icon/sales.png" class="img-fluid" width="100">
                     <?php $today = date("Y-m-d"); ?>
                  <?php  $sql="SELECT SUM(price*qty+shipping_fee) AS total_sales FROM tbl_buying WHERE date_order = '$today' and status='complete'";   $result=mysqli_query($conn,$sql); $values=mysqli_fetch_assoc($result); $total_sales=$values['total_sales']; echo (number_format($total_sales));?>      
             
                 </label>
                 <br>
            	</div><!-- end of col-md-3 -->
            	<div class="col-md-12 mt-1">
            		  <?php
						 
						$dataPoints = array( 
						    array("y" => 3373.64, "label" => "January" ),
						    array("y" => 2435.94, "label" => "France" ),
						    array("y" => 1842.55, "label" => "China" ),
						    array("y" => 1828.55, "label" => "Russia" ),
						    array("y" => 1039.99, "label" => "Switzerland" ),
						    array("y" => 765.215, "label" => "Japan" ),
						    array("y" => 612.453, "label" => "Netherlands" )
						);
						$test=array();
						$count=0;

						$res=mysqli_query($conn,"SELECT sum(price*qty+shipping_fee) AS monthly_sale, DATE_FORMAT(date_order, '%M') AS month_name FROM tbl_buying WHERE status='complete' GROUP BY DATE_FORMAT(date_order, '%Y-%m'); ");
						while($row=mysqli_fetch_array($res))
						{
						  $test[$count]["label"]=$row["month_name"];
						 $test[$count]["y"]=$row["monthly_sale"];
						 $count=$count+1;


						}
						 
						?>

			 <script>
				window.onload = function() {
				 
				var chart = new CanvasJS.Chart("chartContainer", {
				    animationEnabled: true,
				    theme: "light2",
				    title:{
				        text: ""
				    },
				    axisY: {
				        title: "Monthly Sales"
				    },
				    data: [{
				        type: "column",
				        yValueFormatString: "#,##0.## Total Sales",
				        dataPoints: <?php echo json_encode($test, JSON_NUMERIC_CHECK); ?>
				    }]
				});
				chart.render();
				 
				}
				</script>
                <div id="chartContainer" style="height: 370px; width: 90%;"></div>
                   <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
            	</div>
            </div><!-- end of row -->	 
          </div><!-- end of container -->

 <?php require_once "../parts/employee_parts/employee_js.php" ?>
  <!-- end of js -->
</body>
</html>