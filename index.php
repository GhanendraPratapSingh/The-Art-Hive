<?php
include ('connect.php');
session_start();
if (isset ($_POST['submit'])) {
    $name = $_POST['yourname'];
    $mobile = $_POST['mobile'];
    $amount = $_POST['price'];
    date_default_timezone_set("Asia/Calcutta");
    $time = date("Y-m-d H:i:s");
    $sqll = "INSERT INTO registrations(yourname, studing, amount, Payment_Status, date) VALUES ('$name','$mobile ','$amount ','Not Paid','$time')";
    $res = mysqli_query($conn, $sqll);
    if ($res) {
        $_SESSION["registration"] = "Yes";
        $_SESSION["last_id"] = mysqli_insert_id($conn);
        header("location:payment-check.php");
        ?>
        <script type="text/javascript"> window.location = "payment-check.php";</script>

        <?php
    } else {
        echo $sqll;
    }


}
include ('header.php');
include ('banner.php');
?>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">
                <?php echo $result ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>

            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    // $(document).ready(function() {
    //     if (
    //         window.location.href == "https://thearthive.in/index.php/#contact1245"
    //     ) {
    //         $(".tabs h4").removeClass("tab-current");
    //         $(".tabs ul li:nth-child(4) h4").addClass("tab-current");
    //         $("#section1").fadeOut();
    //         $("#section4").fadeIn();
    //         $([document.documentElement, document.body]).animate({
    //             scrollTop: $("#extrainformation").offset().top
    //         }, 1000);

    //         return false;
    //     }
    // });

</script>

<!-- Start Who We Are Area -->
<section class="who-we-are ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="who-we-are-content">
                    <span>Who We Are</span>
                    <h3>Our Story Behind The Art Hive And Methodology</h3>
                    <p>The Art Hive is an initiative started by our founder, artist, architect and a product designer,
                        Ms. Abinaya Devakumar. We focus on providing a meaningful place for creativity and art to bloom
                        without any restrictions may it be for toddlers to kids or even young adults to adults focusing
                        on a diverse area of interest. </p>


                    <ul class="who-we-are-list">
                        <li>
                            <span>1</span>
                            Provoke Creativity
                        </li>
                        <li>
                            <span>2</span>
                            Kindle Individuality
                        </li>
                        <li>
                            <span>3</span>
                            No Copying And Imitating
                        </li>
                        <li>
                            <span>4</span>
                            No Rigid 'Right Way'
                        </li>
                    </ul>

                </div>
            </div>

            <div class="col-lg-6">
                <div class="who-we-are-image-wrap">
                    <img src="assets/img/76.jpg" alt="image">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Who We Are Area -->

<!-- Start Fun Facts Area -->
<!--<section class="fun-facts-area pt-100 pb-70">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-lg-3 col-md-6 col-sm-6">-->
<!--                <div class="single-fun-fact">-->
<!--                    <h3>-->
<!--                        <span class="odometer" data-count="1200">00</span>-->
<!--                    </h3>-->
<!--                    <p>Young Lives We've Shaped</p>-->
<!--                </div>-->
<!--            </div>-->

<!--            <div class="col-lg-3 col-md-6 col-sm-6">-->
<!--                <div class="single-fun-fact bg-1">-->
<!--                    <h3>-->
<!--                        <span class="odometer" data-count="305">00</span>-->
<!--                    </h3>-->
<!--                    <p>Facilitators</p>-->
<!--                </div>-->
<!--            </div>-->


<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<!-- End Fun Facts Area -->

