<?php
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.cdnfonts.com/css/garet" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
    <style>
        body {
            /* font-family: "garet" !important; */
            font-family: "Poppins" !important;
        }

        .main {
            font-family: ;
        }

        .heading {
            text-align: center;
            /* font-family: "garet" !important; */
            font-family: "Poppins" !important;


        }

        .heading2 {
            /* font-family: "garet" !important; */
            font-family: "Poppins" !important;
            text-align: center;
            margin-top: 20px;
            font-weight: bold;
            color: white;
            background-color: #5062c3;
            display: inline-block;
            /* Add this line */
            justify-content: center;
        }

        .heading2 span {
            background-color: inherit;
            padding: 0 10px;
            /* Adjust padding as needed */
        }

        .heading3 {
            text-align: center;
            /* font-family: "garet" !important; */
            font-family: "Poppins" !important;
        }

        .h3 h3 {
            margin-bottom: 30px;
            font-weight: bold;
            font-style: italic;
        }

        .childimagewrap {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .childimagewrap .col-sm-4 {
            height: auto;
        }

        .childimagewrap img {

            height: auto;
            max-width: 550px;
            /* Change the width value here */
        }

        .childimagewrap p {
            margin-left: 20px;
            color: black;
        }

        .container2 {
            /* font-family: "garet" !important; */
            font-family: "Poppins" !important;
            margin-top: 30px;
            align-item: center;
            margin-left: 113px;
            margin-right: 87px;
        }

        .row {
            margin-bottom: 30px;
        }

        .row li {
            font-size: 25;
        }

        ul.card-text {
            font-size: 18px;

        }

        .card-title {
            margin-bottom: 0.5rem;
            margin-left: 30px;
            font-size: 1.5rem;
            color: black;
            font-weight: bolder;
            font-size: 18px
        }

        .card-text:last-child {
            margin-bottom: 0;
            margin-left: 32px;
            font-size: 16px;
            font-family: garet;
            color: black;
            list-style-type: disc;

        }

        .icon {
            /* font-family: 'Font Awesome 5 Free', 'Fallback Font', sans-serif; */
            font-family: "Poppins" !important;
        }



        .card2 {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            /* background-color: #fff; */
            background-clip: border-box;
            border: 1px solid rgba(0, 0, 0, 0.125);
            border-radius: 0.25rem;
            background-color: #5062c3;

        }

        .card-text1 {
            font-size: 18px;
            color: black;
        }

        .card-text p {
            font-size: 18px;
            color: black;
        }



        .card-body1 p.card-text {
            border: none;
            /* font-family: "garet" !important; */
            font-family: "Poppins" !important;
        }

        .card-text2 {
            font-size: 25px;
            color: black;
            font-weight: 800;
            /* font-family: "garet" !important; */
            font-family: "Poppins" !important;

        }

        #title {
            font-size: 25px;
        }

        .card-text1 p {
            margin-bottom: 0;
            color: black;
            margin-left: 32px;

        }

        .card-body {
            border-width: 2px;
            border-style: solid;
            /* font-family: "garet" !important; */
            font-family: "Poppins" !important;
            padding: 0px;


        }

        .cardhead {
            /* font-family: "garet" !important; */
            font-family: "Poppins" !important;
            margin-left: -20px;
            padding-left: 20px;
            /* padding-bottom: 5px; */
            background-color: inherit;
            background-color: black;
            color: white;
            width: 100px;
            box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
        }

        .cardhead2 {
            /* font-family: "Garet" !important; */
            font-family: "Poppins" !important;
            margin-left: -20px;
            padding-left: 20px;
            margin-bottom: 0px;
            background-color: inherit;
            background-color: black;
            color: white;
            width: 200px;
            box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
        }

        .cardhead3 {
            /* font-family: "garet" !important; */
            font-family: "Poppins" !important;
            margin-left: -20px;
            padding-left: 20px;
            /* padding-bottom: 5px; */
            background-color: inherit;
            background-color: black;
            color: white;
            width: 140px;
            box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
        }

        .cardli {
            margin-top: 10px;
            margin-left: 20px;
            /* font-family: "garet" !important; */
            font-family: "Poppins" !important;


        }

        .cardprice {
            text-align: center;
            color: white;
            font-weight: bolder;
            font-size: 30;
            margin-bottom: 5px;
            /* font-family: "garet" !important; */
            font-family: "Poppins" !important;
        }




        .input-container {
            display: flex;
            width: 100%;
            justify-content: flex-start;
            align-items: 99%;
            align-items: center;
            margin-bottom: 15px;

        }

        .fa-solid,
        .fas {
            font-weight: 900;
            margin-left: 0px;
            color: white;
        }

        /* Style the form icons */
        .fa ul {
            padding: 10px;
            background: #5062c3;
            color: white;
            min-width: 50px;
            text-align: center;
        }

        .test-price-list {
            color: white;
            font-weight: bold;
        }

        /* p:last-child1 {
            margin-bottom: 0;
            color: black;
            margin-left: 12px;
            color: white;
        } */

        .row li {

            /* font-family: "garet" !important; */
            font-family: "Poppins" !important;
        }

        .row ul {
            margin-top: 10px;
        }

        #card2head {
            font-size: 22;
        }

        .containercard h3 {
            /* font-family: "garet" !important; */
            font-family: "Poppins" !important;

            font-size: 22px;
            font-weight: bold;
            text-align: center;

        }

        .containercard h2 {
            margin-bottom: 40px;
            /* font-family: "garet" !important; */
            font-family: "Poppins" !important;
            margin-top: 60px;
            font-weight: bold;
            text-align: center;
            color: black;
        }

        .btn {
            display: flex;
            justify-content: center;
            background-color: black;
            color: white;
            font-size: 20px !important;
            border-radius: 0px !important;
            /* font-family: "garet" !important; */
            font-family: "Poppins" !important;
            text-align: center;
            align-items: center;
        }

        .btn :hover {
            text-decoration: none !important;
        }

        .containercard li {
            color: white;
            /* font-family: "garet" !important; */
            font-family: "Poppins" !important;
        }

        .btncontainer {
            align-items: center;
            justify-content: center;
        }

        .card-text2 {
            font-size: 23px;
        }

        /* .card2 {
            width: 50%;
        } */

        .col-md-2.mb-5 {
            margin-left: 43px;
        }

        .para {
            font-family: "";
        }

        .containercard h2 {
            margin-left: 58px;
        }

        .row {
            margin-left: 37px;
        }

        .heading2 span {
            display: block;
            color: white;
            text-decoration: none;
            /* padding: 15px; */
            margin-top: 0px;
            font-weight: bold;
        }

        .main-long-term .row {
            margin-right: 30px !important;
            margin-left: 30px !important;
        }

        .btn a {
            color: white !important;
            text-decoration: none;
            font-weight: 600;

        }




        /* Add media queries for responsiveness */
        @media screen and (max-width: 768px) {
            .main {
                margin-left: 46px;
            }

            .heading2 {
                font-size: 24px;
            }

            .childimagewrap img {
                max-width: 100%;
            }

            .card {
                width: 100%;
                margin-bottom: 20px;
            }

            .containercard {
                margin-top: 50px;
            }

            .card2 {
                width: 100%;
            }

            .btncontainer {
                margin-top: 30px;
            }

            .card-text2 {
                font-size: 19px;
            }

            .card2 {
                width: 50%;
            }

            .col-md-2.mb-5 {
                margin-left: 225px;
            }

            #box {
                margin-left: 60px;
            }

            #box2 {
                width: 353px;
                margin-left: 60px;
            }

            #belowbox {
                margin-left: 31px;
            }

            #cardblue {
                width: 245px;
                margin-left: 195px;
            }

            #btncenter {

                margin-left: 38px;
            }
        }


        @media screen and (max-width: 576px) {
            .main {
                margin-left: 46px;
            }

            .heading {
                font-size: 24px;
                text-align: center;
                /* Align heading center on small screens */
            }

            .container2 {
                margin-top: 20px;
                margin-left: 20px;
            }

            .headlogo img {
                width: 35%;
            }

            .card {
                height: auto;
            }

            .card-body {
                padding: 15px;
            }

            .card-body1 {
                margin-left: 56px;
            }

            .childimagewrap p {
                padding-left: 0;
                /* Remove padding on small screens */
                text-align: center;
                /* Align text center on small screens */
            }

            .card2 {
                width: 90%;
                /* Adjust width to fit smaller screens */
                margin: 0 auto;
                /* Center the card on small screens */
            }

            .col-md-2.mb-5 {
                margin-left: 0;
                /* Remove left margin on small screens */
            }

            .btncontainer {
                margin-top: 20px;
                /* Adjust top margin for the button container */
            }

            .wrapper-long-term-program-para {
                padding-left: 0px !important;
            }

            .wrapper-long-term-program-para2 {
                padding-left: 0px !important;
            }

            #box {
                margin-left: 60px;
            }

            #box2 {
                width: 353px;
                margin-left: 60px;
            }

            #belowbox {
                margin-left: 31px;
            }

            #cardblue {
                width: 245px;
                margin-left: 195px;
            }

            #btncenter {

                margin-left: 38px;
            }

            .containercard {
                margin-top: 250px;
                margin-right: 30px;
            }


        }



        p:last-child {

            /* font-family: "Garet Light" !important; */
            font-family: "Poppins" !important;
            margin-left: 32px;
        }

        .wrapper-long-term-program-para {
            padding-left: 82px;
        }


        #cardmain {
            width: 35rem;
            height: 22rem
        }

        div#navbarNavDropdown {
            display: flex !important;
        }

        a.nav-link {
            color: black;
        }
    </style>
