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
    <header>
        <?php include 'header.html';?>
    </header>
    <h1 class="w3-center tex">Our Clinic Doctors</h1>
    <div class="w3-center">
       <a href="#" class="w3-center w3-button w3-darkred"style="font-family: Stix Two text;"> Check their schedule</a>
    </div>
    <br>
    <div style="margin-left: 100px; margin-right: 100px;">
          <div class="w3-row-padding">
            <div class="w3-quarter w3-margin-bottom">
                <div class="w3-center">
                    <img src="./images/Ruth_Ann.png" width="200" height="250" class="w3-image w2-round" onclick="onClick(this)" alt="Ruth Ann V. Buenaventura, MD<br>Family Medicine">
                    <div class="w3-container">
                        <h6 class="w3-center" style="font-family: Stix Two text;">Ruth Ann V. Buenaventura, MD <br> Family Medicine</h6>
                    </div>
                </div>
            </div>
            <div class="w3-quarter w3-margin-bottom">
              <div  class="w3-center">
                <img src="./images/Rem S. Bautista.png"  width="200" height="250" onclick="onClick(this)" alt="Rem S. Bautista, MD <br> Family Medicine" class="w3-image w2-round">
                <div class="w3-container">
                    <h6 class="w3-center" style="font-family: Stix Two text;">Rem S. Bautista, MD<br>Family Medicine</h6>   
                </div>
              </div>
            </div>
            <div class="w3-quarter w3-margin-bottom">
              <div  class="w3-center">
                <img src="./images/Jose Paulo.png"  width="200" height="250" onclick="onClick(this)" alt="Jose Paolo M. De Castro, FPAFP, MMHoA <br> Family Medicine" class="w3-image w2-round">
                <div class="w3-container">
                  <h7 class="w3-center" style="font-family: Stix Two text;">Jose Paolo M. De Castro, FPAFP<br>Family Medicine</h7> 
                </div>
              </div>
            </div>
            <div class="w3-quarter w3-margin-bottom">
              <div  class="w3-center">
                <img src="./images/Nickilor.png"  width="200" height="250" onclick="onClick(this)" alt="Nickilor O. Bautista, MD <br> Family Medicine" class="w3-image w2-round">
                <div class="w3-container">
                  <h6 class="w3-center" style="font-family: Stix Two text;">Nickilor O. Bautista, MD<br>Family Medicine</h6>
                </div>
              </div>
            </div>
            <div class="w3-quarter w3-margin-bottom">
              <div class="w3-center">
                <img src="./images/Christian John.png"  width="200" height="250" onclick="onClick(this)" alt="Christian John U. Riparip, MD <br> Family Medicine" class="w3-image w2-round">
                <div class="w3-container">
                  <h6 class="w3-center" style="font-family: Stix Two text;">Christian John U. Riparip, MD<br>Family Medicine</h6>
                </div>
              </div>
            </div>
            <div class="w3-quarter w3-margin-bottom">
              <div  class="w3-center">
                <img src="./images/Rhey kanneth.png"  width="200" height="250" onclick="onClick(this)" alt="Rhey Kenneth De Torres, MD <br> Family Medicine" class="w3-image w2-round">
                <div class="w3-container">
                  <h6 class="w3-center" style="font-family: Stix Two text;">Rhey Kenneth De Torres, MD<br>Family Medicine</h6> 
                </div>
              </div>
            </div>
            <div class="w3-quarter w3-margin-bottom">
              <div  class="w3-center">
                <img src="./images/Cecil Leyson.png"  width="200" height="250" onclick="onClick(this)" alt="Cecil Leyson, MD <br> Surgery" class="w3-image w2-round">
                <div class="w3-container">
                  <h6 class="w3-center" style="font-family: Stix Two text;">Cecil Leyson, MD<br>Surgery</h6>
                </div>
              </div>
            </div>
            <div class="w3-quarter w3-margin-bottom">
              <div  class="w3-center">
                <img src="./images/Grace A. Calvarido.png"  width="200" height="250" onclick="onClick(this)" alt="Grace A Clavarido, MD <br> Dermatology" class="w3-image w2-round">
                <div class="w3-container">
                  <h6 class="w3-center" style="font-family: Stix Two text;">Grace A Clavarido, MD<br>Dermatology</h6> 
                </div>
              </div>
            </div>
          </div>
        </div>

    <footer>
    <?php include 'footer.html';?>
    </footer>    
     
    <div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
    <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Close Modal Image">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
        <img id="img01" class="w3-image">
        <p id="caption" class="w3-opacity w3-large"></p>
    </div>
    </div>

    <script>
    function onClick(element) {
    document.getElementById("img01").src = element.src;
    document.getElementById("modal01").style.display = "block";
    var captionText = document.getElementById("caption");
    captionText.innerHTML = element.alt;
    }
    </script>
    </body>             
</html>