<!-- Start Choose Area -->
<section class="choose-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">

            <h2>Mission Vision & Values</h2>
        </div>

        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="single-choose">
                            <div class="icon">
                                <i class='bx bx-bulb'></i>
                            </div>

                            <div class="content">
                                <h3>Ease Of Availability</h3>
                                <p>To make art and creativity available to everyone</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="single-choose">
                            <div class="icon">
                                <i class='bx bx-happy'></i>
                            </div>

                            <div class="content">
                                <h3>Holistic Approach</h3>
                                <p>Holistic approach towards uplifting the present scenario of the world.</p>
                            </div>
                        </div>
                    </div>

                    <!--<div class="col-lg-6 col-md-6">-->
                    <!--    <div class="single-choose">-->
                    <!--        <div class="icon">-->
                    <!--            <i class='bx bx-football'></i>-->
                    <!--        </div>-->

                    <!--<div class="content">-->
                    <!--    <h3>Creative Learning</h3>-->
                    <!--    <p>Make the best creative and art based learning at many varied fields and cross disciplinary learning methodologies.</p>-->
                    <!--</div>-->
                    <!--    </div>-->
                    <!--</div>-->

                    <div class="col-lg-6 col-md-6">
                        <div class="single-choose">
                            <div class="icon">
                                <i class='bx bx-book'></i>
                            </div>

                            <div class="content">
                                <h3>Provoke Young Minds</h3>
                                <p>Provoke and empower young minds in the right way to make art a healing platform.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="choose-image">
                    <img src="assets/img/4537.jpeg" alt="image">

                    <!--<div class="choose-image-shape">-->
                    <!--    <div class="shape-1">-->
                    <!--        <img src="assets/img/choose/choose-shape-1.png" alt="image">-->
                    <!--    </div>-->
                    <!--    <div class="shape-2">-->
                    <!--        <img src="assets/img/choose/choose-shape-2.png" alt="image">-->
                    <!--    </div>-->
                    <!--    <div class="shape-3">-->
                    <!--        <img src="assets/img/choose/choose-shape-3.png" alt="image">-->
                    <!--    </div>-->
                    <!--</div>-->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Choose Area -->

