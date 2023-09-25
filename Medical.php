<!DOCTYPE html>
<html>
<head>
    <title>Medical Records</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<?php include 'usernavi.php';?>
<div style="margin-left: 250px; margin-right: 300px;">
<div class="container mt-4">
    <h1 class="mb-4">Medical Records</h1>

    <!-- Nav tabs -->
    <ul class="nav nav-tabs" id="medicalRecordTabs" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="view-records-tab" data-toggle="tab" href="#view-records" role="tab">View Records</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="prescriptions-tab" data-toggle="tab" href="#prescriptions" role="tab">Prescriptions</a>
        </li>
    </ul>

    <!-- Tab content -->
    <div class="tab-content mt-4">
        <!-- View Records Tab -->
        <div class="tab-pane active" id="view-records" role="tabpanel">
            <!-- Display user's medical records here -->
            <!-- <?php
            // Connect to the database
            $conn = mysqli_connect("localhost", "username", "password", "your_database");
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            // Query to fetch medical records
            $recordsQuery = "SELECT * FROM medical_records WHERE patient_id = 'user_id'";
            $recordsResult = mysqli_query($conn, $recordsQuery);

            if (mysqli_num_rows($recordsResult) > 0) {
                echo "<h3>Medical Records</h3>";
                echo "<table class='table'>";
                echo "<thead><tr><th>Diagnosis</th><th>Date Check</th><th>Doctor</th><th>Findings</th><th>Notes</th></tr></thead>";
                echo "<tbody>";

                while ($row = mysqli_fetch_assoc($recordsResult)) {
                    echo "<tr>";
                    echo "<td>" . $row['Diagnosis'] . "</td>";
                    echo "<td>" . $row['Date_Check'] . "</td>";
                    echo "<td>" . $row['Doctor'] . "</td>";
                    echo "<td>" . $row['Findings'] . "</td>";
                    echo "<td>" . $row['Notes'] . "</td>";
                    echo "</tr>";
                }

                echo "</tbody>";
                echo "</table>";
            } else {
                echo "No medical records found.";
            }

            // Close the database connection
            mysqli_close($conn);
            ?> -->
        </div>

        <!-- Prescriptions Tab -->
        <div class="tab-pane" id="prescriptions" role="tabpanel">
            <!-- Display user's prescriptions here -->
            <!-- <?php
            // Connect to the database (same as above)
            // Query to fetch prescriptions
            $prescriptionsQuery = "SELECT * FROM prescriptions WHERE patient_id = 'user_id'";
            $prescriptionsResult = mysqli_query($conn, $prescriptionsQuery);

            if (mysqli_num_rows($prescriptionsResult) > 0) {
                echo "<h3>Prescriptions</h3>";
                echo "<table class='table'>";
                echo "<thead><tr><th>Prescription</th><th>Doctor</th><th>Date Prescribed</th><th>Medication</th><th>Dosage</th><th>Frequency</th><th>Duration</th><th>Administer Type</th></tr></thead>";
                echo "<tbody>";

                while ($row = mysqli_fetch_assoc($prescriptionsResult)) {
                    echo "<tr>";
                    echo "<td>" . $row['Prescription'] . "</td>";
                    echo "<td>" . $row['Doctor'] . "</td>";
                    echo "<td>" . $row['Date_Prescribed'] . "</td>";
                    echo "<td>" . $row['Medication'] . "</td>";
                    echo "<td>" . $row['Dosage'] . "</td>";
                    echo "<td>" . $row['Frequency'] . "</td>";
                    echo "<td>" . $row['Duration'] . "</td>";
                    echo "<td>" . $row['Administer_type'] . "</td>";
                    echo "</tr>";
                }

                echo "</tbody>";
                echo "</table>";
            } else {
                echo "No prescriptions found.";
            }

            // Close the database connection (same as above)
            ?> -->
        </div>
    </div>
</div>
</div>
<!-- Include Bootstrap and jQuery JavaScript (same as above) -->

</body>
</html>
