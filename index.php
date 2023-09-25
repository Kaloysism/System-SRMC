<?php
include_once 'config.php';
$msg = "";

if (isset($_GET['verification'])) {
  if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM user_tb WHERE Code='{$_GET['verification']}'")) > 0) {
    $query = mysqli_query($conn, "UPDATE user_tb SET Code='' WHERE Code='{$_GET['verification']}'");

    if ($query) {
      $msg = '<div class="w3-container w3-card-8 w3-xlarge" style="background-color:green; color:white; font-family:STIX Two Text ">Account Verification has been Succcessfully Completed! Please Proceed in Login page</div>';
    }
  } else {
    echo '<script>';
    echo 'alert("Your Account Has Been Verified, Proceed To the Login")';
    echo 'window.location = "Login.php";'; // Redirect to Login.php
    echo '</script>';
  }
}
include 'header.html';
?>
<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./css/responsive.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Sulphur+Point&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=STIX+Two+Text&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Texturina&display=swap" rel="stylesheet" />
  <link href="./css/main.css" rel="stylesheet" />
  <meta charset="UTF-8">
  <title>SRMC</title>
  <style>
    * {
      box-sizing: border-box;
    }

    html {
      box-sizing: border-box
    }

    *,
    *:before,
    *:after {
      box-sizing: inherit
    }

    body {
      font-size: 14px;
    }

    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: "Raleway", sans-serif
    }

    body,
    html {
      height: 100%;
      line-height: 1.8;
    }

    .bgimg-1 {
      background-position: center;
      background-size: cover;
      background-image: url("./images/v62_1381.png");
      min-height: 100%;
      opacity: 80%;
    }

    .w3-bar .w3-button {
      padding: 16px;
    }

    /* Remove margins from "page content" on small screens */
    @media only screen and (max-width: 600px) {
      #main {
        margin-left: 0
      }
    }

    .slide {
      display: none;
    }

    .cen {
      margin: auto;
      width: 90%;
      border: 2px solid #73AD21;
      padding: 5px;
    }

    .mySlides {
      display: none
    }

    img {
      vertical-align: middle;
    }

    /* Slideshow container */
    .slideshow-container {
      max-width: 1000px;
      position: relative;
      margin: auto;
    }

    /* Next & previous buttons */
    .prev,
    .next {
      cursor: pointer;
      position: absolute;
      top: 50%;
      width: auto;
      padding: 16px;
      margin-top: -22px;
      color: white;
      font-weight: bold;
      font-size: 18px;
      transition: 0.6s ease;
      border-radius: 0 3px 3px 0;
      user-select: none;
    }

    /* Position the "next button" to the right */
    .next {
      right: 0;
      border-radius: 3px 0 0 3px;
    }

    .prev {
      left: 0;
      border-radius: 3px 0 0 3px;
    }

    /* On hover, add a black background color with a little bit see-through */
    .prev:hover,
    .next:hover {
      background-color: rgba(194, 17, 17, 0.7);
    }

    /* Caption text */
    .text {
      color: #A3001C;
      font-size: 15px;
      padding: 8px 12px;
      position: absolute;
      bottom: 8px;
      width: 100%;
      text-align: center;
    }

    /* Number text (1/3 etc) */
    .numbertext {
      color: #A3001C;
      font-size: 12px;
      padding: 8px 12px;
      position: absolute;
      top: 0;
    }

    /* The dots/bullets/indicators */
    .dot {
      cursor: pointer;
      height: 15px;
      width: 15px;
      margin: 0 2px;
      background-color: #bbb;
      border-radius: 50%;
      display: inline-block;
      transition: background-color 0.6s ease;
    }

    .active,
    .dot:hover {
      background-color: #a3001b8c;
    }

    /* Fading animation */
    .fade {
      animation-name: fade;
      animation-duration: 1.5s;
    }

    @keyframes fade {
      from {
        opacity: .4
      }

      to {
        opacity: 1
      }
    }

    /* On smaller screens, decrease text size */
    @media only screen and (max-width: 300px) {

      .prev,
      .next,
      .text {
        font-size: 11px
      }
    }

    @media screen and (max-width: 768px) {
      .w3-col {
        width: 100%;
      }
    }
  </style>
</head>