<!-- Start Class Area -->
<section class="class-area bg-fdf6ed pt-100 pb-70">
    <div class="container">
        <div class="section-title">

            <h2>Popular Workshop</h2>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-class">
                    <div class="class-image">
                        <a href="#">
                            <img src="assets/img/class/class-1.jpg" alt="image">
                        </a>
                    </div>
                    <br>
                    <br>
                    <div class="class-image">
                        <a href="#">
                            <img src="assets/img/a.jpeg" alt="image">
                        </a>
                    </div>

                    <!--<div class="class-content">-->

                    <!--    <h3>-->
                    <!--        <a href="#">Sing Along Through Stories</a>-->
                    <!--    </h3>-->
                    <!--    <p>Toddlers will enjoy interactive story sessions with songs and movement.The sessions will have your toddlers singing,dancing during story time.</p>-->

                    <!--    <ul class="class-list">-->

                    <!--          <li>-->
                    <!--            <span> Batch 1 :</span>-->
                    <!--           10:30 am - 11:30 am-->

                    <!--        </li>-->



                    <!--         <li>-->
                    <!--            <span> Batch 2 :</span>-->
                    <!--           04:30 pm - 05:30 pm-->

                    <!--        </li>-->

                    <!--         <li>-->
                    <!--            <span>Age:</span>-->
                    <!--            1-3 Years-->
                    <!--        </li>-->


                    <!--        <li>-->
                    <!--            <span>Days:</span>-->
                    <!--            JULY 19th to OCT 6th-->
                    <!--        </li>-->
                    <!--    </ul>-->

                    <!--    <div class="class-btn">-->
                    <!--        <a href="#contact" class="default-btn">Join Workshop</a>-->
                    <!--    </div>-->
                    <!--</div>-->
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-class">
                    <div class="class-image">
                        <a href="#">
                            <img src="assets/img/class/class-2.jpeg" alt="image">
                        </a>
                    </div>

                    <div class="class-content">

                        <h3>
                            <a href="#">CREATIVE TODDLER
                                U & ME
                                Art & Sensory
                            </a>
                        </h3>
                        <p>Sessions where your toddler will indulge in the Art & Sensory Experience Sessions. They will
                            learn about colours using appropriate art materials & experience activities encouraging
                            their sensory urges. The Sensory activities will help them explore things creatively through
                            the play method resulting in having strong sense stimuli. Art & Sensory will make them
                            explore things in the creative world of the art hive.</p>

                        <ul class="class-list">

                            <li>
                                <span> Batch 1 :</span>
                                10:30 am - 11:30 am

                            </li>



                            <li>
                                <span> </span>
                                Saturday - Sunday

                            </li>

                            <li>
                                <span>Age:</span>
                                1-3 Years
                            </li>


                            <li>
                                <span>Days:</span>
                                August 27th
                            </li>
                        </ul>

                        <div class="class-btn">
                            <a href="#contact" class="default-btn">Join Workshop</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-class">
                    <div class="class-image">
                        <a href="#">
                            <img src="assets/img/class/class-3.jpeg" alt="image">
                        </a>
                    </div>
                    <br>
                    <br>

                    <div class="class-image">
                        <a href="#">
                            <img src="assets/img/9816.jpeg" alt="image">
                        </a>
                    </div>

                    <!--        <div class="class-content">-->

                    <!--            <h3>-->
                    <!--                <a href="#contact">Art Experience</a>-->
                    <!--            </h3>-->
                    <!--            <p>Toddlers will be indulging with the right art materials and tools to uplift their creativity through meaningful activities.</p>-->

                    <!--              <ul class="class-list">-->

                    <!--                  <li>-->
                    <!--                    <span> Batch 1 :</span>-->
                    <!--                   10:30 am - 11:30 am-->

                    <!--                </li>-->



                    <!--                 <li>-->
                    <!--                    <span> Batch 2 :</span>-->
                    <!--                   04:30 pm - 05:30 pm-->

                    <!--                </li>-->

                    <!--                 <li>-->
                    <!--                    <span>Age:</span>-->
                    <!--                    1-3 Years-->
                    <!--                </li>-->


                    <!--                <li>-->
                    <!--                    <span>Days:</span>-->
                    <!--                    JULY 19th to  OCT 6th-->
                    <!--                </li>-->
                    <!--            </ul>-->

                    <!--            <div class="class-btn">-->
                    <!--                <a href="#contact" class="default-btn">Join Workshop</a>-->
                    <!--            </div>-->
                    <!--        </div>-->
                </div>
            </div>
        </div>
    </div>

    <!--<div class="class-shape">-->
    <!--    <div class="shape-1">-->
    <!--        <img src="assets/img/class/class-shape-1.png" alt="image">-->
    <!--    </div>-->
    <!--    <div class="shape-2">-->
    <!--        <img src="assets/img/class/class-shape-2.png" alt="image">-->
    <!--    </div>-->
    <!--</div>-->
</section>
<!-- End Class Area -->

<!-- Start Gallery Area -->
<div class="gallery-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <span>Gallery</span>
            <h2>Our Activities Gallery</h2>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-gallery-box">
                    <img src="assets/img/gallery/gallery-1.jpeg" alt="image">

                    <a href="assets/img/gallery/gallery-1.jpeg" class="gallery-btn" data-imagelightbox="popup-btn">
                        <i class='bx bx-search-alt'></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-gallery-box">
                    <img src="assets/img/gallery/gallery-2.jpeg" alt="image">

                    <a href="assets/img/gallery/gallery-2.jpeg" class="gallery-btn" data-imagelightbox="popup-btn">
                        <i class='bx bx-search-alt'></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-gallery-box">
                    <img src="assets/img/gallery/gallery-3.jpeg" alt="image">

                    <a href="assets/img/gallery/gallery-3.jpeg" class="gallery-btn" data-imagelightbox="popup-btn">
                        <i class='bx bx-search-alt'></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-gallery-box">
                    <img src="assets/img/gallery/gallery-4.jpeg" alt="image">

                    <a href="assets/img/gallery/gallery-4.jpeg" class="gallery-btn" data-imagelightbox="popup-btn">
                        <i class='bx bx-search-alt'></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-gallery-box">
                    <img src="assets/img/gallery/gallery-5.jpeg" alt="image">

                    <a href="assets/img/gallery/gallery-5.jpeg" class="gallery-btn" data-imagelightbox="popup-btn">
                        <i class='bx bx-search-alt'></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-gallery-box">
                    <img src="assets/img/gallery/gallery-6.jpeg" alt="image">

                    <a href="assets/img/gallery/gallery-6.jpeg" class="gallery-btn" data-imagelightbox="popup-btn">
                        <i class='bx bx-search-alt'></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Gallery Area -->

