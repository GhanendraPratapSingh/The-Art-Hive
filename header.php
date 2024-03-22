<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thearthive</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.cssintegrity="
        sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">





    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Animate CSS -->
    <!-- <link rel="stylesheet" href="assets/css/animate.min.css"> -->
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="assets/css/meanmenu.css">

    <!-- Boxicons CSS -->
    <link rel="stylesheet" href="assets/css/boxicons.min.css">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!-- Owl Carousel Default CSS -->
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <!-- Odometer CSS -->
    <link rel="stylesheet" href="assets/css/odometer.min.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <!-- Imagelightbox CSS -->
    <link rel="stylesheet" href="assets/css/imagelightbox.min.css">

    <!-- Dark CSS -->
    <link rel="stylesheet" href="assets/css/dark.css">

    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">


    <!-- external link -->
    <link href="https://fonts.cdnfonts.com/css/gareth" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-K0WVMYG642"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</head>

<style>
    * {
        /* font-family: 'Gareth', sans-serif !important; */
        font-family: "Poppins" !important;
    }



    /*------------sub menu style------------------*/

    .dropdown-menu {
        background-color: #ffc107;
        /* Change the background color here */
    }

    ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
    }



    ul li {
        display: grid;
        margin-right: 20px;

    }

    span {
        display: block;
        color: #333;
        text-decoration: none;
        /* padding: 15px; */
        margin-top: 0px;
        font-weight: bold;
    }

    /* Styles for the down arrow icon */
    #arrow {
        display: inline-block;
        margin-left: -8px;
        cursor: pointer;
        vertical-align: top;
        /* Aligns the arrow vertically in the middle */
        margin-top: -8px;
        font-size: 30px;
        /* Adjust the top margin to center the arrow */
        color: #5062c3;
        /* Change to the color you desire */
    }

    #arrow-k {
        isplay: inline-block;
        margin-left: -8px;
        cursor: pointer;
        vertical-align: top;
        color: #FEA1C0;
        margin-top: -8px;
        font-size: 30px;
    }

    .sub-menu-item with-options span {
        margin-top: 0px !important;
    }

    /* Styles for submenu options */
    .options {
        display: none;
    }

    /* Styles for submenu options when active */
    .active {
        display: block;
    }

    .dropdown[aria-expanded="true"]::after {
        border-color: transparent transparent white;
        top: 40%;
    }

    /* Styles for the dropdown content */

    .f-dropdown {
        display: none;
        position: absolute;
        top: 100% !important;
        flex-direction: column;
        /* Align items vertically */
        justify-content: center;
        background-color: #fff;
        padding: 10px;
        z-index: 999;
    }


    .f-dropdown.show {
        display: block;
        /* Display dropdown content when show class is present */
    }

    .f-dropdown li {
        margin-right: 20px;
        /* Adjust spacing between items */
    }

    .f-dropdown span {
        display: block;
        padding: 0px 0px;
        /* Adjust padding */
        font-size: 16px;
        /* Match font size */
        color: #333;
        /* Match text color */
        text-decoration: none;
        /* font-family: "Garet Light" !important; */
        font-family: "Poppins" !important;
    }

    .f-dropdown li a {
        color: black;
        text-decoration: none;
        margin-bottom: 20px;
    }

    .f-dropdown a:hover {
        background-color: whitesmoke;
        /* Hover background color */
    }

    #drop1 {
        background-color: #FEA1C0 !important;

    }

    #drop2 {
        background-color: #5062c3 !important;

    }

    .headlogo img {
        width: 15%;
        margin-bottom: 0px;
        margin-top: 0px;

    }

    .headinghead {
        background-color: black;
        color: #fff;
        padding: 5px 0px 5px 0px;
        text-align: center;
        font-size: 24px;
        font-weight: 600;
        /* font-family: "Garet Light" !important; */
        font-family: "Poppins" !important;
    }

    .main-navbar .container .navbar-nav {
        /* margin-left: 145px; */
        align-items: center;
    }

    /* Navbar styles */
    .navbar {
        min-height: 100vh;
        /* Make navbar full height */
    }

    /* Content container styles */
    .content-container {
        padding: 20px;
        /* Add other styles as needed */
    }

    .header-new {
        display: flex;
        justify-content: center;
        font-weight: 600;
        font-size: 16px;
        background-color: white !important;
        width: 100%;
        margin-top: -8px;
        padding-top: 25px;
    }

    a.nav-link {
        color: black;
    }

    div.sticky {
        position: -webkit-sticky;
        position: sticky;
        top: 0;
        z-index: 999;
        background-color: white;
    }

    .navbar {
        min-height: 0vh;
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

    /*------------sub menu style------------------*/
</style>

<body>
    <!-- new hearder -->
    <div class="sticky">
        <div>
            <center class="headinghead">Yes, you can join classes anytime!</center>
        </div>

        <div class="headlogo">
            <center>
                <img class="headimg" src="assets/pictures/logoattached.png" width="110" alt="headers">
            </center>
        </div>
    </div>



    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse header-new" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">ABOUT US</a>
                    </li>

                    <li class="nav-item dropdown sub-menu-item with-options" id="kids-menu">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            KIDS
                        </a>
                        <ul id="drop1" class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Long Term Program</a></li>
                            <li><a class="dropdown-item" href="#">Weekend workshops</a></li>
                            <li class="nav-item dropdown sub-menu-item with-options" id="art-labs-menu"
                                aria-expanded="false">
                                <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown">
                                    Art Labs
                                </a>
                                <ul class="dropdown-menu" id="art-labs-submenu">
                                    <li><a class="dropdown-item" href="d-kids-art-labs">Kids Labs</a></li>
                                    <li><a class="dropdown-item" href="d-toddler-labs">Toddler Lab</a></li>
                                </ul>
                            </li>
                            <li><a class="dropdown-item" href="#">Private Art Party</a></li>
                        </ul>
                    </li>




                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            ADULTS
                            <!-- <i class='bx bx-chevron-down'></i> -->
                        </a>
                        <!-- <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul> -->
                        <ul id="drop2" data-dropdown-content class="dropdown-menu" aria-hidden="true">
                            <li><a class="dropdown-item" href="a-long-term-program">Long Term Program</a></li>
                            <li><a class="dropdown-item" href="#">Weekend workshops</a></li>
                            <li><a class="dropdown-item" href="a-art-cafe">Art Cafe</a></li>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">AWARD AND MEDIA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="career">CAREER</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact">CONTACT US</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>



    <!-- <div class="centered-content">
        <h3 id="headinghead" class="heading">Yes, you can Join classes anytime!</h3>

    </div> -->
    <!-- Start Navbar Area -->
    <!-- <div class="headlogo">
        <center>
            <img class="headimg" src="assets/pictures/logoattached.png" width="110" alt="headers">
        </center>
    </div> -->
    <!-- <div class="navbar-area">
        <div class="main-responsive-nav">
            <div class="container">
                <div class="main-responsive-menu">
                    <div class="logo">
                        <a href="index">

                        </a>
                    </div>
                </div>
            </div>
        </div> -->

    <!-- <div class="main-navbar">
            <div class="container">
                <nav class="navbar navbar-expand-xl navbar-light">

                    <a class="navbar-brand " href="index">
                    

                    </a> -->
    <!-- 
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav"> -->


    <!-- <li class="nav-item">
                                <a href="creativetoddlers" class="nav-link">
                                    CREATIVE TODDLERS
                                    <i class='bx bx-chevron-down'></i>
                                </a>
                            </li> -->

    <!-- <li class="nav-item">
                                <a href="about" class="nav-link">
                                    ABOUT US
                                    <i class='bx bx-chevron-down'></i>
    </a>
    </li> 

    new menu
    dropdown
    <li class="sub-menu-item with-options" id="adults-menu">
                                <span href="#" data-dropdown="drop1" aria-controls="drop1" aria-expanded="true"
                                    class="dropdown">KIDS
                                    <i class='bx bx-chevron-down' id="arrow-k"></i> -->
    <!-- <span class="arrow-k">&#9660;</span> -->
    <!-- </span><br> -->
    <!-- <ul id="drop1" data-dropdown-content class="f-dropdown" aria-hidden="true">
                                    <li><a href="#">Long Term Program</a></li>
                                    <li><a href="#">Weekend workshops</a></li>
                                    <li><a href="d-art-labs">Art Labs</a></li>
                                    <li><a href="#">Private Art Party</a></li>
                                </ul> -->
    <!-- </li> -->
    <!-- dropdown end -->
    <!-- <li class="sub-menu-item with-options" id="adults-menu">
                                <span href="#" data-dropdown="drop2" aria-controls="drop1" aria-expanded="false"
                                    class="dropdown">ADULTS
                                    <i class='bx bx-chevron-down' id="arrow"></i>
                                </span><br>
                                <ul id="drop2" data-dropdown-content class="f-dropdown" aria-hidden="true">
                                    <li><a href="a-long-term-program">Long Term Program</a></li>
                                    <li><a href="#">Weekend workshops</a></li>
                                    <li><a href="a-art-cafe">Art Cafe</a></li>

                                </ul>
                            </li> -->



    <!-- <li class="nav-item">
                                <a href="career" class="nav-link">
                                    AWARD AND MEDIA
                                    <i class='bx bx-chevron-down'></i>
    </a>

    </li> -->

    <!-- 
                            <li class="nav-item">
                                <a href="career" class="nav-link">
                                    CAREER
                                    <i class='bx bx-chevron-down'></i>
    </a>

    </li> -->
    <!-- 
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    FAQs
                                     <i class='bx bx-chevron-down'></i>
                            </a> -->

    <!-- <li class="nav-item">
        <a href="contact" class="nav-link">
            CONTACT US
            <i class='bx bx-chevron-down'></i>

        </a>
    </li> -->

    <!-- <li class="nav-item">
                                <a href="arthr" class="nav-link">
                                    AN ART HOUR
                                    <i class='bx bx-chevron-down'></i>
                                </a>
                            </li> -->

    <!-- <li class="nav-item">
                                <a href="events" class="nav-link">
                                    EVENTS AND WORKSHOPS
                                    <i class='bx bx-chevron-down'></i>
                                </a>
                            </li> -->
    <!-- <li class="nav-item">
                                <a href="party" class="nav-link">
                                    AN ART PARTY
                                    <i class='bx bx-chevron-down'></i>
                                </a> -->







    </li>
    </ul>

    </div>
    </nav>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const artLabsMenu = document.getElementById('art-labs-menu');
            const artLabsSubmenu = document.getElementById('art-labs-submenu');

            // Add click event listener to Art Labs menu item
            artLabsMenu.addEventListener('click', function (event) {
                event.preventDefault(); // Prevent default link behavior
                event.stopPropagation(); // Prevent parent dropdown from closing
                artLabsSubmenu.classList.toggle('show'); // Toggle submenu visibility
            });

            // Close submenu when clicking outside
            document.addEventListener('click', function (event) {
                if (!artLabsMenu.contains(event.target)) {
                    artLabsSubmenu.classList.remove('show');
                }
            });
        });
    </script>
    <script>(function ($) {
            $(document).ready(function () {
                $('ul.dropdown-menu [data-toggle=dropdown]').on('click', function (event) {
                    event.preventDefault();
                    event.stopPropagation();
                    $(this).parent().siblings().removeClass('open');
                    $(this).parent().toggleClass('open');
                });
            });
        })(jQuery);
        /* http://www.bootply.com/nZaxpxfiXz */</script>






    </div>
    </div>

    </div>






</body>

</html>