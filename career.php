<?php
include ('header.php');


// include('banner.php');
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link href=" assets/css/jquery-ui.min.css" rel="stylesheet" type="text/css">
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
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-K0WVMYG642"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <!-- JS | jquery plugin collection for this theme -->
    <!-- <script src="assets/js/jquery-plugin-collection.js"></script> -->
    <style>
        * {
            font-family: "Poppins" !important;
        }

        .container-219 {
            box-shadow: rgba(0, 0, 0, 0.25) 0px 25px 50px -12px;
        }

        .col-md-12 {
            /* padding: 50px; */

        }

        .container .container-219 .col-md-12 {
            margin-left: 110px;
        }

        @media only screen and (max-width: 768px) {
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
                justify-content: left;
                margin-top: 23px;
            }

            ul.navbar-nav {
                margin-bottom: -55px !important;
                margin-right: 225px !important;
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
                /* transform: translateX(-100%); */
                /* Initially translate the navbar off-screen */
                transition: transform 0.3s ease-in-out;
                /* Smooth transition for animation */
            }

            /* Show the navbar when it's expanded */
            .navbar-collapse.show {
                transform: translateX(46%);
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
                margin-top: -225px;
                font-size: 2.0rem;
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

            ul.navbar-nav {
                align-items: flex-start;
                margin-left: 4px;
            }
        }
    </style>
</head>
<section>
    <div class="container">
        <div class="container-219">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-separator mb-60">
                        <span class="text-uppercase font-26">CAREER </span>
                    </div>

                    <h4 class="font-weight-400">Hi Mommies... </h4>

                    <h3>.Are you an art enthusiast who loves to explore various art forms? </h3>
                    <h3>.Are you the fun aunt that enjoys spending time with kids? </h3>
                    <h3>.Are you looking to restart your career after a break? </h3>
                    <p>What do you think about joining a workplace where you can bring your kid along?</p>
                    <p>Too good to be true?</p>
                    <p>Reach out to The Art Hive at 9841423978 to know more</p>
</section>

<section>
    <br>



</section>









</div>









</div>
</div>
</div>
</div>
</section>
<?php
include ('footer2.php')
    ?>