<!-- Start Quote Area -->
<section class="quote-area pb-100" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="quote-image"></div>
            </div>

            <div class="col-lg-6">
                <div class="quote-item">
                    <div class="content">
                        <!--<span> U & ME</span>-->
                        <h3> Class Registration</h3>
                    </div>
                    <form action="" method="post" name="myForm" onsubmit="return validateForm()">
                        <div class="form-group">
                            <input type="text" class="form-control" id="yourname" name="yourname"
                                placeholder="Your Name">

                            <span id="un" class="text-danger font-weight-bold"></span>

                        </div>


                        <div class="form-group">
                            <input type="number" class="form-control" id="studying" placeholder="Contact No"
                                name="mobile" min='10' name="yourname">

                            <span id="mb" class="text-danger font-weight-bold"></span>

                        </div>

                        <div class="form-group">
                            <input type="number" class="form-control" id="studying" placeholder="age" name="age"
                                min='2'>

                            <span id="mb" class="text-danger font-weight-bold"></span>

                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" id="studying" placeholder="email" name="email">

                            <span id="mb" class="text-danger font-weight-bold"></span>

                        </div>

                        <div class="form-group">
                            <select class="form-control" name="price" required>
                                <option value="" selected disabled> -- SELECT CLASS -- </option>
                                <?php
                                $sql12 = "SELECT * FROM `Class`";
                                $result = mysqli_query($conn, $sql12);
                                while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <option value="<?= $row["Amount"] ?>">
                                        <?php echo $row["Class_Name"]; ?>
                                    </option>
                                    <?php
                                }
                                ?>
                            </select>
                            <span id="gt" class="text-danger font-weight-bold"></span>
                        </div>
                        <div class="text-center"><a href="payment-check.php">
                                <input type="submit" value="Submit" name="submit"
                                    class="btn btn-outline-primary center">
                            </a></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    function validateForm() {
        let username = document.forms["myForm"]["yourname"].value;
        let mobile = document.forms["myForm"]["mobile"].value;

        if (username == "") {
            document.getElementById('un').innerHTML = "Please enter your name";
            return false;
        }
        if ((username.length < 2) || (name.length > 35)) {
            document.getElementById('un').innerHTML = "User name must be atleast 2 characters";
            return false;
        } else {
            document.getElementById('un').innerHTML = "";
        }
        if (!isNaN(username)) {
            document.getElementById('un').innerHTML = "Only characters are allowed";
            return false;
        } else {
            document.getElementById('un').innerHTML = "";
        }


        if (username.search(/^[A-Za-z\s]+$/)) {
            document.getElementById('un').innerHTML = "Only characters are allowed";
            return false;
        } else {
            document.getElementById('un').innerHTML = "";
        }
        //   mobile validation start
        if (mobile == "") {
            document.getElementById('mb').innerHTML = "Please enter your mobile Number";
            return false;
        } else {
            document.getElementById('mb').innerHTML = "";

        }
        if (isNaN(mobile)) {
            select2.min.js
            document.getElementById('mb').innerHTML = "Only digits are allowed";
            return false;
        } else {
            document.getElementById('mb').innerHTML = "";
        }
        if ((mobile.length < 10) || (Phone.length > 10)) {
            document.getElementById('mb').innerHTML = "Mobile number must be 10 digits only";
            return false;
        } else {
            document.getElementById('mb').innerHTML = "";
        }
        if (mobile.search(/^[6-9]\d{9}$/gi)) {
            document.getElementById('mb').innerHTML = "Invalid mobile number !!";
            return false;
        } else {
            document.getElementById('mb').innerHTML = "";
        }





    }
</script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<?php
include ('footer.php');
?>
</body>

</html>