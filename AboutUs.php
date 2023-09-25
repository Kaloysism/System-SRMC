<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./css/responsive.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/buttonjax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
          html{box-sizing:border-box}*,*:before,*:after{box-sizing:inherit}
          .fade {
            animation-name: fade;
            animation-duration: 1.5s;
          }
          .bgimg20 {
              background-position: center;
              background-size: cover;
              background-image: url("./images/thirdbg.png");
              min-height: 50%;
              opacity: 90%;}
              .bgimg-2 {
              background-position: center;
              background-repeat: no-repeat;
              background-image: url("./images/endbg.png");
              min-height: 50%;
              opacity: 90%;} 
            .tab {
            overflow: hidden;
            border: 1px solid #ccc;
            background-color: #f1f1f1;
            }
            .tab button {
            background-color: inherit;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 30px 35px;
            transition: 0.3s;
            font-size: 17px;
            }
            .tab button:hover {
            background-color: #ddd;
            }
            .tab button.active {
            background-color: #ccc;
            }
            .tabcontent {
            display: none;
            padding: 6px 12px;
            border: 1px solid #ccc;
            border-top: none;
            }
            .slideshow-container {
              display: flex;
              overflow: hidden;
              max-width: 1000px;
              margin: auto;
            }

            .slide {
              flex: 0 0 33.33%;
              text-align: center;
              padding: 20px;
              transition: 0.5s;
            }

            img {
              max-width: 100%;
              height: auto;
            }

            .prev, .next {
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
            .next {
            right: 0;
            border-radius: 3px 0 0 3px;
          }
          .prev {
            left: 0;
            border-radius: 3px 0 0 3px;
          }
          @keyframes fade {
            from {opacity: .4} 
            to {opacity: 1}
          }

          /* On smaller screens, decrease text size */
          @media only screen and (max-width: 300px) {
            .prev, .next,.text {font-size: 11px}
          }
          @media screen and (max-width: 768px) {
            .w3-col {width: 100%;}}
        </style>
    </head>  
    <body style="font-family: Stix Two text;">
    <header class="bgimg20 w3-display-container">
        <?php include 'header.html';?>
        
    </header>

    <div class="w3-center " style=" font-family: Stoke; font-size: medium;">
        <br>
                    <button id="defaultOpen" class="tablinks w3-bar-item w3-button w3-darkred" style="margin-right: 50px;" onclick="openCity(event, 'About')">About Us</button>
                    <button class="tablinks w3-bar-item w3-button w3-darkred" style="margin-right: 50px;" onclick="openCity(event, 'Rule')">Rules</button>
                    <button class="tablinks w3-bar-item w3-button w3-darkred" style="margin-right: 50px;" onclick="openCity(event, 'Guide')">Guidelines</button>
                    <button class="tablinks w3-bar-item w3-button w3-darkred" style="margin-right: 50px;" onclick="openCity(event, 'MisVis')">Mission/Vision</button>       
            </div>
            <div style="margin: 65px;">   
                <div id="About" class="tabcontent">
                <div class="slideshow-container">
  <div class="slide">
    <h2>Page 1</h2>
    <img src="./images/v62_1345.png" style="width:100%" alt="Image 1">
  </div>
  <div class="slide">
    <h2>Page 2</h2>
    <img src="./images/v62_1345.png" style="width:100%" alt="Image 2">
  </div>

  <div class="slide">
    <h2>Page 3</h2>
    <img src="./images/v62_1345.png" style="width:100%" alt="Image 3">
  </div>

  <div class="slide">
    <h2>Page 4</h2>
    <img src="./images/v62_1345.png" style="width:100%" alt="Image 4">
  </div>

  <div class="slide">
    <h2>Page 5</h2>
    <img src="./images/v62_1345.png" style="width:100%" alt="Image 5">
  </div>
  <a class="prev" onclick="changeSlide(-1)">❮</a>
<a class="next" onclick="changeSlide(1)">❯</a>

</div>

                <p>At Sto. Rosario Multi-specialty Clinic, we firmly believe that achieving true wellness is not just about treating the symptoms of an illness but rather adopting a comprehensive and holistic approach to healthcare. Our dedicated team of healthcare professionals, who are not only highly skilled but also deeply compassionate, are committed to providing individualized care and unwavering support to every patient who places their trust in us.               
              <br> <br> From the moment you step into our clinic, you will experience a warm and welcoming
environment where your health and vitality become our topmost priority. We understand that 
each patient is unique, and that's why we tailor our treatment plans to suit your specific needs 
and circumstances. Whether it's preventive care to keep you in excellent health or specialized 
treatments to address specific medical conditions, our goal is to ensure you receive 
the best possible care. <br><br>
              Our state-of-the-art facilities are equipped with the latest medical advancements, enabling us 
to deliver cutting-edge treatments and services. However, what truly sets us apart is our 
patient-eccentric ethos, where we place you at the core of every decision we make. We listen to
your concerns, involve you in the decision-making process, and create a collaborative approach 
to your healthcare journey.</p>
                </div>
                <div id="Rule" class="tabcontent">
                <h1>Sto. Rosario Multi-specialty Clinic Website Rules:</h1>
                  <ol>
                    <li>
                      <h3>Respectful Communication:</h3>
                      <ul>
                        <li>All interactions, comments, and messages should be respectful and professional.</li>
                        <li>Avoid offensive language, discriminatory remarks, or personal attacks.</li>
                      </ul>
                    </li>
                    <li>
                      <h3>Accurate Information:</h3>
                      <ul>
                        <li>Ensure that all shared information, medical content, and announcements are accurate and up-to-date.</li>
                        <li>Do not provide medical advice in the comments; direct users to consult with medical professionals.</li>
                      </ul>
                    </li>
                    <li>
                      <h3>Privacy Protection:</h3>
                      <ul>
                        <li>Do not share personal or sensitive information in public discussions or comments.</li>
                        <li>Respect the privacy of others and adhere to data protection regulations.</li>
                      </ul>
                    </li>
                    <li>
                      <h3>Appropriate Content:</h3>
                      <ul>
                        <li>Do not share or post content that is explicit, offensive, or inappropriate for a medical clinic's website.</li>
                        <li>Images and media should be relevant and respectful.</li>
                      </ul>
                    </li>
                    <li>
                      <h3>Constructive Feedback:</h3>
                      <ul>
                        <li>Provide feedback, suggestions, and critiques in a constructive manner to help improve the website and services.</li>
                      </ul>
                    </li>
                    <li>
                      <h3>Admin Authority:</h3>
                      <ul>
                        <li>Follow the instructions and guidelines provided by website administrators.</li>
                        <li>Admins reserve the right to remove or modify content that violates these rules without prior notice.</li>
                      </ul>
                    </li>
                    <li>
                      <h3>User Responsibility:</h3>
                      <ul>
                        <li>Users are responsible for their own interactions, content, and conduct on the website.</li>
                        <li>Consequences of violating these rules may include warnings, content removal, or account suspension.</li>
                      </ul>
                    </li>
                  </ol>
                  <br><br>
                  <p>By adhering to these rules, we create a positive and informative online environment for all visitors to the Sto. Rosario Multi-specialty Clinic website.</p>
                </div>
                <div id="Guide" class="tabcontent">
                <h1>Online Account Registration Guidelines:</h1>
                  <ol>
                    <li>
                      <h3>Visit the Clinic Website:</h3>
                      <ul>
                        <li>Access the official clinic website at [website URL].</li>
                        <li>Navigate to the "Register" or "Create Account" section.</li>
                      </ul>
                    </li>
                    <li>
                      <h3>Account Creation:</h3>
                      <ul>
                        <li>Fill out the required registration form with accurate personal information.</li>
                        <li>Create a strong password that includes a combination of letters, numbers, and special characters.</li>
                      </ul>
                    </li>
                    <li>
                      <h3>Account Verification:</h3>
                      <ul>
                        <li>Check your email for a verification link sent to the provided email address.</li>
                        <li>Click on the link to verify your email and activate your account.</li>
                      </ul>
                    </li>
                    <li>
                      <h3>Log In to Your Account:</h3>
                      <ul>
                        <li>Return to the clinic website and log in using your email and password.</li>
                      </ul>
                    </li>
                    <li>
                      <h3>Appointment Booking:</h3>
                      <ul>
                        <li>After logging in, select the "Book Appointment" option from your account dashboard.</li>
                        <li>Choose your preferred date, time, and specialist from the available options.</li>
                      </ul>
                    </li>
                    <li>
                      <h3>Confirmation and Reminders:</h3>
                      <ul>
                        <li>You will receive a confirmation email and/or SMS with the details of your appointment.</li>
                        <li>A reminder will be sent to you a day before the scheduled appointment.</li>
                      </ul>
                    </li>
                    <li>
                      <h3>Cancellation or Rescheduling:</h3>
                      <ul>
                        <li>If you need to cancel or reschedule your appointment, log in to your account and modify the booking accordingly.</li>
                        <li>Please make any changes at least 24 hours before the appointment time.</li>
                      </ul>
                    </li>
                    <li>
                      <h3>"No Appointment, No Walk-In" Policy:</h3>
                      <ul>
                        <li>Walk-in appointments are not accepted to ensure a well-organized and efficient clinic environment.</li>
                        <li>Only registered and appointment-booked patients will be attended to.</li>
                      </ul>
                    </li>
                    <li>
                      <h3>Arrival and Check-In:</h3>
                      <ul>
                        <li>Arrive at the clinic on time for your appointment.</li>
                        <li>Use the provided QR code or reference number to check in at the reception desk.</li>
                      </ul>
                    </li>
                    <li>
                      <h3>Patient Information and Health History:</h3>
                      <ul>
                        <li>Complete any required pre-appointment forms or health history questionnaires online before your visit.</li>
                      </ul>
                    </li>
                    <li>
                      <h3>Medical Records and Follow-Up:</h3>
                      <ul>
                        <li>If you are a returning patient, your medical records will be accessible through your online account.</li>
                        <li>Follow-up appointments can be scheduled through the same online system.</li>
                      </ul>
                    </li>
                  </ol>
                </div>
                <div id="MisVis" class="tabcontent">
                <h1 class="w3-center">Mission</h1>
                <p>Our mission is to provide cost-effective and quality healthcare services that prioritize compassion and excellence. We are dedicated to making healthcare accessible to all individuals, maintaining the highest standards of care, and creating a compassionate and healing environment for our patients. Through innovation and collaboration, we strive to transform the healthcare landscape and improve the well-being of communities we serve.</p>
                <h1 class="w3-center">Vision</h1>
                <p>Our vision is to be the most sought-after and trusted medical clinic that provides holistic care to our community. We aim to achieve this by adopting a patient-centered approach, striving for excellence and innovation, actively engaging with the community, offering a comprehensive continuum of care, and building a trusted reputation. By realizing this vision, we envision a healthier and happier community that thrives on well-rounded and comprehensive healthcare.</p>
                </div>
          </div>    
    <br>

    <div class="bgimg-2 w3-display-container"> </div>
    <footer>
    <?php include 'footer.html';?>
    </footer>     
    
    <script>
    function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
    }

    document.getElementById("defaultOpen").click();


    let currentSlide = 0;
  const slides = document.querySelectorAll('.slide');

  function showSlides(n) {
    slides.forEach(slide => slide.style.display = 'none');
    for (let i = n; i < n + 3; i++) {
      if (slides[i]) {
        slides[i].style.display = 'block';
      }
    }
  }

  function changeSlide(n) {
    currentSlide = (currentSlide + n + 5) % 5;
    showSlides(currentSlide);
  }

  showSlides(currentSlide);
 
    </script>
    </body>             
</html> 
    
