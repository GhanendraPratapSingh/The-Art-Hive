<?php
session_start();
include('connect.php');
if(!isset($_SESSION["ADMIN_LOGIN"])){
    header('location:index.php');
}


if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $timeslot = $_POST['timeslot'];
    $date = $_POST['date'];
    
    if($date<date('Y-m-d')){
         $msg = "<div class='alert alert-danger'>Please Select Current/Upcoming Date </div>";
    }else{
            $stmt = $conn->prepare("select * from bookings where date = ? AND timeslot=?");
    $stmt->bind_param('ss', $date, $timeslot);
    if($stmt->execute()){
        $result = $stmt->get_result();
        if($result->num_rows>0){
            $msg = "<div class='alert alert-danger'>Already Booked</div>";
        }else{
            $sql = "INSERT INTO bookings (name, timeslot, mobile , date )
VALUES ('{$name}', '{$timeslot}', '{$mobile}', '$date')";

if ($conn->query($sql) === TRUE) {
 $msg = "<div class='alert alert-success'>Booking Successfull</div>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

          
        }
    }
    }

}






?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Manual </title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

<?php 
include('sidebar.php');
?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
        <?php

include('navbar.php');

?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800"></h1>
                    

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h5 class="m-0 font-weight-bold text-primary text-center" > Manual Booking </h5>
                        </div>
                        <div class="card-body">
                                <div class="container">
                                    <?php echo(isset($msg))?$msg:""; ?>
                               <form action="" method="post" >
  <div class="form-group">
    <label for="exampleInputName">Name </label>
    <input type="Name"  name="name"  class="form-control"  id="exampleInputName" aria-describedby="emailHelp" placeholder="Enter Name" required >
    <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
  </div>
  <div class="form-group">
    <label for="exampleInputMobile">Mobile</label>
    <input type="Phone" name="mobile" class="form-control" id="exampleInputMobile" placeholder="Enter Mobile" required >
  </div>
  <div class="form-group">
     <label class="form-check-label" for="exampledate">Choose Booking Date</label>
    <input type="date" name="date" class="form-control"  id="exampledate" required>
    
  </div>
   <div class="form-group">
     <label class="form-check-label" for="slotselect">Select a slot</label>
   <select class="form-control"  id="slotselect" name="timeslot" required>
       <option value="" selected disabled> --  Select Slot  Option -- </option>
       <option value="12:00PM - 14:00PM"> 12:00PM - 01:00PM </option>
       <option value="13:00PM - 14:00PM"> 01:00PM - 02:00PM </option>
       <option value="14:00PM - 15:00PM"> 02:00PM - 03:00PM </option>
       <option value="15:00PM - 16:00PM"> 03:00PM - 04:00PM </option>
       <option value="16:00PM - 17:00PM"> 04:00PM - 05:00PM </option>
       <option value="17:00PM - 18:00PM"> 05:00PM - 06:00PM </option>
       <option value="18:00PM - 19:00PM"> 06:00PM - 07:00PM </option>
       <option value="19:00PM - 20:00PM"> 07:00PM - 08:00PM </option>
   </select>
    
  </div>
  
  <button type="submit" name="submit" class="btn btn-outline-primary ">Book</button>
</form> 
      </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php
           include('footer.php');
           ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">X</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>