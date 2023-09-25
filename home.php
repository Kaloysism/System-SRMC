<?php
include 'config.php';
include('verify_token.php');

?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta charset="UTF-8">
    <title>Welcome</title>
    <style>
        * {
            box-sizing: border-box;
        }

        .colored-cards {
            display: flex;
            justify-content: space-between;
            margin: 20px 0;
        }

        .colored-card {
            flex: 0 0 calc(33.33% - 20px);
            /* Adjust the width as needed */
            padding: 20px;
            text-align: left;
            color: white;
        }
    </style>
</head>

<body>
    <?php include 'usernavi.php'; ?>
    <div style="margin-left: 250px; margin-right: 300px;">
        <h1>Welcome, <?php echo $_SESSION['full_name']; ?></h1>
        <p>This is your patient dashboard. You can access your profile, appointments, medical records, and settings from the sidebar menu on the left.</p>
    </div>
    <hr>
    <div class="container-fluid bg-white">
        <div class="container text-center">
            <div class="row align-items-center">
                <script>
                    function updateTime() {
                        var now = new Date();
                        var hours = now.getHours();
                        var minutes = now.getMinutes();
                        var ampm = (hours >= 12) ? "PM" : "AM";
                        hours = (hours > 12) ? hours - 12 : hours;
                        hours = (hours == 0) ? 12 : hours;
                        minutes = (minutes < 10) ? "0" + minutes : minutes;
                        var timeString = hours + ":" + minutes + " " + ampm;
                        document.getElementById("time").innerHTML = timeString;
                    }
                    setInterval(updateTime, 1000);
                </script>
                <?php
                echo "<h2><center> Today is " . date("l") . "-" . date("Y-m-d") . "</center></h2>";
                ?>
                <h3>
                    <center>
                        <div name="time" id="time"></div>
                </h3>
                </center>
                <div class="colored-cards">
                    <div class="colored-card" style="background-color: #A3001C;">
                        <h5 class="card-title text-start">Medical Record</h5>
                        <p class="card-text text-start">Number of Medical Records</p>
                    </div>

                    <div class="colored-card" style="background-color: #A3001C;">
                        <h5 class="card-title text-start">Scheduled Appointment</h5>
                        <p class="card-text text-start">Number of Booked Appointments</p>
                    </div>

                    <div class="colored-card" style="background-color: #A3001C;">
                        <h5 class="card-title text-start">Transaction</h5>
                        <p class="card-text text-start">Number of Current Transactions</p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script>
        // Add JavaScript to handle browser back button click
        window.addEventListener('popstate', function(event) {
            // Redirect the user to home.php
            window.location.href = 'home.php';
        });
    </script>
</body>

</html>