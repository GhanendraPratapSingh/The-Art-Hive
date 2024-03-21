<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Art-hour</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creative Toddlers</title>
    <link href="https://fonts.cdnfonts.com/css/garet" rel="stylesheet">
    <link href="assets/css/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <!-- CSS | menuzord megamenu skins -->
    <link id="menuzord-menu-skins" href="assets/css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet" />
    <!-- CSS | Main style file -->
    <link href="assets/css/style-main.css" rel="stylesheet" type="text/css">
    <!-- CSS | Preloader Styles -->
    <link href="assets/css/preloader.css" rel="stylesheet" type="text/css">
    <!-- CSS | Custom Margin Padding Collection -->
    <link href="assets/css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">

    <!-- external javascripts -->
    <script src="assets/js/jquery-2.2.4.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/css/main.css">
    <!-- JS | jquery plugin collection for this theme -->
    <!-- <script src="assets/js/jquery-plugin-collection.js"></script> -->
</head>
<style>
    .container-47 {
        margin: 0 auto;
        padding: 4rem;
        /*width: 48rem;*/
    }

    h3 {
        font-size: 1.75rem;
        color: #373d51;
        padding: 1.3rem;
        margin: 0;
    }

    .accordion a {
        position: relative;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        width: 100%;
        padding: 1rem 3rem 1rem 1rem;
        color: #7288a2;
        font-size: 1.15rem;
        font-weight: 400;
        border-bottom: 1px solid #e5e5e5;
    }

    .accordion a:hover,
    .accordion a:hover::after {
        cursor: pointer;
        color: #ff5353;
    }

    .accordion a:hover::after {
        border: 1px solid #ff5353;
    }

    .accordion a.active {
        color: #ff5353;
        border-bottom: 1px solid #ff5353;
    }

    .accordion a::after {
        /* font-family: 'Garet light' !important; */
        font-family: "Poppins" !important;
        content: '\f218';
        position: absolute;
        float: right;
        right: 1rem;
        font-size: 1rem;
        color: #7288a2;
        padding: 5px;
        width: 30px;
        height: 30px;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        border-radius: 50%;
        border: 1px solid #7288a2;
        text-align: center;
    }

    .accordion a.active::after {
        /* font-family: 'Garet light' !important; */
        font-family: "Poppins" !important;
        content: '\f209';
        color: #ff5353;
        border: 1px solid #ff5353;
    }

    .accordion .content {
        opacity: 0;
        padding: 0 1rem;
        max-height: 0;
        border-bottom: 1px solid #e5e5e5;
        overflow: hidden;
        clear: both;
        -webkit-transition: all 0.2s ease 0.15s;
        -o-transition: all 0.2s ease 0.15s;
        transition: all 0.2s ease 0.15s;
    }

    .accordion .content p {
        font-size: 1rem;
        font-weight: 300;
    }

    .accordion .content.active {
        opacity: 1;
        padding: 1rem;
        max-height: 100%;
        -webkit-transition: all 0.35s ease 0.15s;
        -o-transition: all 0.35s ease 0.15s;
        transition: all 0.35s ease 0.15s;
    }


    * {

        margin: 0;

        padding: 0;

        box-sizing: border-box;

    }


    .productContainer {

        display: flex;

        flex-wrap: wrap;

        align-items: center;

        justify-content: center;

    }

    .card-69 {

        height: auto;

        overflow: hidden;

        max-width: 22rem;

        border-radius: 1rem;

        margin: 1rem 2rem;

        /* font-family: 'Garet light' !important; */
        font-family: "Poppins" !important;

        transition: transform 0.5s, box-shadow 0.5s;

        box-shadow: 0px 0px 20px 1px rgb(204 204 204 / 50%);

    }

    .card-69:hover {

        transform: translateY(-15px);

        box-shadow: 0px 10px 20px 0px rgb(204 204 204 / 50%);

    }

    .card-69 .header {

        z-index: 2;

        display: flex;

        position: relative;

        align-items: center;

        justify-content: center;

        background-color: #ff0;

        border-radius: 0rem 0rem 4rem 0rem;

    }

    .card-69 .header::before {

        content: "";

        top: 0;

        left: 0;

        z-index: -1;

        width: 100%;

        height: 100%;

        position: absolute;

        border-radius: 0rem 0rem 4rem 0rem;

    }

    .card-69 .header img {

        width: 85%;

    }

    .card-69 .footer {

        z-index: 2;

        text-align: center;

        position: relative;

        padding: 20px 20px 20px 20px;

    }

    .card-69 .footer::before {

        content: "";

        top: 0;

        left: 0;

        width: 100%;

        z-index: -1;

        height: 100%;

        position: absolute;

        background-color: #fff;

        border-radius: 3rem 0rem 0rem 0rem;

    }

    .card-69 .footer .title {

        font-size: 1.4rem;

        margin-bottom: .4rem;

    }

    .card-69 .footer p {

        font-size: .8rem;

    }

    .productContainer .card-69:nth-child(2) .header img {

        width: 120%;

    }

    .productContainer .card-69:nth-child(3) .header img {

        width: 120%;

    }

    .productContainer .card-69:nth-child(1) .header::before {

        background-image: linear-gradient(to bottom, green, #23252c);

    }

    .productContainer .card-69:nth-child(1) .footer {

        background: #23252c;

    }

    .productContainer .card-69:nth-child(2) .header::before {

        background-image: linear-gradient(to bottom, #01408f, #011842);

    }

    .productContainer .card-69:nth-child(2) .footer {

        background: #011842;

    }

    .productContainer .card-69:nth-child(3) .header::before {

        background-image: linear-gradient(to bottom, #e93632, #501823);

    }

    .productContainer .card-69:nth-child(3) .footer {

        background: #501823;

    }

    .buyNow {

        cursor: pointer;

        margin-top: 1rem;

        font-size: 1rem;

        border-radius: 5rem;

        padding: .6rem 2rem;

        background-color: #fff;

        transition: all .2s ease-in-out;
        position: relative;
        left: -30px;


    }

    .productContainer .card-69:nth-child(1) .buyNow {

        color: green;

        border: 2px solid green;

    }

    .productContainer .card-69:nth-child(1) .buyNow:hover {

        color: #fff;

        background-color: green;

    }

    .productContainer .card-69:nth-child(2) .buyNow {

        color: #01408f;

        border: 2px solid #01408f;

    }

    .productContainer .card-69:nth-child(2) .buyNow:hover {

        color: #fff;

        background-color: #01408f;

    }

    .productContainer .card-69:nth-child(3) .buyNow {

        color: #e93632;

        border: 2px solid #e93632;

    }

    .productContainer .card-69:nth-child(3) .buyNow:hover {

        color: #fff;

        background-color: #e93632;

    }

    .header p {
        color: white;
        padding: 10px;
    }

    @media (max-width: 1248px) {

        .productContainer {

            margin-top: 29rem;

        }

    }

    @media (max-width: 832px) {

        .productContainer:nth-child(1) {

            margin-top: 92rem;

        }

    }

    @media only screen and (max-width: 767px) {

        .buyNow {
            position: relative;
            left: 0;
            width: 200px;
        }

    }


    @media only screen and (max-width: 480px) {

        .buyNow {
            position: relative;
            left: 0;
            width: 200px;
        }

    }
</style>

<body>
    <?php
    include ('header.php');


    include ('bannerss.php');
    ?>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-separator mb-60">
                        <span class="text-uppercase font-26">ART HOUR </span>
                    </div>

                    <!--<h4 class="font-weight-400">ART HOUR</h4>-->

                    <p>Book an hour at our art and craft experience centre to spend a joyful hour filled with colours
                        and creativity. Your child will access various art materials, mediums, and creative ways to make
                        a fine piece of art and craft. There will be instructors to guide your child when needed, but
                        the primary focus is on the more independent way of exploring and learning.

                        Art Hour is an option where you can book our art studio for an artistic hour. Have fun, indulge
                        in the creative moment and spend some artistic time with your little one at The Art Hive.
                        Remember, time spent with your little one is never a waste of time, so why are you waiting? Book
                        your slots now.
                    </p>
    </section>
    <br>
    <center><a href="calender"><button type="submit" name="submit" class="default-btn">
                BOOK YOUR SLOT
            </button></a></center>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-30">
                <div class="esc-heading lr-line left-heading">
                    <!-- <div class="heading-line-bottom">
                                            <h4 class="heading-title">Vimeo</h4>
                                        </div> -->
                </div>
                <div class="fluid-video-wrapper">
                    <!-- <iframe
                                            src="http://player.vimeo.com/video/24302498?title=0&amp;byline=0&amp;portrait=0"
                                            width="640" height="360" title="Creative" allowfullscreen></iframe> -->
                    <!--<img src="./assets/img/artservice1.jpeg" alt="image">-->
                </div>
            </div>
            <div class="col-md-6 mb-30">
                <div class="esc-heading lr-line left-heading">
                    <!-- <div class="heading-line-bottom">
                                            <h4 class="heading-title">Youtube</h4>
                                        </div> -->
                </div>
                <div class="fluid-video-wrapper">
                    <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/oIDqz2BrVec"
                                            allowfullscreen></iframe> -->
                    <!--<img src="./assets/img/artservice2.jpeg" alt="image">-->
                </div>
            </div>
        </div>
        <!--<div class="row">-->
        <!--    <div class="col-md-6 mb-30">-->

        <!--    </div>-->
        <!--    <div class="col-md-6 mb-30">-->

        <!--    </div>-->
        <!--</div>-->
    </div>
    </section>
    </div>
    </div>
    </div>
    </div>
    </section>

    <center>
        <p>The Art Hive art experience centre is open for access to kids of ages 3 to 15 years. You can take the artwork
            created by your kid and preserve the fond memories at the art experience centre.</p>
    </center>

    <div class="productContainer">

        <div class="card-69">

            <div class="header" style="height: 17rem;">

                <!--<img src="https://drive.google.com/uc?id=1p-U1HYQRRFKAEDC4JzSqps4YWtpQ8_Pc&export=view" alt="Product">-->
                <p>3500 INR</p>

            </div>

            <div class="footer">

                <div class="title">

                    <h2>10 open studio</h2>

                </div>
                <p>Access to art & craft with make & take worth Rs.800.</p>
                <p>It includes 10 open studio entries only at RS 3500 /- (Includes play area access with book corner).
                </p>

                <center><button class="buyNow 10">Buy Now</button></center>

            </div>

        </div>

        <div class="card-69">

            <div class="header" style="height: 17rem;">

                <!--<img src="" alt="Product">-->

                <p>9500 INR </p>

            </div>

            <div class="footer">

                <div class="title">

                    <h2>30 open studio</h2>

                </div>
                <p>Access to art & craft with make & take worth Rs. 1800 .</p>
                <p>It includes 30 open studio entries only at RS 9500/- (Includes play area access with book corner).
                </p>

                <center><button class="buyNow 30 ">Buy Now</button></center>

            </div>

        </div>

        <div class="card-69">

            <div class="header" style="height: 17rem;">

                <!--<img src="https://drive.google.com/uc?id=1fkkvLxXRjMTCCtLwUZmWXlKOBOYd3IbM&export=view" alt="Product">-->
                <p>6500 INR </p>

            </div>

            <div class="footer">

                <div class="title">

                    <h2>20 open studio</h2>

                </div>
                <p>Access to art & craft with make & take worth Rs. 1000 .</p>
                <p>It includes 20 open studio entries only at RS 6500/- (Includes play area access with book corner).
                </p>

                <center><button class="buyNow 20 ">Buy Now</button></center>

            </div>

        </div>

    </div>


    <div class="container-47">

        <h2>Frequently Asked Questions</h2>

        <div class="accordion">
            <div class="accordion-item">
                <a>1. What age group of kids can visit the Art experience centre?
                </a>
                <div class="content">
                    <p>The Art Hive art experience centre is open for access to kids of ages 3 to 15 years.

                    </p>
                </div>
            </div>
            <div class="accordion-item">
                <a>2. Can I accompany my kid?</a>
                <div class="content">
                    <p>One adult can accompany the kid inside the Art experience centre and shall wait in
                        the allocated waiting area, without disturbing or distracting the kids.
                    </p>
                </div>
            </div>
            <div class="accordion-item">
                <a>3. What is the hourly charge?
                </a>
                <div class="content">
                    <p>The Art hive charges Rs 500 per head per hour. In case the session is ended by the
                        kid or the accompanying adult, before the completion of an hour, The Art Hive
                        reserves the right to levy charges for an hour.</p>
                </div>
            </div>
            <div class="accordion-item">
                <a>4. Can I take home the materials provided?

                </a>
                <div class="content">
                    <p>The Art materials like brushes and palette are intended for use at the centre only and
                        are to be returned to the instructor. However you are welcome to take the artwork
                        created by your kid and preserve the fond memories at the art experience centre.
                    </p>
                </div>
            </div>
            <div class="accordion-item">
                <a>5. What happens if my kids spoil their dresses?
                </a>
                <div class="content">
                    <p>The kids shall be provided an apron while handling art materials. However, it is
                        completely normal and expected of art to be messy. Hence, the clothes worn by kids
                        and/or the attendants can get dirty. Visitors are requested to dress them accordingly.
                    </p>
                </div>
            </div>
            <div class="accordion-item">
                <a>6. What are the other special activities at the art experience centre?


                </a>
                <div class="content">
                    <p>Unique “Make and take” activities are available for the kids on a pay and use basis.
                        You can enquire about the cost of each activity to the instructor.

                    </p>
                </div>
            </div>






        </div>

    </div>

    <!--modal start for 10 open studio  -->

    <div id="myModal10" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Booking for: </h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="artwork" method="post">

                                <div class="form-group m-2">
                                    <label for="">Name</label>
                                    <input required type="text" class="form-control" name="name"
                                        placeholder="Enter the Name ... " required>
                                </div>
                                <div class="form-group m-2">
                                    <label for="">Age</label>
                                    <input required type="text" class="form-control" name="age"
                                        placeholder="Enter the age ..." required>
                                </div>
                                <div class="form-group m-2">
                                    <label for="">Contact</label>
                                    <input required type="text" class="form-control" name="mobile"
                                        placeholder="Enter the contact number ... " required>
                                </div>
                                <div class="form-group m-2">
                                    <label for="">Location </label>
                                    <input required type="text" class="form-control" name="location"
                                        placeholder="Enter the location ... " required max="10" min="10">
                                </div>

                                <div class="form-group m-2">
                                    <label for=""> Price </label>
                                    <input readonly type="text" class="form-control" value="3500" name="price">
                                </div>
                                <div class="form-group pull-center m-2">
                                    <button name="submit" type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <!--modal end -->

    <!--modal start for 30 open studio -->

    <div id="myModal30" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Booking for: </h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="artwork" method="post">

                                <div class="form-group m-2">
                                    <label for="">Name</label>
                                    <input required type="text" class="form-control" name="name"
                                        placeholder="Enter the Name ... " required>
                                </div>
                                <div class="form-group m-2">
                                    <label for="">Age</label>
                                    <input required type="text" class="form-control" name="age"
                                        placeholder="Enter the age ..." required>
                                </div>
                                <div class="form-group m-2">
                                    <label for="">Contact</label>
                                    <input required type="text" class="form-control" name="mobile"
                                        placeholder="Enter the contact number ... " required>
                                </div>
                                <div class="form-group m-2">
                                    <label for="">Location </label>
                                    <input required type="text" class="form-control" name="location"
                                        placeholder="Enter the location ... " required max="10" min="10">
                                </div>

                                <div class="form-group m-2">
                                    <label for=""> Price </label>
                                    <input readonly type="text" class="form-control" value="9500" name="price">
                                </div>
                                <div class="form-group pull-center m-2">
                                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <!--modal end -->
    <!--modal start for 20 open studio  -->

    <div id="myModal20" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Booking for: </h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="artwork" method="post">

                                <div class="form-group m-2">
                                    <label for="">Name</label>
                                    <input required type="text" class="form-control" name="name"
                                        placeholder="Enter the Name ... " required>
                                </div>
                                <div class="form-group m-2">
                                    <label for="">Age</label>
                                    <input required type="text" class="form-control" name="age"
                                        placeholder="Enter the age ..." required>
                                </div>
                                <div class="form-group m-2">
                                    <label for="">Contact</label>
                                    <input required type="text" class="form-control" name="mobile"
                                        placeholder="Enter the contact number ... " required>
                                </div>
                                <div class="form-group m-2">
                                    <label for="">Location </label>
                                    <input required type="text" class="form-control" name="location"
                                        placeholder="Enter the location ... " required max="10" min="10">
                                </div>

                                <div class="form-group m-2">
                                    <label for=""> Price </label>
                                    <input readonly type="text" class="form-control" value="6500" name="price">
                                </div>
                                <div class="form-group pull-center">
                                    <button name="submit" type="submit"
                                        class="btn btn-primary  bg-danger">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <!-- Start Gallery Area -->
    <div class="gallery-area ">
        <div class="container">
            <div class="section-title">
                <!--<span>Gallery</span>-->
                <h2> Gallery</h2>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-gallery-box">
                        <img src="assets/img/12..jpg" alt="image">

                        <a href="assets/img/12..jpg" class="gallery-btn" data-imagelightbox="popup-btn">
                            <i class='bx bx-search-alt'></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-gallery-box">
                        <img src="assets/img/5..jpg" alt="image">

                        <a href="assets/img/5..jpg" class="gallery-btn" data-imagelightbox="popup-btn">
                            <i class='bx bx-search-alt'></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-gallery-box">
                        <img src="assets/img/8...jpg" alt="image">

                        <a href="assets/img/8...jpg" class="gallery-btn" data-imagelightbox="popup-btn">
                            <i class='bx bx-search-alt'></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-gallery-box">
                        <img src="assets/img/12.jpg" alt="image">

                        <a href="assets/img/12.jpg" class="gallery-btn" data-imagelightbox="popup-btn">
                            <i class='bx bx-search-alt'></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-gallery-box">
                        <img src="assets/img/boy.jpg" alt="image">

                        <a href="assets/img/boy.jpg" class="gallery-btn" data-imagelightbox="popup-btn">
                            <i class='bx bx-search-alt'></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-gallery-box">
                        <img src="assets/img/ah.jpg" alt="image">

                        <a href="assets/img/ah.jpg" class="gallery-btn" data-imagelightbox="popup-btn">
                            <i class='bx bx-search-alt'></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Gallery Area -->

    <!--modal end -->

    <?php
    include ('footer2.php')
        ?>

    <script>
        // Code By Webdevtrick ( https://webdevtrick.com )
        const items = document.querySelectorAll(".accordion a");

        function toggleAccordion() {
            this.classList.toggle('active');
            this.nextElementSibling.classList.toggle('active');
        }

        items.forEach(item => item.addEventListener('click', toggleAccordion));
    </script>


    <script src='https://code.jquery.com/jquery-3.2.1.min.js'></script>


    <script>
        $(".10").click(function () {
            $("#myModal10").modal("show");
        });
        $(".30").click(function () {
            $("#myModal30").modal("show");
        });
        $(".20").click(function () {
            $("#myModal20").modal("show");
        });
    </script>

</body>

</html>