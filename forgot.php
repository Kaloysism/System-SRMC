<!DOCTYPE html>
<html>
<head>
    <title>Change Password</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Include CAPTCHA library -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
<?php include 'usernavi.php';?>
<div style="margin-left: 250px; margin-right: 300px;">
<div class="container mt-4">
    <h1>Change Password</h1>

    <!-- Change Password Form -->
    <form method="post" action="change_password.php">
        <div class="form-group">
            <label for="currentPassword">Current Password:</label>
            <input type="password" class="form-control" id="currentPassword" name="currentPassword" required>
        </div>
        <div class="form-group">
            <label for="newPassword">New Password:</label>
            <input type="password" class="form-control" id="newPassword" name="newPassword" required>
        </div>
        <div class="form-group">
            <label for="confirmPassword">Confirm New Password:</label>
            <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required>
        </div>
        <!-- CAPTCHA field -->
        <div class="g-recaptcha" data-sitekey="YOUR_RECAPTCHA_SITE_KEY"></div>
        <button type="submit" class="btn btn-primary mt-2">Change Password</button>
    </form>
</div>
</div>
<!-- Include Bootstrap and jQuery JavaScript (same as above) -->

</body>
</html>
