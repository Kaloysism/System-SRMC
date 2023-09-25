<!DOCTYPE html>
<html>
<head>
    <title>Medical Records</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Add your custom CSS styles here -->

    <style>
        /* Add custom styles for your page */
    </style>
</head>
<body>
<?php include 'usernavi.php';?>
<div style="margin-left: 250px; margin-right: 300px;">
<div class="container mt-4">
    <h1 class="mb-4">Medical Records</h1>

    <!-- Display Medical Records -->
    <div class="w3-card-4">
        <div class="w3-container w3-darkred">
            <h2>View Medical Records</h2>
        </div>
        <div class="w3-container">
            <p><strong>Patient ID:</strong> <?php echo $patientID; ?></p>
            <p><strong>Blood Type:</strong> <?php echo $bloodType; ?></p>
            <p><strong>Allergy:</strong> <?php echo $allergy; ?></p>
            <p><strong>Medical History:</strong> <?php echo $medicalHistory; ?></p>
            <p><strong>Last Appointment:</strong> <?php echo $lastAppointment; ?></p>
            <p><strong>Immunization History:</strong> <?php echo $immunizationHistory; ?></p>
        </div>
    </div>

    <!-- Edit Medical Records -->
    <div class="w3-card-4 mt-4">
        <div class="w3-container w3-darkred">
            <h2>Edit Medical Records</h2>
        </div>
        <div class="w3-container">
            <!-- Create a form for editing medical records -->
            <form action="update_medical_records.php" method="post">
                <div class="form-group">
                    <label for="bloodType">Blood Type:</label>
                    <input type="text" class="form-control" id="bloodType" name="bloodType" value="<?php echo $bloodType; ?>">
                </div>
                <div class="form-group">
                    <label for="allergy">Allergy:</label>
                    <input type="text" class="form-control" id="allergy" name="allergy" value="<?php echo $allergy; ?>">
                </div>
                <div class="form-group">
                    <label for="medicalHistory">Medical History:</label>
                    <textarea class="form-control" id="medicalHistory" name="medicalHistory"><?php echo $medicalHistory; ?></textarea>
                </div>
                <div class="form-group">
                    <label for="lastAppointment">Last Appointment:</label>
                    <input type="date" class="form-control" id="lastAppointment" name="lastAppointment" value="<?php echo $lastAppointment; ?>">
                </div>
                <div class="form-group">
                    <label for="immunizationHistory">Immunization History:</label>
                    <textarea class="form-control" id="immunizationHistory" name="immunizationHistory"><?php echo $immunizationHistory; ?></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
</div>
</body>
</html>
