<?php
require_once 'config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>
    <div class="w3-container w3-auto">
        <h1>User Registration</h1>
        <form method="post" action="welcome.php">
            <!-- Display user's profile picture -->
            <img src="<?= $userinfo['picture'] ?>" alt="Profile Picture" class="w3-circle" width="90px" height="90px"><br><br>

            <!-- Display user's full name and email -->
            <label for="fullname">Full Name:</label>
            <input type="text" id="fullname" name="fullname" value="<?= $userinfo['full_name'] ?>" class="w3-input w3-border" readonly>

            <label for="email">Email Address:</label>
            <input type="text" id="email" name="email" value="<?= $userinfo['email'] ?>" class="w3-input w3-border" readonly>

            <!-- Collect additional information -->
            <label for="birthday">Birthday:</label>
            <input type="date" id="birthday" name="birthday" class="w3-input w3-border" required>

            <label for="sex">Sex:</label>
            <select id="sex" name="sex" class="w3-select w3-border" required>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>

            <label for="contactNumber">Contact Number:</label>
            <input type="tel" id="contactNumber" name="contactNumber" pattern="[0-9]{11}" class="w3-input w3-border" required>

            <label for="address">Address:</label>
            <input type="text" id="address" name="address" class="w3-input w3-border" required>

            <button type="submit" name="register" class="w3-button w3-green">Sign Up</button>
            <button type="submit" name="cancel" class="w3-button w3-red">Cancel</button>
        </form>
    </div>
</body>

</html>
