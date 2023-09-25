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
          html{box-sizing:border-box}*,*:before,*:after{box-sizing:inherit}
          .fade {
            animation-name: fade;
            animation-duration: 1.5s;
          }
          .bgimg-1 {
              background-position: center;
              background-size: cover;
              background-image: url("./images/secondbg.png");
              min-height: 50%;
              opacity: 90%;} 
          .bgimg-2 {
              background-repeat: no-repeat;
              background-position: center;
              background-image: url("./images/endbg.png");
              min-height: 50%;
              opacity: 90%;} 
              .accordion {
                background-color: #AF3E4D;
                color: #000;
                cursor: pointer;
                padding: 18px;
                width: 100%;
                border: none;
                text-align: left;
                outline: none;
                font-size: 15px;
                transition: 0.4s;
              }

              .active, .accordion:hover {
                background-color: #b1b1b1; 
              }

              .panel {
                padding: 0 18px;
                display: none;
                background-color: white;
                overflow: hidden;
              }
              .plus-minus {
                float: right;
                font-size: large;
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
    <body>
    
    <header class="bgimg-1 w3-display-container">
    <?php include 'header.html';?> 
       <h1 class="w3-center tex" style="font-family: Stix Two text; justify-content: center; display: flex; align-items: center; padding:60px">Our Clinic Doctors</h1>        
    </header>
    <br>

    <div style="margin-left: 250px; margin-right: 300px;">

    <div  class="accordion"><b>Aesthetics and Dermatology</b><span class="plus-minus">+</span></div>
    <div class="panel">
        <p>Aesthetics and dermatology are interconnected fields. Dermatology focuses on diagnosing and treating skin, hair, 
and nail conditions. Aesthetics aims to enhance appearance through procedures like Botox, fillers, and laser treatments. 
Cosmetic dermatology combines both approaches to address medical skin issues and improve visual appeal. It's important 
to consult qualified professionals for personalized advice and treatments.</p>
    </div>
    <br>

    <div  class="accordion"><b>Adult and Pediatric Medicine</b><span class="plus-minus">+</span></div>
    <div class="panel">
        <p>Adult and pediatric medicine are distinct branches of healthcare. Adult medicine specializes in diagnosing 
and treating illnesses in adults, while pediatric medicine focuses on the health of infants, children, and adolescents. 
Both areas ensure tailored medical care for different age groups.</p>
    </div>
    <br>

    <div  class="accordion"><b>Minor Surgeries</b><span class="plus-minus">+</span></div>
    <div class="panel">
        <p>Minor surgeries are minimally invasive medical procedures that typically don't require extensive incisions or anesthesia. 
They're performed to diagnose, treat, or remove small issues such as cysts, moles, and warts. These procedures are often 
outpatient and have shorter recovery times compared to major surgeries.</p>
    </div>
    <br>

    <div  class="accordion"><b>Vaccination (Non-COVID)</b><span class="plus-minus">+</span></div>
    <div class="panel">
        <p>Our services encompass a diverse range of vaccinations, excluding COVID vaccines. We provide immunizations to 
safeguard against various diseases, promoting individual and public health.</p>
    </div>
    <br>

    <div  class="accordion"><b>Wellness Check-up</b><span class="plus-minus">+</span></div>
    <div class="panel">
        <p>A wellness check-up is a routine medical examination focused on preventive care and overall health. It involves assessing 
vital signs, reviewing medical history, and conducting screenings to detect early signs of potential health issues. 
Wellness check-ups play a crucial role in maintaining well-being and addressing health concerns proactively.</p>
    </div>
    </div>

    <br>
    <br>

    <div class="bgimg-2 w3-display-container"> </div>
    
    <footer>
    <?php include 'footer.html';?>
    </footer>     

    <script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
      acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        var plusMinus = this.querySelector('.plus-minus');
        if (panel.style.display === "block") {
          panel.style.display = "none";
          plusMinus.textContent = "+";
        } else {
          panel.style.display = "block";
          plusMinus.textContent = "-";
        }
      });
    }
    </script>

    </body>             
</html> 
    