<body>
  <!-- Announcement section -->
  <header class="bgimg-1 w3-display-container w3-center" id="home">
    <div class="w3-display-middle w3-text-red w3-image" style="padding:48px">
      <span class="w3-jumbo w3-text-red w3-hide-small">Announcents</span>
      <?php echo $msg; ?><br>
      <div class="slideshow-container w3-image w2-round w3-right">
        <div class="mySlides fade">
          <div class="numbertext w3-image">1 / 3</div>
          <img src="./images/Announcement.png" style="width:100%" class="w3-image w2-round">
          <div class="text">Caption Text</div>
        </div>
        <div class="mySlides fade">
          <div class="numbertext w3-image">2 / 3</div>
          <video width="640" height="360" controls>
            <source src="./images/Vid 1.mp4" type="video/mp4">
            Your browser does not support the video tag.
            <div class="text">Caption Two</div>
        </div>
        <div class="mySlides fade w3-image">
          <div class="numbertext">3 / 3</div>
          <img src="./images/v62_1345.png" style="width:100%" class="w3-image w2-round">
          <div class="text">Caption Three</div>
        </div>
        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>
      </div>
      <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
      </div>
    </div>
    </div>
  </header>

  <!-- Services Section -->
  <div class="w3-container" style="margin: 40px;">
    <h3 class="w3-center tex">Feature Services</h3>
    <div class="w3-row-padding">
      <div class="w3-col 7 m2 w3-margin-bottom">
        <div class="w3-card">
          <img src="./images/OnlineReg.png" style="width:100%" alt="Registration" class="w3-image w2-round">
          <div class="w3-container">
            <h4 class="w3-center" style="font-family: Stix Two text;">Online Registration</h4>
          </div>
        </div>
      </div>
      <div class="w3-col 7 m2 w3-margin-bottom">
        <div class="w3-card">
          <img src="./images/AppointmentSched.png" style="width:100%" alt=">Appointment Scheduling" class="w3-image w2-round">
          <div class="w3-container">
            <h4 class="w3-center" style="font-family: Stix Two text;">Appointment Scheduling</h4>
          </div>
        </div>
      </div>
      <div class="w3-col 7 m2 w3-margin-bottom">
        <div class="w3-card">
          <img src="./images/MobileServ.png" style="width:100%" alt="Mobile Application" class="w3-image w2-round">
          <div class="w3-container">
            <h4 class="w3-center" style="font-family: Stix Two text;">Mobile Application</h4>
          </div>
        </div>
      </div>
      <div class="w3-col 7 m2 w3-margin-bottom">
        <div class="w3-card">
          <img src="./images/AvailableVax.png" style="width:100%" alt="Vaccinations" class="w3-image w2-round">
          <div class="w3-container">
            <h4 class="w3-center" style="font-family: Stix Two text;">Available Vaccinations</h4>
          </div>
        </div>
      </div>
      <div class="w3-col 7 m2 w3-margin-bottom">
        <div class="w3-card">
          <img src="./images/OnlinePay.png" style="width:100%" alt=">Appointment Scheduling" class="w3-image w2-round">
          <div class="w3-container">
            <h4 class="w3-center" style="font-family: Stix Two text;">Online Payment</h4>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Clinic Descrcription -->
  <div class="w3-container w3-lightred" style="padding:12px 16px; background-color:#c97180d0; margin: 40px;" id="about">
    <div class="w3-row-padding w3-center" style="margin-top:16px">
      <div class="w3-col m6">
        <img src="./images/Profile.png" alt="v62-1357" width="450" height="400" class="w3-image w2-round">
      </div>
      <div class="w3-col m6">
        <p class="w3-meduim  w3-left" style="text-align:left;font-family: Stix Two text;"><b>At Sto. Rosario Multispecialty Clinic, we believes that comprehensive healthcare goes beyond treating symptoms—it's about fostering a holistic approach to wellness.
            Our dedicated team of experienced healthcare professionals is committed to providing personalized care and support to every patient who walks through our doors.
            From preventive care to specialized treatments, we strive to create a warm and welcoming environment where your health and well-being are our top priorities.
            With state-of-the-art facilities and a patient-centered approach, we are here to guide you on your journey toward optimal health, empowering you to live your life to the fullest.
            Trust us to be your partner in healthcare, as we work together to nurture your health and empower you to lead a happier, healthier life.</b></p>
      </div>
    </div>
  </div>

  <!-- Clinic Contact details -->
  <div style="margin: 40px;">
    <div class="w3-row-padding w3-white" id="about">
      <div class="w3-half">
        <br>
        <img src="./images/v62_1345.png" class="w3-image w3-center" style="width: 900px;; height: 360px;">
      </div>
      <div class="w3-half">
        <div class="w3-row-padding w3-large w3-left" style="margin:20px 0">
          <h3 class="w3-darkred">Contact Us</h3>
          <div class="w3-col">
            <h3 style="text-align:left;"><i class="fa fa-map-marker w3-xxlarge" style="color:#A3001C"></i> Address : Unit 4, 278 Sto. Sosario St. Brgy Plainview,Mandaluyong City
          </div>
          </h3>
          <div class="w3-col">
            <h3 style="text-align:left;"><i class="fa fa-phone w3-xxlarge" style="color:#A3001C"></i> Phone: +00 151515
          </div>
          </h3>
          <div class="w3-col">
            <h3 style="text-align:left;"><i class="fa fa-envelope w3-xxlarge" style="color:#A3001C"></i> Email: mail@mail.com
          </div>
          </h3>
          <div class="w3-col">
            <h3 style="text-align:left;"><i class="fa fa-clock-o w3-xxlarge" style="color:#A3001C"></i> Clinic Hours : Monday to Sunday 9:00 am to 7:00 pm
          </div>
          </h3>
        </div>
      </div>
    </div>
  </div>

  <?php include 'footer.html'; ?>

  <script>
    window.onload = function() {
      if (window.history.length == 1) {
        window.location.href = "login.php";
      }
    };
    let slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("dot");
      if (n > slides.length) {
        slideIndex = 1
      }
      if (n < 1) {
        slideIndex = slides.length
      }
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active";
    }
  </script>
</body>

</html>