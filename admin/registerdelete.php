<?php 
include('connect.php');

if (isset($_GET['id'])) {

    $user_id = $_GET['id'];

    $sql = "DELETE FROM `registrations` WHERE `id`='$user_id'";

     $result = $conn->query($sql);

     if ($result == TRUE) {

      header("location:register_customer.php");

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 

?>