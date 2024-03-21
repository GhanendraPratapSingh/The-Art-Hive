<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.trpentertainment.com/mpcg by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Aug 2021 04:08:39 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>

  <!-- <link rel="stylesheet" href="./assets/css/slider/style.css"> -->
  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">-->


  <!--<script src='jquery-3.2.1.min.js' type='text/javascript'></script>-->
  <!-- <script src='assets/css/slider/select2.min.js' type='text/javascript'></script> -->

  <link href='assets/css/slider/select2.min.css' rel='stylesheet' type='text/css'>

  <style type="text/css">
    body {
      background: url("./images/");
      background-position: top;
      background-repeat: no-repeat;
      background-size: cover;




    }

    #slider {
      overflow: hidden;
    }

    #slider figure {
      position: relative;
      width: 500%;
      margin: 0;
      left: 0;
      animation: 20s slider infinite;
    }

    #slider figure img {
      width: 20%;
      float: left;
    }

    @keyframes slider {
      0% {
        left: 0;
      }

      20% {
        left: 0;
      }

      25% {
        left: -100%;
      }

      45% {
        left: -100%;
      }

      50% {
        left: -200%;
      }

      70% {
        left: -200%;
      }

      75% {
        left: -300%;
      }

      95% {
        left: -300%;
      }

      100% {
        left: -400%;
      }
    }
  </style>


  <style>
    .frm ::placeholder {
      color: black;
      font-weight: bold;

    }





    .swiper-container {
      width: 100%;
      height: 100%;

    }



    .swiper-slide {
      position: relative;
      text-align: center;
      font-size: 18px;
      background: linear-gradient(to right, rgb(232, 236, 236), rgb(224, 220, 221));
      /* Center slide text vertically */
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;
    }

    img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      background-position: center;
      background-size: cover;
    }

    .swipe-wrapper {
      position: absolute;
    }

    #sub {
      background-color: #cd0257 !important;
      border-color: transparent;

      border-radius: 2%;
      text-align: center;
      animation: radial-pulse 1s infinite;
    }



    .swiper-wrapper .btn {

      position: absolute;

      font-family: 'Times New Roman', Times, serif !important;
      color: black;
      font-size: 25px;
      font-weight: 600;
      padding: 12px 24px;
      border: none;
      cursor: pointer;
      border-radius: 5px;
      top: 0;
      right: 0;
      background-color: transparent;



    }


    @media only screen and (max-width: 600px) {


      .swiper-wrapper .btn {
        padding-left: 180px;
      }
    }

    @media only screen and (max-width: 400px) {

      .swiper-wrapper .btn {
        padding-left: 180px;
      }
    }
  </style>


  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <!-- Swiper -->
</head>

<body>

  <div class="swiper-container laptop" id="slider">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img alt="sliderimage1" id="image1"
          src="assets/img/the art hive website banner1_23.07.22.jpg" /></div>
      <div class="swiper-slide"><img alt="sliderimage1" id="image1"
          src="assets/img/the art hive website banner2_23.07.22.jpg" /></div>
      <div class="swiper-slide"><img alt="sliderimage1" id="image1"
          src="assets/img/the art hive website banner3_23.07.22.jpg" /></div>
      <!--<div class="swiper-button-prev"></div>-->
    </div>

    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
    <!-- Add Arrows -->

  </div>
  <div class="swiper-container mobile" id="slider">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img alt="sliderimage1" id="image1"
          src="assets/img/the art hive mobile banner1_23.07.22.jpg" /></div>
      <div class="swiper-slide"><img alt="sliderimage1" id="image1"
          src="assets/img/the art hive mobile banner2_23.07.22.jpg" /></div>
      <div class="swiper-slide"><img alt="sliderimage1" id="image1"
          src="assets/img/the art hive mobile banner3_23.07.22.jpg" /></div>

      <!--<div class="swiper-pagination"></div>-->

    </div>
    <!-- Add Pagination -->

    <!-- Add Arrows -->
    <!-- <div class="swiper-button-next"></div>-->
    <!--<div class="swiper-button-prev"></div> -->
  </div>

  <!-- Swiper JS -->

  <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <script>
    var swiper = new Swiper('.swiper-container', {
      spaceBetween: 30,
      centeredSlides: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  </script>







</body>

<!-- Mirrored from www.trpentertainment.com/mpcg by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Aug 2021 04:09:47 GMT -->

</html>