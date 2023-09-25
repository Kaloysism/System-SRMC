<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Sulphur+Point&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=STIX+Two+Text&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Texturina&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Sto. Rosario Multispecialty Clinic</title>
<style>
body {margin:0;font-family:Arial}

.topnav {
  overflow: hidden;
  background-color: #A3001C;
}

.topnav a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}


.topnav .icon {
  display: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 17px;    
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.topnav a:hover, .dropdown:hover .dropbtn {
  background-color: #ddd;
  color: black;
}

.dropdown-content a:hover {
  background-color: #A3001C;
  color: white;
}

.dropdown:hover .dropdown-content {
  display: block;
}
.topnav a.split {
  float: right;
}
.topnav a.active{
background-color: #ddd;
color: black;
}

@media screen and (max-width: 700px) {
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 700px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
}
</style>
</head>
<body>
<div class="w3-bar  w3-darkred w3-card" align="center">
                <div class="w3-bar w3-white">
                    <a href="index.php" class="w3-left w3-bar-item w3-button w3-wide w3-hide-small"><img src="./images/v62_1412.png" width="110" height="100" alt="Logo">
                    <span class="w3-large w3-hide-small" style="font-family: Texturina; color:#A3001C; font-size: 25px;"><b><i>Sto. Rosario Multispecialty Clinic</i></b></span>
                    </a>
                   <br><br>
                </div>
<div class="topnav w3-hide-small" id="myTopnav">
  <a href="home.php" class="tablink"><i class="fa fa-home"></i> Home</a>
  <a href="booking.php" class="tablink"><i class="fa fa-calendar"></i> Bookings</a>
  <a href="Medical.php" class="tablink"><i class="fa fa-medkit"></i> Medical Records</a>
  <a href="#contact" class="tablink"><i class="fa fa-usd"></i>  Transactions</a>
  <div class="dropdown">
    <button class="dropbtn" class="tablink"><i class="fa fa-cogs"></i>Settings 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="UserAcc.php" class="tablink">Acc. Profile</a>
      <a href="#" class="tablink">Patient Profile</a>
      <a href="forgot.php" class="tablink">Change Password</a>
    </div>
  </div> 
  <a href="logout.php" class="split"><i class="fa fa-sign-out"></i>Logout</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
// Get all tab links
  var tablinks = document.querySelectorAll(".tablink");

  // Add click event listeners to each tab link
  tablinks.forEach(function(tablink) {
    tablink.addEventListener("click", function() {
      // Remove active class from all tab links
      tablinks.forEach(function(link) {
        link.classList.remove("active");
      });

      // Add active class to the clicked tab link
      tablink.classList.add("active");
    });
  });
</script>

</body>
</html>