</head>

<body>

    <div class="main">
        <div>
            <h1 class="heading">Long Term Programs</h1>
        </div>
        <div>
            <center>
                <h1 class="heading2"><span><i>Arts Expressions Course</i></span></h1>
            </center>
        </div>
        <div class="h3">
            <h3 class="heading3">Ready to unwind, re-center, and unleash your inner self through art?</h3>
        </div>

        <div class="container">
            <div class="row childimagewrap">
                <div class="col-md-6">
                    <img src="./assets/img/gallery/gallery-1.jpeg" alt="">
                </div>
                <div class="col-md-6 ">
                    <div class="wrapper-long-term-program-para">
                        <p>Our "Art Expressions" course is the perfect way to escape the
                            daily
                            grind and tap into your creative side! Whether you're a seasoned Picasso or a total art
                            newbie,
                            you'll find a peaceful oasis in this <b>Mediatative Art Course.</b></br> We'll help you
                            leave
                            the stress of daily life in the rearview
                            mirror and embrace the <b>healing power of art.</b></br> Our program focuses on the process
                            of
                            creating art and not the end result. So, grab some basic art supplies and get ready to join
                            an
                            <b>inspiring art community.</b></br> No matter what your skill level is, we have three
                            levels of
                            courses to choose from: Basic, Intermediate, and Advanced. So, let's get those creative
                            juices
                            flowing!</br>

                        <p><b><i>You don't need any fancy art degree to join
                                    in
                                    on the fun!</i></b></p>
                        <p><b>Age: 18 years and above</b></p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container2 main-long-term">
        <div class="row long-term-three-card">
            <div class="col-md-4">
                <div class="card" id="box" style="width: 35rem; height: 20rem">
                    <div class="card-body">
                        <h3 class="card-title" id="title">what you will learn</h3>
                        <ul class="card-text">
                            <li>De stress with art</li>
                            <li>Focus on creating art rather<br> than the end result.
                            </li>
                            <li>Feel empowered through art.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4" id="col4">
                <div class="card" id="box" style="width: 35rem; height: 20rem">
                    <div class="card-body">
                        <h3 class="card-title" id="title">What you will get</h3>
                        <ul class="card-text">
                            <li>A fun experience in a relaxed <br>environment.
                            </li>
                            <li>Take the artworks made in<br> each session</li>
                        </ul>

                    </div>
                </div>
            </div>
            <div class="col-md-4" id="box" id="col4">
                <div class="card" style="width: 35rem; height: 20rem">
                    <div class="card-body" style=" font-family: garet!important">
                        <h3 class="card-title" id="title">Weekend Batch</h3>
                        <p class="card-text" id="time">Saturday & Sunday<br>
                            Morning Batch - 10:00 am to 11:00 am<br> Evening Batch - 4:00 pm to 5:00 pm<br>

                        </p>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card" id="box2">
                    <div class="card-body">
                        <h3 class="card-title" id="title">We do not provide<br> Trial classes or<br>
                            Compensation<br>
                            classes!</h3>
                        <ul class="card-text1">
                            <p>Read our Refund Policy<br>Read our Terms and Conditions</p>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-8" id="belowbox">
                <div class="cardp" style="height: 22rem">
                    <div class="card-body1">
                        <p class="card-text2" style="margin-left:0px; margin-right:20px; ">
                            This isn’t
                            just a workshop
                            or a
                            class it’s a whole experience. While we provide all the materials and techniques for
                            lasting
                            pieces, we also make it an immersive experience that brings people together and
                            encourages a
                            creative social experience. Make a special memory!</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="containercard">
        <h2>Ready to dive into this Program? Check out our Subscription Plan and click below</h2>
        <div class="row justify-content-center" id="cardblue">
            <div class="col-md-2 mb-5">
                <div class="card2 h-60">
                    <div>
                        <h3 class=cardhead>BASIC</h3>
                    </div>
                    <ul class="fa-ul">
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Art Prompts - 12</li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Relaxing Music -<br> 12</li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Relax with<br> colors - 4
                            <br>sessions
                        </li>
                    </ul>


                    <div class="cardprice">
                        <h4>2,000 ₹</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-2 mb-5">
                <div class="card2 h-80">
                    <div>
                        <h3 class=cardhead2 id="card2head">INTERMEDIATE</h3>
                    </div>
                    <ul class="fa-ul">
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Art Prompts - 12</li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Relaxing Music -<br> 12</li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Relax with<br> colors - 4
                            <br>sessions
                        </li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Colour Printables
                        </li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Doodle With Me -<br> 4 sessions
                        </li>

                    </ul>


                    <div class="cardprice">
                        <h4>4,000 ₹</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-2 mb-5">
                <div class="card2">
                    <div>
                        <h3 class=cardhead3>ADVANCE</h3>
                    </div>
                    <ul class="fa-ul">
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Art Prompts - 12</li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Relaxing Music -<br> 12</li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Relax with<br> colors - 4
                            <br>sessions
                        </li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Colour Printables
                        </li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Doodle With Me -<br> 4 sessions
                        </li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Fun with Craft -
                            2 sessions
                        </li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Art Journaling -
                            2 sessions
                        </li>
                    </ul>


                    <div class="cardprice">
                        <h4>6,000 ₹</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="btncontainer">
        <center id="btncenter"><button class="btn" style="margin-bottom:10px"> <a href="book.php
        ">Enroll Now</a> </button>
        </center>
    </div>

</body>

</html>
<?php
include 'footer2.php'
    ?>