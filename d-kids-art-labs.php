<?php
include 'header.php';
// include 'banner.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">



    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.om/font-awesome/4.2.0/css/font-awesome.min.css"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" /> -->

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
    <link href="https://fonts.cdnfonts.com/css/garet" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
    <style>
        .main {
            /* font-family: "Raleway", sans-serif !important; */
            font-family: "Poppins" !important;
            padding: 20px;
        }

        /*----------- hover with text-------------- */
        /* Basic button styles */
        .btn-primary {
            display: inline-block;
            padding: 10px 20px;
            background-color: #3498db;
            color: #fff;
            border: none;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        /* Styles for the text to be shown on hover */
        .btn-primary:hover::after {
            content: "Pay Now";
            position: absolute;
            top: 100%;
            left: 0;
            background-color: #fff;
            color: #3498db;
            padding: 5px 10px;
            border: 1px solid #000;
            border-radius: 5px;
            opacity: 1;
        }

        .cardprice {
            position: relative;
            display: inline-block;
        }

        /*------------- hover with text end -----------------*/
        .heading {
            text-align: center;
            margin-bottom: 20px;
        }

        .heading2 {
            font-weight: bold;
            color: white;
            background-color: #FEA1C0;
            text-align: center;
            margin-bottom: 20px;
            width: 341px;
        }

        .headingkid {
            font-weight: bold;
            color: white;
            background-color: #FEA1C0;
            text-align: center;
            margin-bottom: 100px;
            width: 253px;
        }

        .headingkid span {
            background-color: inherit !important;
            padding: 0 10px;
            margin-bottom: 40px;
            width: 280px;
            /* Adjust padding as needed */
        }

        .heading2 span {
            background-color: inherit !important;
            padding: 0 10px;
            margin-bottom: 40px;
            /* Adjust padding as needed */
        }

        .heading3 {
            text-align: center;
        }

        .h3 h3 {
            margin-bottom: 10px;
            font-weight: bold;

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
            width: 550px;
            /* Change the width value here */
        }

        .childimagewrap p {
            ont-family: sans-serif;
            /* text-align: center; */
            margin-left: 20px;
            color: black;
            margin-top: -234px;
        }



        .container2 {
            /* font-family: "Raleway", sans-serif !important; */
            font-family: "Poppins" !important;
            margin-top: 30px;
            align-item: center;
            margin-left: 40px;

        }

        .row {
            margin-bottom: 30px;
        }

        #row2 {
            margin-bottom: 30px;
        }

        .row li {
            font-size: 25;
        }


        #row2 li {
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

        }

        p:last-child {
            margin-bottom: 0;
            color: black;
            margin-left: 12px;
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
            background-color: #FEA1C0;

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
            /* font-family: "Raleway", sans-serif !important; */
            font-family: "Poppins" !important;
        }

        .card-text2 {
            font-size: 30px;
            text-align: center;
            color: black;
            font-weight: bold;
            /* font-family: "Raleway", sans-serif !important; */
            font-family: "Poppins" !important;
            padding-left: 0px;
            margin-left: -62px;


        }


        #title {
            font-size: 25px;
        }

        p:last-child {
            margin-bottom: 0;
            color: black;
            margin-left: 12px;

        }

        .card-body {
            border-width: 2px;
            border-style: solid;
            /* font-family: "Raleway", sans-serif !important; */
            font-family: "Poppins" !important;
            padding: 0px 26px 0px 0px;


        }

        .card {
            border: none;
            margin-left: 52px;
        }

        .cardhead {
            /* font-family: "Raleway", sans-serif !important; */
            font-family: "Poppins" !important;
            margin-left: -20px;
            /* padding-left: 20px; */
            /* padding-bottom: 5px; */
            background-color: inherit;
            background-color: black;
            color: white;
            width: 122px;
        }

        .cardli {
            margin-top: 10px;
            margin-left: 20px;
            /* font-family: "Raleway", sans-serif !important; */
            font-family: "Poppins" !important;


        }

        .cardprice {
            text-align: center;
            color: white;
            font-weight: bolder;
            font-size: 30;
            margin-bottom: 5px;
            /* font-family: "Raleway", sans-serif !important; */
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
        .icon {
            padding: 10px;
            background: dodgerblue;
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

            /* font-family: "Raleway", sans-serif !important; */
            font-family: "Poppins" !important;
        }

        #row2 li {

            /* font-family: "Raleway", sans-serif !important; */
            font-family: "Poppins" !important;
        }

        .row ul {
            margin-top: 10px;
        }

        #row2 ul {
            margin-top: 10px;
        }

        #card2head {
            font-size: 22;
        }

        .containercard h3 {
            /* font-family: "Raleway", sans-serif !important; */
            font-family: "Poppins" !important;

            font-size: 16px;
            font-weight: bold;
            text-align: center;

        }

        .containercard h2 {
            margin-bottom: 25px;
            /* font-family: "Raleway", sans-serif !important; */
            font-family: "Poppins" !important;
            margin-top: 80px;
            font-weight: bold;
            text-align: center;
        }

        .btn {
            display: flex;
            justify-content: center;
            color: black;
            font-size: 20px;
            /* font-family: "Raleway", sans-serif !important; */
            font-family: "Poppins" !important;
            text-align: center;
            align-items: center;
            background-color: #FEA1C0;
            margin-left: 320px;
            margin-top: 40px;
        }

        .containercard li {
            color: black;
            /* font-family: "Raleway", sans-serif !important; */
            font-family: "Poppins" !important;
            margin-left: 45px;
        }

        h4 {
            font-size: 18px;
            color: black;
        }

        .btn2 {
            display: flex;
            justify-content: center;
            color: black;
            font-size: 20px;
            /* font-family: "Raleway", sans-serif !important; */
            font-family: "Poppins" !important;
            background-color: #FEA1C0;
            border: none;
            border-radius: 5px;
            padding: 8px;
            margin-bottom: 20px;

        }

        .imgdwn {
            font-size: 18px;
        }

        .para1 {
            padding-left: 49px;
            margin-bottom: 266px;
        }

        .para {
            padding-top: 12px;
            padding-left: 49px;


            margin-top: 20px;
        }

        /* .card {
            width: 35rem;
            height: 22rem;
            /* margin-left: 96px; */
        /* }  */

        .cardp {
            height: 22rem;
        }

        .kidhead {
            margin-bottom: 20px;
        }

        .headingkid span {
            width: 280px;
            background-color: inherit !important;
            padding: 0px 10px;
            margin-bottom: 40px;
        }

        p:last-child {
            margin-bottom: 0;
            color: black;
            margin-left: 34px;
        }

        .para3 {
            margin-bottom: 262px;
        }

        .para4 {}

        .custom-contact h3 {
            margin-right: 85px;
            float: center;
            font-size: 24;
            font-weight: 800;
        }

        .cardkids {
            margin-right: 40px;
        }




        /* Media queries for responsiveness */
        @media (max-width: 768px) {

            .main {
                padding: 0px;
            }

            p.card-text2 {
                padding-left: 0px;
            }

            #we-are-body {

                margin-left: -7px !important;
                padding-right: 0px;

            }

            .childimagewrap img {
                width: auto !important;
            }

            #we-are-open-section {
                display: block !important;
            }

            .childimagewrap {
                flex-direction: column;
            }

            .childimagewrap .col-md-6 {
                width: 100%;
            }

            .container2 {
                margin-left: 0;
                text-align: center;
            }

            .btn {
                margin-left: 242px;
            }

            btn2 {
                margin-left: 0px;
            }

            #row1 {
                width: auto !important;
                margin-left: 0px !important;
            }

            #row2 {
                width: auto !important;
                margin-left: 0px !important;
            }

            .card-text2 {
                margin-left: 0px !important;
            }

            .containercard {
                margin-left: 0;
                margin-top: 90px;
            }


            .imgdwn {
                margin-top: 10px;
            }

            .col-md-2 mb-5 {
                width: 250px;
            }


            .heading {
                margin-left: 0px;
            }

            .heading3 {
                margin-left: 0px;
            }

            .heading2 {
                margin-left: 54px;
            }





            .para {}

            .btncenter {
                margin-left: -40px;
            }


            .container2 {
                margin-left: 14px;
                text-align: center;
                margin-top: 200px;
            }

            p.card-text2 {
                padding-left: 0px;
                padding-left: 0px;
                font-size: 1.5rem;
                margin-top: 25px;
            }

            .btn {
                margin-left: 122px;
            }

            .btn2 {
                margin-left: 0px;
            }


            .containercard {
                margin-left: 0;
                margin-top: 90px;
            }

            .containercard h2 {
                font-size: 1.5rem;
                margin-top: -120px;
            }



            .imgdwn {
                margin-top: 10px;
            }

            .col-md-2 mb-5 {
                width: 250px;
            }


            #row1 {
                width: auto !important;
                margin-left: 0px !important;
            }




            .heading2 {
                margin-left: 54px;
            }

            #para {
                padding-left: 0px !important;
                margin-top: 20px;
                font-size: 1.2rem;
                margin-bottom: 20px;
                /* font-family: "Garet Light" !important; */
                font-family: "Poppins" !important;
            }


            .navbar {
                position: fixed;
                top: 250px;
                width: 100%;
                z-index: 1000;
                background-color: transparent !important;


            }

            /* span.navbar-toggler-icon {
            float: right;
            position: fixed;
            top: 162px;
            /* width: 100%; */
            /* z-index: 1000; */


            .collapse.show {
                display: flex;
                justify-content: center;
                margin-top: -125px;
            }

            ul.navbar-nav {
                margin-left: 10px !important;

            }


            .headinghead {
                font-size: 10px;
            }

            .headlogo img {
                width: 35%;
            }

            .container-fluid {
                background-color: white;
                margin-top: -8px;
            }

            .container-fluid :hover {
                box-decoration-break: none;
            }

            .navbar-toggler {
                position: absolute;
                right: 10px;
                top: 10px;
            }



            /* Navbar styles */
            .navbar-collapse {
                background-color: #fff;
                /* Background color of the navbar */
                position: fixed;
                /* Fixed position for the navbar */
                top: 0;
                /* Positioning at the top of the viewport */
                left: 0;
                right: 0;
                bottom: 0;
                z-index: 1000;
                /* Higher z-index to overlap content */
                overflow-y: auto;
                max-height: calc(100vh - 56px);
                /* Adjust 56px according to your navbar height */
                /* Allow vertical scrolling */
                max-height: 100vh;
                /* Maximum height of the navbar */
                padding: 20px;
                /* Padding for the content inside the navbar */
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                transform: translateX(-100%);
                /* Initially translate the navbar off-screen */
                transition: transform 0.3s ease-in-out;
                /* Smooth transition for animation */
            }

            /* Show the navbar when it's expanded */
            .navbar-collapse.show {
                transform: translateX(50%);
                /* Move the navbar into view */
            }

            .navbar-collapse {
                max-height: calc(100vh - 56px);
                overflow-y: auto;
            }



            /* Navbar items styles */
            .nav-item {
                padding: 10px 0;
                /* Adjust padding for navbar items */
            }

            .nav-link {
                color: #333;
                /* Text color for navbar links */
            }

            /* Dropdown menu styles */
            .dropdown-menu {
                background-color: #ffc107;
                /* Background color for dropdown menu */
            }

            .dropdown-menu li {
                margin-right: 0;
                /* Remove margin for dropdown items */
            }

            /* Body styles when the navbar is open */
            body.navbar-open {
                overflow: hidden;
                /* Hide vertical scrollbar on the body */
            }

            /* Content container styles */
            .content-container {
                width: 50vw;
                padding: 20px;
                /* Adjust as needed based on your navbar height */
            }

            .other-content {
                position: relative;
                /* Ensure other content is positioned relative */
                z-index: 1;
                /* Set a lower z-index to keep it below the navbar */
            }

            .navbar-nav .dropdown-menu {
                position: absolute;
            }

            button.navbar-toggler {
                margin-top: -220px;
                font-size: 20px;
            }

            #drop1 {
                min-width: 14rem;
                padding-left: 25px;
                margin-top: -26px;
            }

            #drop2 {
                min-width: 14rem;
                padding-left: 25px;
                margin-top: -26px;
            }

            ul li {
                margin-right: -11px;
            }

            .containercard li {

                margin-left: 5px;
            }

            a.dropdown-item {
                margin-left: -28px;
            }

            .heading2 span {
                width: auto;
                font-size: 2.0rem;
            }

            h1.heading2 {
                width: auto;
                display: contents;
            }

            h3.heading3 {
                font-size: 1.5rem;
            }

            h1.heading {
                font-size: 2.5rem;

            }

            .card-body {
                width: 296px !important;
                margin-left: 34px !important;
            }

            .cardkids {
                margin-right: 30px;
                width: 215px;
            }

            h3#title {
                font-size: 2.0rem;
                text-align: left;
            }

            h3.cardhead {
                margin-left: -22px;
            }

            ul.card-text1 p {
                font-size: 1.5rem;
                text-align: left;
                margin-left: -11px;
            }

            .row ul {
                margin-top: 10px;
                margin-left: 40px;
            }

            .card {
                margin-left: -0px;
            }

            p.para3 {
                font-size: 1.2rem;
                margin-top: 22px;
            }

            p.para4 {
                font-size: 1.2rem;
                margin-bottom: 40px;
            }

            div#navbarNavDropdown {

                margin-top: 23px;
            }
        }

        .header-new {
            display: flex;
            justify-content: center;
            font-weight: 600;
            font-size: 16px;
            background-color: white !important;
            width: 100%;
            margin-top: -8px;
        }

        a.nav-link {
            color: black;
        }

        .cardprice button {
            background-color: black;
            border: none;
            padding: 2px 11px;
            font-size: 1.5rem;
        }

        .cardprice a {
            color: white;
            text-decoration: none !important;
            background-color: black;
        }

        .btn-primary:hover {
            color: white;
            background-color: black;
        }

        ul.navbar-nav {
            margin-left: 215px;
        }
    </style>
