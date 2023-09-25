<!DOCTYPE html>
<html>
<head>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 140px;background:  lightcoral;}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
#main {margin-left: 120px}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}
</style>
</head>
<body style="background-color: #ddd;">

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-center">
  <!-- Avatar image in top left corner -->
  <img src="./v62_1412.png" style="width:100%; background-color:azure" alt="Logo">
  <a href="#" class="w3-bar-item w3-button w3-padding-small w3-hover-black">
    <i class="fa fa-dashboard w3-xlarge"></i>
    <p>Dashboard</p>
  </a>
  <a href="#my-appointment" class="w3-bar-item w3-button w3-padding-small w3-hover-black">
    <i class="fa fa-calendar-check-o w3-xlarge"></i>
    <p>My Appointment</p>
  </a>
  <a href="#patients-records" class="w3-bar-item w3-button w3-padding-small w3-hover-black">
    <i class="fa fa-user-circle-o w3-xlarge"></i>
    <p>Patients Records</p>
  </a>
  <a href="#prescriptions" class="w3-bar-item w3-button w3-padding-small w3-hover-black">
    <i class="fa fa-file-text-o w3-xlarge"></i>
    <p>Medical Records</p>
  </a>
  <a href="#med-supply" class="w3-bar-item w3-button w3-padding-small w3-hover-black">
    <i class="fa fa-medkit w3-xlarge"></i>
    <p>Med Supply</p>
  </a>
  <a href="#settings" class="w3-bar-item w3-button w3-padding-small w3-hover-black">
    <i class="fa fa-cog w3-xlarge"></i>
    <p>Settings</p>
  </a>
</nav>


</body>
</html>
