<?php
include 'config.php';
include 'verify_token.php';
?>

<!DOCTYPE html>
<html>

<head>
  <title>Patient Booking</title>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    /* CSS to position labels in the upper left side of the forms */
    .form-label {
      display: block;
      margin-right: 10px;
      text-align: left;
    }
    .con {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

    .container label {
      font-size: 16px;
    }

    .container input[type="date"],
    .container input[type="time"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }

    .container input[type="date"]:focus,
    .container input[type="time"]:focus {
      outline: none;
      border-color: #007bff;
    }

    .container input[type="submit"] {
      background-color: #007bff;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 3px;
      cursor: pointer;
    }
  </style>
</head>

<body>
  <?php include 'usernavi.php'; ?>
  <div class="container-lg">
    <div class="container mt-4">
      <!-- Nav tabs -->
      <ul class="nav nav-tabs" id="medicalRecordTabs" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="request-tab" data-toggle="tab" href="#request" role="tab">Request Appointment</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="reschedule-tab" data-toggle="tab" href="#reschedule" role="tab">Reschedule Appointments</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="cancel-tab" data-toggle="tab" href="#cancel" role="tab">Cancel Appointments</a>
        </li>
      </ul>

      <div class="tab-content mt-4">
        <div class="tab-pane active" id="request" role="tabpanel">
          <div class="con" >
          <h2>Select Date and Time</h2>
          <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
              <label for="date">Date:</label>
              <input type="date" name="date" required <?php if (isset($_POST["date"])) echo "value='" . $_POST["date"] . "'"; ?>>

              <label for="time">Time:</label>
              <input type="time" name="time" required <?php if (isset($_POST["time"])) echo "value='" . $_POST["time"] . "'"; ?>>

              <input type="submit" value="Check Availability">
            </form>
          <?php
          // Check if the form is submitted
          if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $selectedDate = $_POST["date"];
            $selectedTime = $_POST["time"];

            // Check if the selected time is within the allowed range
            if (strtotime($selectedTime) >= strtotime("7:30 AM") && strtotime($selectedTime) <= strtotime("6:30 PM")) {
              $selectedDay = date("l", strtotime($selectedDate)); // Get the selected day

              // Disable input for Monday
              if ($selectedDay == "Monday") {
                // Enable doctor selection form
                echo "<h2>Select a Doctor</h2>";
                echo "<form action='appointment_confirmation.php' method='post'>";
                echo "<select name='doctor' class='w3-select'>";
                echo "<option value='Doc1'>Doc1</option>";
                echo "<option value='Doc2'>Doc2</option>";}

                elseif ($selectedDay == "Tuesday") {
                  echo "<h2>Select a Doctor</h2>";
                  echo "<form action='appointment_confirmation.php' method='post'>";
                  echo "<select name='doctor' class='w3-select'>";
                  echo "<option value='Doc13'>Doc3</option>";
                  echo "<option value='Doc14'>Doc4</option>";
                }
                elseif ($selectedDay == "Wednesday") {
                  echo "<h2>Select a Doctor</h2>";
                  echo "<form action='appointment_confirmation.php' method='post'>";
                  echo "<select name='doctor' class='w3-select'>";
                  echo "<option value='Doc5'>Doc13</option>";
                  echo "<option value='Doc6'>Doc14</option>";
                }
                elseif ($selectedDay == "Thursday") {
                  echo "<h2>Select a Doctor</h2>";
                  echo "<form action='appointment_confirmation.php' method='post'>";
                  echo "<select name='doctor' class='w3-select'>";
                  echo "<option value='Doc7'>Doc13</option>";
                  echo "<option value='Doc8'>Doc14</option>";
                }
                elseif ($selectedDay == "Friday") {
                  echo "<h2>Select a Doctor</h2>";
                  echo "<form action='appointment_confirmation.php' method='post'>";
                  echo "<select name='doctor' class='w3-select'>";
                  echo "<option value='Doc13'>Doc9</option>";
                  echo "<option value='Doc14'>Doc10</option>";
                }
                elseif ($selectedDay == "Saturday") {
                  echo "<h2>Select a Doctor</h2>";
                  echo "<form action='appointment_confirmation.php' method='post'>";
                  echo "<select name='doctor' class='w3-select'>";
                  echo "<option value='Doc13'>Doc11</option>";
                  echo "<option value='Doc14'>Doc12</option>";
                }

                // Add doctor options based on the selected day
                elseif ($selectedDay == "Sunday") {
                  echo "<h2>Select a Doctor</h2>";
                  echo "<form action='home.php' method='post'>";
                  echo "<select name='doctor' class='w3-select'>";
                  echo "<option value='Doc13'>Doc13</option>";
                  echo "<option value='Doc14'>Doc14</option>";
                }

                echo "</select> <br><br>";
                echo "<input type='submit' name='book' value='Book Appointment'>";
                echo "</form>";

                if(isset($_POST['book'])){
                  $sql = "SELECT * FROM user_tb WHERE id = '{$_SESSION['id']}'";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) == 1) {
                  $row = mysqli_fetch_assoc($result);
                   $fname = $row['full_name'];

                   $insertsql = "INSERT INTO TB_Appointment (patient_id,full_name, date, time, doctor, status) 
                VALUES ('{$_SESSION['id']}','$fname', '{$_POST["date"]}', '{$_POST["time"]}', '{$_POST['doctor']}', 'Waiting to be Confirmed')";
                $Inresult = mysqli_query($conn, $insertsql);
                }
                }
  
                

              }else {
                echo "<p>Selected time is not within the allowed range (7:30 AM - 6:30 PM).</p>";
              }
            } 
          
          ?>
          </div>
        </div>


        <div class="tab-pane" id="reschedule" role="tabpanel">
          <h1>Hi</h1>
        </div>
        <div class="tab-pane" id="cancel" role="tabpanel">
          <h1>Cancel</h1>
        </div>
      </div>
    </div>
  </div>

  <!-- Include Bootstrap and jQuery JavaScript -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- JavaScript to enable day selection based on doctor selection -->
</body>

</html>