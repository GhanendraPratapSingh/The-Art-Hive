<?php 

session_start();
include('connect.php');


if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $age = $_POST['age'];
    $mobile = $_POST['mobile'];
    $location = $_POST['location'];
    $price = $_POST['price'];
          date_default_timezone_set("Asia/Calcutta"); 
            $time = date("Y-m-d H:i:s");
    
    $arthivesql = "INSERT INTO artwork(`Name`, Age, Contact, Location, Price, Payment_status, created_at) VALUES ('$name','$age','$mobile','$location','$price','not paid', '$time')";
 
    $arthivesql = mysqli_query($conn,$arthivesql);
    if($arthivesql){
          $_SESSION["amount"] = $_POST['price'];
            $_SESSION["arthoure"] = "yes";
             $_SESSION["last_id"] = mysqli_insert_id($conn);
               ?>
            <script type="text/javascript"> window.location = "payment-check.php";</script>
              <?php
    }else{
        echo "someting went wrong !!! Please cotact to the devloper !!! thank you ";
    }

}





?>