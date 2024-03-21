
<?php
session_start();
include('connect.php');

$data = [ 
'user_id' => '1',
'payment_id' => $_POST['razorpay_payment_id'],
'amount' => $_POST['totalAmount'],
'product_id' => $_POST['product_id'],
];

$pro_id = $_POST['product_id'];
$p_id = $_POST['razorpay_payment_id'];
$amunt =  $_POST['totalAmount'];
$email12 = $_SESSION["email"];
$name = $_SESSION["yourname"];
$sqll1 = "INSERT INTO payment(name ,email,amount,payment_id,product_id) VALUES('{$_SESSION["yourname"]}','{$_SESSION["email"]}','{$_POST['totalAmount']}','{$_POST['razorpay_payment_id']}' ,'{$pro_id}')";
$result =  mysqli_query($conn,$sqll1);
 $last_id =  $_SESSION["last_id"];
 if(isset($_SESSION["registration"])){
 $sql = "UPDATE registrations SET Payment_Status='paid' WHERE id= $last_id";

if (mysqli_query($conn, $sql)) {
  $arr = array('msg' => 'Payment successfully credited', 'status' => true);  
     echo json_encode($arr);
     
} else {
  echo "Someting went wrong: " . mysqli_error($conn);
}
 }elseif(isset($_SESSION["slot"])){
      $sql = "UPDATE bookings SET payment_status='paid' WHERE id= $last_id";
      $query = mysqli_query($conn, $sql);
      if ($query) {
          if( $_SESSION['quantity'] > 1){
              $slot = "slots";
          }else{
                 $slot = "slot";
          }
          $usermail = $_SESSION['email'];
          $to = $usermail;
$subject = "Art Hour Payment confirmation email ";

$message = "
<html>
<head>
<title>Art Hour Payment confirmation email</title>
</head>
<body>

<h3>Dear ". $_SESSION['name'] ." , </h3>
<p>
Greetings from The Art Hive! </p>

<p>Your Art Hour  ".  $_SESSION['quantity']. " ".$slot ." has been scheduled and confirmed!</p>
<p>
We have received your payment and your picked slot for An Art Hour at The Art Hive is confirmed.
Your Time slot is ". $_SESSION['timeslot'] ." for date ".  $_SESSION['date']  ." is confirmed. </p>
<p>
For any additional details on Art Hour, visit our website: www.thearthive.in
</p><p>
Location: 1st Floor, Old No.52, New No.1, 9th Street F Block, 1st Avenue, Main Road, R.V. Nagar, Annanagar East, Chennai, Tamil Nadu 600102 <br>
Map Link- https://goo.gl/maps/fvwumzTsqNmHUD2y6
</p><p>
Thanks for booking with The Art Hive.
</p><p>
Regards<br>
The Art Hive
</p>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <mailthearthive@gmail.com>' . "\r\n";
// $headers .= 'Cc: shyamyadav.cse@gmail.com' . "\r\n";
if(mail($to,$subject,$message,$headers)){
     $arr = array('msg' => 'Payment successfully credited', 'status' => true);  
     echo json_encode($arr);
}else{
    echo "mail not send ";
}

   

} else {
  echo "Someting went wrong: " . mysqli_error($conn);
}

 }elseif(isset( $_SESSION["arthoure"])){
     
      $sql = "UPDATE artwork SET Payment_status='paid' WHERE id= $last_id";
      
            if (mysqli_query($conn, $sql)) {
  $arr = array('msg' => 'Payment successfully credited', 'status' => true);  
     echo json_encode($arr);
     
} else {
  echo "Someting went wrong: " . mysqli_error($conn);
}
     
 }



            
?>