</head>

<body>


    <div class="main">

        <div class="kidhead">
            <center>
                <h1 class="headingkid"><span>Kids Arts Labs</span></h1>
            </center>
        </div>


        <div class="container">
            <div class="row childimagewrap">
                <div class="col-md-6">
                    <img src="./assets/img/gallery/gallery-1.jpeg" alt="">
                    <center class="imgdwn"><b>4-12 years <br>700 </b>/ Sessions</center>
                </div>
                <div class="col-md-6 ">
                    <p class="para3">Prepare to embark on a journey of vibrant colors and boundless
                        creativity at the Kid's Art Lab! Our establishment warmly welcomes all,
                        emphasizing that art knows no boundaries! Engage in a session where
                        your imagination can soar freely for an hour. We offer a wide array of
                        art supplies, diverse mediums, and innovative techniques to enhance
                        your masterpiece. While our instructors are available to offer
                        guidance, we encourage independent exploration and self-expression
                        for your young ones.</p>

                    <p class="para4"><b>Book your slots prior!
                            Walk-ins are also welcome, although availability is
                            not guaranteed.
                            Please ensure your child is dressed in attire suitable for
                            potential mess, although we do provide elegant aprons
                            for your convenience.
                            You can proudly display your kid's masterpiece at your home.
                        </b></p>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container2">
        <div class="row">
            <div class="col-md-4 ">
                <div class="card" style="width: 35rem; height: 22rem">
                    <div class="card-body">
                        <h3 class="card-title" id="title">We are Open from</h3>
                        <ul class="card-text1">
                            <p>Tuesdays to Sundays<br> 11 am to 7 pm<br> Walk right in or play it safe by<br>reserving
                                your spot in advance!</p>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="cardp" style="height: 22rem">
                    <div class="card-body1">
                        <p class="card-text2" id="card-text2">Would you like to visit The
                            Toddler Art Lab?<br>Please find the available days and times below.</p>

                    </div>
                    <button class="btn" style="margin-bottom:10px">Book here</button>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="containercard">
        <h2>Ready to go steady? Check out our Subscription Plan and click below</h2>
        <div class="row justify-content-center" id="row2">
            <div class="col-md-2 mb-5 cardkids">
                <div class="card2 h-60">
                    <div>
                        <h3 class=cardhead>10 OPEN<br>STUDIO</h3>
                    </div>
                    <ul class="fa-ul">
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Access to art &<br> craft with
                            make<br> & take worth<br> Rs.500.</li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>It includes 10<br> open studio<br>
                            entries.</li>

                    </ul>


                    <!-- <div class="cardprice">
                        <button><a href="" class="btn-primary">6,000 ₹</a></button>

                    </div> -->
                    <div class="cardprice">
                        <button class="btn-primary">6,000 ₹</button>
                    </div>
                </div>
            </div>
            <div class="col-md-2 mb-5 cardkids">
                <div class="card2 h-80">
                    <div>
                        <h3 class=cardhead>20 OPEN<br>STUDIO</h3>
                    </div>
                    <ul class="fa-ul">
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Access to art &<br> craft with
                            make<br> & take worth<br>Rs.700.</li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>It includes 20<br>open
                            studio<br>entries.</li>

                    </ul>


                    <!-- <div class="cardprice">
                        <button><a href="" class="btn-primary">11,000 ₹</a>

                    </div> -->

                    <div class="cardprice">
                        <button class="btn-primary">11,000 ₹</button>
                    </div>
                </div>
            </div>
            <div class="col-md-2 mb-5 cardkids">
                <div class="card2">
                    <div>
                        <h3 class=cardhead>30 OPEN<br>STUDIO</h3>
                    </div>
                    <ul class="fa-ul">
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Access to art &<br>craft with
                            make<br>& take worth<br>Rs.1,000.</li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>It includes 30<br> open
                            studio<br>entries.</li>
                    </ul>


                    <!-- <div class="cardprice">
                        <button><a href="" class="btn-primary">15,000 ₹</a></button>

                    </div> -->
                    <div class="cardprice">
                        <button class="btn-primary">15,000 ₹</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="">
        <center class="btncenter"><button class="btn2">Click Here</button></center>
    </div> -->

    <script>
        function redirectToPage() {
            // Replace 'target_page.html' with the URL of the page you want to redirect to
            window.location.href = 'book2.php';
        }
    </script>



</body>

</html>

<!-- <?php

// include 'footer2.php'
?> -->