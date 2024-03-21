<?php
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
    <style>
        body {
            font-family: "Poppins" sans-serif !important;
        }

        .main {
            /* font-family: "garet" !important; */
            font-family: "Poppins" sans-serif !important;
        }

        .heading {
            text-align: center;

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
            margin-bottom: 0px;
            /* Adjust padding as needed */
        }

        .heading3 {
            text-align: center;
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
            /* font-family: "garet" !important; */
            font-family: "Poppins" !important;
            /* text-align: center; */
            margin-left: 20px;
            color: black;
        }

        .container2 {
            /* font-family: "garet" !important; */
            font-family: "Poppins" !important;
            margin-top: 30px;
            align-item: center;
            margin-left: 40px;

        }

        .row {
            margin-bottom: 30px;
            margin-top: 30px;
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
            background-color: blue;

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
            font-weight: bold;
            /* font-family: "garet" !important; */
            font-family: "Poppins" !important;

        }

        #title {
            font-size: 25px;
        }

        p:last-child {
            margin-bottom: 0;
            color: black;
            margin-left: 12px;
            padding-bottom: 40px;
            /* padding-left: 30px; */


        }

        .card-body {
            border-width: 2px;
            border-style: solid;
            /* font-family: "garet" !important; */
            font-family: "Poppins" !important;
            padding-bottom: 15px;


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
            /* font-family: "garet" !important; */
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
        .icon {
            padding: 10px;
            background: '#1139a8';
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
            margin-bottom: 25px;
            /* font-family: "garet" !important; */
            font-family: "Poppins" !important;

            font-weight: bold;
            text-align: center;
        }

        .btn {
            display: flex;
            justify-content: center;
            background-color: #5062c3;
            color: white;
            font-size: 20px;
            /* font-family: "garet" !important; */
            font-family: "Poppins" !important;
            text-align: center;
            align-items: center;
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

        .imgdwn {
            font-size: 18px;
        }

        .heading-visit {
            margin-top: 30px;
        }

        .btn-left {

            justify-content: center;
            background-color: #5062c3;
            color: white;
            font-size: 20px;
            padding: 5px;
            /* font-family: "garet" !important; */
            font-family: "Poppins" !important;
            text-align: center;
            align-items: center;
            border: none;
            border-radius: 5px;
            margin-right: 170px;
        }

        .btn-right {

            justify-content: center;
            background-color: #5062c3;
            color: white;
            padding: 5px;
            font-size: 20px;
            border-radius: 5px;
            /* font-family: "garet" !important; */
            font-family: "Poppins" !important;
            text-align: center;
            align-items: center;
            border: none;
        }

        .card.wrap-card-border {
            border: none;
        }

        #time {
            /* font-family: "garet" !important; */
            font-family: "Poppins" !important;
        }

        #paramain {
            margin-left: 49px;
        }



        @media only screen and (max-width: 600px) {

            .col-md-6 {
                width: 100%;
                text-align: center;
            }

            .col-md-6 img {
                max-width: 80%;
            }

            .col-md-6 p {
                margin-left: 0;
                padding: 0 10px;
            }

            .container2 .col-md-4 {
                width: 100%;
                margin-bottom: 20px;
            }

            .container2 .col-md-4 .card {
                width: 100%;
            }

            .btncontainer {
                flex-direction: column;
            }

            .btn {
                margin-bottom: 10px;
            }

            .btn-left,
            .btn-right {
                margin-bottom: 10px;
                margin-right: 0;
            }

            .container2 .col-md-4 {
                width: 100%;
                margin-bottom: 35px;
            }

            .col-md-4 {
                margin-top: 19px;
            }

            .btn-left {
                margin-bottom: 50px;
                margin-right: -5%;
            }

            .btn-right {
                margin-bottom: 50px;
                margin-right: -6%;
            }

            #paramain {
                margin-left: 0px;
            }



            .heading2 span {
                padding: 0 5px;
            }

            .container2 {
                margin-left: 22px;
            }

            .container2 .col-md-4 {
                width: 100%;
                margin-bottom: 20px;
            }

            .btncontainer {
                flex-direction: column;
            }

            .btn {
                margin-bottom: 10px;
            }

            .btn-left,
            .btn-right {
                margin-bottom: 10px;
                margin-right: 0;
            }

            .container2 .col-md-4 {
                width: 100%;
                margin-bottom: 42px;
            }

            #row {
                margin-left: 90px
            }

            .btn-left {
                margin-bottom: 50px;
                margin-right: -5%;
            }

            .btn-right {
                margin-bottom: 50px;
                margin-right: -6%;
            }

            .btncontainer {
                display: block;
            }

            #paramain {
                margin-left: 0px;
            }

            span.navbar-toggler-icon {
                float: right;
            }

            .collapse.show {
                display: flex;
                justify-content: center;
                margin-top: 20px;
            }

            .headinghead {
                font-size: 16px;
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

            @media only screen and (max-width: 600px) {
                .navbar {
                    position: fixed;
                    top: 168px;
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
                    margin-top: 34px;
                }

                ul.navbar-nav {
                    margin-bottom: -55px !important;
                    margin-right: 100px !important;
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
                    transform: translateX(29%);
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
                    margin-top: -148px;
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
                    margin-right: 24px;
                }

                a.dropdown-item {
                    margin-left: -28px;
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

        }


        .btncontainer {
            display: flex;
            justify-content: center;
            margin-left: 25px;
            margin-bottom: 80px;
            margin-top: -30px;
        }

        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        a,
        span,
        button,
        input,
        select,
        textarea,
        /* Add other elements as needed */
            {
            /* font-family: "Garet Light", sans-serif !important; */
            font-family: "Poppins" !important;
            /* Use !important to override any other conflicting styles */
        }

        .main-navbar .container .navbar-nav {
            /* margin-left: 145px; */
            align-items: center;
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
            <center>
                <h1 class="heading2"><span>Art Cafe</span></h1>
            </center>
        </div>

        <div class="container">
            <div class="row childimagewrap">
                <div class="col-md-6">
                    <img src="./assets/img/gallery/gallery-1.jpeg" alt="">
                    <center class="imgdwn"><b> 16 years and above
                        </b></center>
                </div>
                <div class="col-md-6 ">
                    <p id="paramain"> Why settle for conventional fare like burgers and
                        fries when you<br>
                        can explore your <b>artistic side</b> at our café? Our menu is a canvas of<br>
                        creativity, offering art supplies instead of typical dishes. Choose<br>
                        from a selection of paints, markers, and other tools to unleash<br>
                        your imagination while enjoying a sip of exotic tea or indulging in a<br>
                        cookie. Should you find yourself in need of inspiration, our<br>
                        collection of books and decor is sure to spark your creativity.<br>
                        Regardless of your skill level, our café welcomes everyone with no<br>
                        artistic background.<br>
                        We’re a <b>community space</b> centered around creativity and<br>
                        connection. We have an <b>art cafe menu</b> from which you can<br>
                        choose art supplies and art kits and explore art at your own pace!<br>
                        You can also come by to read, co-work, mingle, chat and just hang<br>
                        out. You can also bring your own materials to use here – laptops,<br>
                        paint, you name it.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container2">
        <div class="row" id="row">
            <div class="col-md-4">
                <div class="card wrap-card-border" style="width: 35rem; height: 20rem">
                    <div class="card-body">
                        <h3 class="card-title" id="title">What you can do</h3>
                        <ul class="card-text">
                            <li>Play with art supplies<br>
                                Bring your own supplies<br>
                                and do art at our space</li>
                            <li>Find Inspiration
                            </li>
                            <li>Meet up with friends</li>
                            <li>Work in a cool space</li>
                            <li>Take a break</li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4" id="col4">
                <div class="card wrap-card-border" style="width: 35rem; height: 20rem">
                    <div class="card-body">
                        <h3 class="card-title" id="title">What we offer</h3>
                        <ul class="card-text">
                            <li>A warm, safe and fun space.
                            </li>
                            <li>Wide range of art supplies and<br>
                                art kits to choose from.</li>
                            <li>Complimentary snacks and<br>
                                drinks when you order from<br>
                                our art cafe menu.</li>
                            <li>Inspiring art community</li>
                        </ul>

                    </div>
                </div>
            </div>
            <div class="col-md-4" id="col4">
                <div class="card wrap-card-border" style="width: 35rem; height: 24.6rem">
                    <div class="card-body">
                        <h3 class="card-title" id="title">We are Open from</h3>
                        <p class="card-text" style=" font-family: garet!important" id=" time">Tuesdays to
                            Sundays<br>
                            11:00am to 7:00pm<br> Walk right in or play it safe by<br>reserving your spot in advance!

                        </p>

                    </div>
                </div>
            </div>
        </div>
        <div style="margin-top: 80px;
    margin-bottom: 60px;">
            <center>
                <h3><b>Would you like to visit our art cafe? Please find the available days and times below.</b></h3>
            </center>
        </div>

        <div class="btncontainer">
            <center><button class="btn" style="margin-bottom:10px">Click here</button></center>
        </div>
        <div style="margin-top: 80px;
    margin-bottom: 60px;">
            <center>
                <h3><b>Ready to go steady? Check out our Membership Plan and click below</b></h3>
            </center>
        </div>
        <div class="btncontainer">
            <center><button class="btn-left">Creative community
                    Membership</button>
                <button class="btn-right">Rent our space for artistic
                    colloboration</button>
            </center>

        </div>

</body>

</html>
<?php
include 'footer2.php'
    ?>