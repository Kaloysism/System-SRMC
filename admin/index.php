<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        body {
            background-color: #f1f1f1;
        }
        .login-container {
            margin: 0 auto;
            width: 300px;
            padding: 20px;
            background-color: #ffffff;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0px 0px 5px 0px #ccc;
            margin-top: 100px;
        }
    </style>
</head>
<body>

<div class="w3-container">
    <div class="login-container">
        <h2 class="w3-center">Admin Login</h2>
        <form action="admin_login_process.php" method="POST">
            <div class="w3-section">
                <label for="username"><b>Username</b></label>
                <input type="text" id="username" name="username" class="w3-input w3-border" required>
            </div>

            <div class="w3-section">
                <label for="password"><b>Password</b></label>
                <input type="password" id="password" name="password" class="w3-input w3-border" required>
            </div>

            <div class="w3-section">
                <button type="submit" class="w3-button w3-block w3-blue">Login</button>
            </div>
        </form>
    </div>
</div>

</body>
</html>
