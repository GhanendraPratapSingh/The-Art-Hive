<?php 
session_start();
if(!isset($_SESSION["amount"])){

    header('location:index.php');
}else{
$amount = $_SESSION["amount"]*100;

}

include('header.php');
include('connect.php');




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>   
   
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> 
<title>Payment </title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <style>
.new1{
background-color: #fdf6ed;
padding-top: 200px;
padding-bottom: 200px;
}

.btn{
    
    background-color:#f3f0f1!important;
    color: black!important;
    border:none; 
    border-radius:10px; 
    padding:15px;
    min-height:30px; 
    min-width: 120px;
    padding: 1.375rem 3.75rem!important;
    border-radius: 34px!important;
    margin-top: 20px;
  
}
.btn:hover {
      background-color:#79e3b6!important;
      color: black!important;
      transition: 0.7s;
      border-radius: 1px solid green!important;
  }
</style>

</head>
<body>
<section class="new1">
            <div class="container">
            <center>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="btn1 d-flex justify-content-center">
                            <h3>
                               <button class="buy_now btn">Pay Now</button>
                            </h3>
                        </div>
                    </div>
</center>
 
                </div>
            </div>
        </section>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
$('body').on('click', '.buy_now', function(e){
var totalAmount = $(this).attr("data-amount");
var product_id =  $(this).attr("data-id");


var options = {
   
"key": "rzp_live_plruYtvrQoV765", // secret key id // rzp_live_IdQHIO7zHKaEPp    // rzp_test_GAFq46ZypHPzm5
// rzp_live_IdQHIO7zHKaEPp-privious key
"amount": "<?php echo $amount ?>",// 2000 paise = INR 20
"name": "The Art Hive",
"description": "Payment",
"image": "https://thearthive.in/assets/img/logo.png",

"handler": function (response){
    console.log('ab',product_id, response)
$.ajax({
url: 'payment-proccess.php',
type: 'post',
dataType: 'json',
data:JSON.stringify( {
razorpay_payment_id: response.razorpay_payment_id , totalAmount : totalAmount ,product_id : product_id,
}), 
success: function (msg) {
    swal("Good job!", "Your Payment successfull completed !", "success");
    setInterval(displayHello, 3000);

}
});
},
"theme": {
"color": "#528FF0"
}
};
var rzp1 = new Razorpay(options);
rzp1.open();
e.preventDefault();
});

function displayHello(){
    location.href = "https://thearthive.in/calender";
}
</script>

</body>
</html>
<?php
include('footer.php')
?>

