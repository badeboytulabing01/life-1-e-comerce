<?php 
   class MyEcomerce
   {
    
     private $server = "mysql:host=localhost;dbname=db_lifeone";
     private $user = "root";
     private $pass = "";
     private $options = array(PDO::ATTR_ERRMODE => PDO:: ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => 
     PDO::FETCH_ASSOC);
    protected $con;
    //end of connection

      public function openConnection()
      {
        try{
         $this->con = new PDO($this->server, $this->user, $this->pass, $this->options);
         return $this->con;
          }catch(PDOException $e)
          {
            echo "There is some problem in the connection:". $e->getMessage();
        }
        
    }

    //end of function openConnection

    public function closeConnection()
    {
        $this->con = null;
    }
    //end of function closeConnection

       public function getUsers()
    {
        $connection = $this->openConnection();
        $stmt = $connection->prepare("SELECT * FROM tbl_users");
        $stmt -> execute();
        $users = $stmt->fetchAll();
        
        if($userCount >0){
            return $users;
        }else{
            return 0;
        }
    }
    //end of  function getUsers
public function employee_log()
   {
    if(isset($_POST['submit']) ){ 
        $password = md5($_POST['password']);
        $userLog = $_POST['userLog']; 
  
        $connection = $this->openConnection();
        $stmt = $connection->prepare("SELECT * FROM tbl_users WHERE username = ? AND password = ? AND access='employee'");
        $stmt -> execute([$userLog, $password]);
        $user = $stmt->fetch(); 
        $total = $stmt->rowCount(); 

        if($total > 0){
        echo "Welcome".$user['username']; 
         $this->set_userdata($user);
         header("Location: employee/dashboard.php");
        }else{
          echo "<script language='javascript'>alert('You Are Not Yet Registered'); </script>";
        }           
    }
    
}

//end of function employee-log


  //end of  function getUsers
public function ceologin()
   {
    if(isset($_POST['ceolog']) ){ 
        $password = md5($_POST['password']);
        $userLog = $_POST['userLog']; 
  
        $connection = $this->openConnection();
        $stmt = $connection->prepare("SELECT * FROM tbl_users WHERE username = ? AND password = ? AND access='ceo'");
        $stmt -> execute([$userLog, $password]);
        $user = $stmt->fetch(); 
        $total = $stmt->rowCount(); 

        if($total > 0){
        echo "Welcome".$user['username']; 
         $this->set_userdata($user);
         header("Location: CEO/index.php");
        }else{
          echo "<script language='javascript'>alert('You Are Not Yet Registered'); </script>";
        }           
    }
    
}

//end of function ceo log



    public function login()
   {
    if(isset($_POST['submit']) ){ 
        $password = md5($_POST['password']);
        $userLog = $_POST['userLog']; 
  
        $connection = $this->openConnection();
        $stmt = $connection->prepare("SELECT * FROM tbl_users WHERE username = ? AND password = ? AND access='users'");
        $stmt -> execute([$userLog, $password]);
        $user = $stmt->fetch(); 
        $total = $stmt->rowCount(); 

        if($total > 0){
        echo "Welcome".$user['username']; 
         $this->set_userdata($user);
         header("Location: users/dashboard.php");
        }else{
          echo "<script language='javascript'>alert('You Are Not Yet Registered'); </script>";
        }           
    }

}
//end of user login


public function set_userdata($array)
    {
          if(!isset($_SESSION)){
            session_start();   
        }
        $_SESSION['userdata'] = array(
            "Lastname" => $array['lastname'],
            "Username" => $array['username'],
            "firstname" => $array['firstname'] ,
            "email" => $array['email'],  
            "address" => $array['address'], 
           "contact_number" => $array['contact_number'],
           "access" => $array['access'],
           "image" => $array['image'],
           "user_id" => $array['user_id'],
           "contact_number" => $array['contact_number'],
           "image_status" => $array['image_status'],
           


        );
        return $_SESSION['userdata'];
}
//end of function set_userdata

  public function logout()
  {
    session_start();
    unset($_SESSION['user_id']);
    session_unset();
    session_destroy();
    echo "Logging out .... Please Wait .....";
      
}
 //end of function get_user_logout
 

public function get_userdata()
{
         if(!isset($_SESSION)){
           session_start();   
         }
         if(isset($_SESSION['userdata'])){
           return $_SESSION['userdata'];  
         }else{
           return null;
         }
  }
      //end of function get_user_data



      public function check_user_exist($userLog)
   {
        $connection = $this->openConnection();
        $stmt = $connection->prepare("SELECT * FROM tbl_users WHERE username = ?");
        $stmt -> execute([$userLog]);
        $total = $stmt ->rowCount();
        return $total;
  }
 //end of function check user exist

public function add_employee()
{
   if(isset($_POST['addEmployee'])){
       $lastname   = $_POST['lastname'];
       $fname = $_POST['fname'];
       $userLog  = $_POST['userLog'];
       $email   = $_POST['email'];
       $password     = md5($_POST['password']);
       $access   = $_POST['access'];
       
    if($this->check_user_exist($userLog) == 0){
      $connection = $this->openConnection();
      $stmt       = $connection->prepare("INSERT INTO tbl_users(`lastname`, `firstname`, `username`,`email`,`password`, `access`)
       VALUES(?,?,?,?,?,?)");
      $stmt -> execute([$lastname, $fname, $userLog,  $email, $password, $access]);
       header("Location:  employee_alert.php");                          
       }else{
         echo "<script language='javascript'>alert('User Already Exist'); </script>";
    }
  }
   }
    //end of add emplyee
  public function add_user()
{
   if(isset($_POST['add'])){
       $lasname   = $_POST['lasname'];
       $firstname = $_POST['firstname'];
       $userLog  = $_POST['userLog'];
       $contact   = $_POST['contact'];
       $email     = $_POST['email'];
       $address   = $_POST['address'];
       $password     = md5($_POST['password']);
  
    if($this->check_user_exist($userLog) == 0){
      $connection = $this->openConnection();
      $stmt       = $connection->prepare("INSERT INTO tbl_users(`lastname`, `firstname`, `username`,`contact_number`,`email`,`address`,`password`)
       VALUES(?,?,?,?,?,?,?)");
      $stmt -> execute([$lasname, $firstname, $userLog, $contact, $email, $address, $password]);
       header("Location: alert.php");                          
       }else{
         echo "<script language='javascript'>alert('User Already Exist'); </script>";
    }
  }
}
//end of add user

  public function buying()
{
  if(isset($_POST['buy'])){
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


  
      $connection = $this->openConnection();
      $stmt       = $connection->prepare("INSERT INTO tbl_buying(`product_id`, `user_id`, `customer_name`,`image`,`product_name`, `price`, `discount`, `shipping_fee`,`color`, `size`, `address`, `mobile_number`, `qty`,`employee_id`)
       VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
      $stmt -> execute([$product_id, $customer_id, $customer_name, $image, $product_name, $price, $discount,
       $shipping, $color, $Size, $address, $contact_number, $qty, $employee_id]);
       header("Location: buy_now.php");                          
       
    }
  }
//end of buying


  public function add_tocart()
{
  if(isset($_POST['addTocart'])){
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
       $status   = $_POST['status'];
      $employee_id   = $_POST['employee_id'];



  
      $connection = $this->openConnection();
      $stmt       = $connection->prepare("INSERT INTO tbl_buying(`product_id`, `user_id`, `customer_name`,`image`,`product_name`, `price`, `discount`, `shipping_fee`,`color`, `size`, `address`, `mobile_number`, `qty`, `status`, `employee_id`)
       VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
      $stmt -> execute([$product_id, $customer_id, $customer_name, $image, $product_name, $price, $discount,
       $shipping, $color, $Size, $address, $contact_number, $qty, $status, $employee_id]);
        header("Location: alert.php");                        
       
    }
  }
//end add to card

   public function requestquation()
{
  if(isset($_POST['request'])){
       $employee_id     = $_POST['employee_id'];
       $product_id     = $_POST['product_id'];
       $product_name     = $_POST['product_name'];
       $image     = $_POST['image'];
       $full_name    = $_POST['full_name'];
       $contact  = $_POST['contact'];
       $email          = $_POST['email'];
       $address          = $_POST['address'];
       $qty       = $_POST['qty'];
       $color       = $_POST['color'];
       $Size          = $_POST['Size'];
      $connection = $this->openConnection();
      $stmt       = $connection->prepare("INSERT INTO tbl_request(`employee_id`, `product_id`, `product_name`, `image`, `full_name`, `contact`,`email`,`address`, `qty`, `color`, `Size`)
       VALUES(?,?,?,?,?,?,?,?,?,?,?)");
      $stmt -> execute([$employee_id, $product_id, $product_name, $image, $full_name, $contact, $email, $address, $qty, $color, $Size]);
        header("Location: alert_request.php");                        
       
    }
  }
//end of request


   public function add_category()
{
  if (isset($_POST["addCategory"])) {
            $name      = $_POST["name"];
            $employee_id = $_POST["employee_id"];
            $empname  = $_POST["empname"];
            if ($_FILES["image"]["error"] === 4) {
                echo 
                "<script>alert('Image Does not Exist'); </script>";
            }
            else{
                $fileName = $_FILES["image"]["name"];
                $fileSize = $_FILES["image"]["size"];
                $tmpName  = $_FILES["image"]["tmp_name"];
        
                $validImageExtension = ['jpg','jpeg','png'];
                $imageExtension = explode('.', $fileName);
                $imageExtension = strtolower(end($imageExtension));
        
                if (!in_array($imageExtension, $validImageExtension)) {
                    echo 
                "<script>alert('invalid image Extension '); </script>";
                }
                else if($fileSize > 100000){
                    echo 
                "<script>alert('Image Size is to large'); </script>";
                }
        
                else{
                    $newImageName = uniqid();
                    $newImageName .= '.' . $imageExtension;
        
                    move_uploaded_file($tmpName, '../img/products/' . $newImageName);
                    $connection = $this->openConnection();
                    $stmt = $connection->prepare("INSERT INTO tbl_category(`image`, `category_name`, `user_id`,`employee_name`)
                    VALUES(?,?,?,?)");
                    $stmt -> execute([$newImageName, $name, $employee_id, $empname]);
                     header("Location: category_alert.php"); 
                }
            }
        }
    }
    //end of add category

     public function add_product()
{
  if (isset($_POST["submit"])) {
            $name      = $_POST["name"];
            $description = $_POST["description"];
            $category  = $_POST["category"];
            $price     = $_POST["price"];
            $discount  = $_POST["discount"];
            $shipping  = $_POST["shipping"];
            $color     = $_POST["color"];
            $Size      = $_POST["Size"];
            $employee_id = $_POST["employee_id"];
            $empname = $_POST["empname"];
            $stock = $_POST["stock"];
            $statusProduct = $_POST["statusProduct"];



            if ($_FILES["image"]["error"] === 4) {
                echo 
                "<script>alert('Image Does not Exist'); </script>";
            }
            else{
                $fileName = $_FILES["image"]["name"];
                $fileSize = $_FILES["image"]["size"];
                $tmpName  = $_FILES["image"]["tmp_name"];
        
                $validImageExtension = ['jpg','jpeg','png'];
                $imageExtension = explode('.', $fileName);
                $imageExtension = strtolower(end($imageExtension));
        
                if (!in_array($imageExtension, $validImageExtension)) {
                    echo 
                "<script>alert('invalid image Extension '); </script>";
                }
                else if($fileSize > 100000){
                    echo 
                "<script>alert('Image Size is to large'); </script>";
                }
        
                else{
                    $newImageName = uniqid();
                    $newImageName .= '.' . $imageExtension;
        
                    move_uploaded_file($tmpName, '../img/products/' . $newImageName);
                    $connection = $this->openConnection();
                    $stmt = $connection->prepare("INSERT INTO tbl_product(`image`, `product_name`, `discription`,`category`,`price`,`discount`,`shipping_fee`,`color`,`size`,`employee_name`,`employee_id`,`product_stock`,`display_status`)
                    VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)");
                    $stmt -> execute([$newImageName, $name, $description, $category, $price, $discount, 
                      $shipping, $color, $Size, $empname, $employee_id, $stock,$statusProduct ]);
                     header("Location: alert.php"); 
                }
            }
        }
    }
    //end of add product

}

   $ecomerce = new MyEcomerce();

 ?>