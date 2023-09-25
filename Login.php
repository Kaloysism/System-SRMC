<?php
include 'config.php';

$msg = "";
if (isset($_POST['log'])) {
  $email = mysqli_escape_string($conn, $_POST['username']);
  $password = MD5($_POST['password']);

  $sql = "SELECT * FROM user_tb WHERE email = '$email' AND pass = '$password'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) == 1) {
    $msg = '<div class="w3-container w3-card-8 w3-xlarge" style="background-color:#008000; color:white; font-family:STIX Two Text">Logged in</div>';
    if (mysqli_num_rows($result) == 1) {
      $row = mysqli_fetch_assoc($result);
      if (empty($row['Code'])) {
        $_SESSION['email'] = $row['email'];
        $_SESSION['full_name'] = $row['full_name'];
        $_SESSION['id'] = $row['id'];
        $token = bin2hex(random_bytes(32));
        $tokenExpiry = date('Y-m-d H:i:s', strtotime('+1 hour'));

        $updateQuery = "UPDATE user_TB SET token = '$token', token_expiry = '$tokenExpiry' WHERE email = '{$row['email']}'";
        $exc = mysqli_query($conn,$updateQuery);

        setcookie('auth_token', $token, strtotime('+1 hour'));

        header('Location:home.php');
      } else {
        $msg = '<div class="w3-container w3-card-8 w3-xlarge" style="background-color:#A3001C; color:white; font-family:STIX Two Text ">Account Not Verified, Verify Your Account First. Check Your Email to Verify</div>';
      }
    }
  } else {
    $msg = '<div class="w3-container w3-card-8 w3-xlarge" style="background-color:#A3001C; color:white; font-family:STIX Two Text">Wrong Credential, Please try Again </div>';
  }
}

include 'header.html';

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="style.css">
  <style>
    /* Add custom styles here */
    .login-container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
    }

    .btn {
      display: flex;
      justify-content: center;
      padding: 5px;
    }

    a.Agoogle {
      all: unset;
      cursor: pointer;
      padding: 10px;
      display: flex;
      width: 450px;
      align-items: center;
      justify-content: center;
      font-size: 20px;
      background-color: #f9f9f9;
      border: 1px solid rgba(0, 0, 0, .2);
      border-radius: 3px;
    }

    a:hover {
      background-color: lightskyblue;
    }

    img.imaggoogle {
      width: 30px;
      margin-right: 1px;

    }

    .w3-button {
      font-size: 20px;
    }
  </style>
</head>

<body>
  <div class="w3-container w3-center">
    <!-- Create a container for the login form -->
    <div class="login-container">
      <img src="images/v62_1412.png" alt="Login Image" class="w3-round w3-image" width="150" height="150">
      <h2>Login</h2>
      <?php echo $msg; ?>
      <form class="w3-container" method="POST" action="#">
        <input type="text" id="username" name="username" class="w3-input w3-border-red" placeholder="Email">
        <input type="password" id="password" name="password" class="w3-input w3-border-red" placeholder="Password">
        <a href="Userlogin.php"> Forgot Password?</a>
        <center>Dont have account?<a href="Register1.php"> Register Now</a> </center>
        <input type="submit" name="log" class="w3-button w3-block  w3-round" style="background-color:#A3001C; color:white; font-family:STIX Two Text " value="Login">
        <hr>
      </form>
    </div>
  </div>
</body>
<?php
include 'footer.html';
?>

</html>