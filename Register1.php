<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

require_once 'config.php';
include 'header.html';
$msg = "";
if (isset($_POST['create'])) {
    $fname = $_POST['name'];
    $mname = $_POST['Mname'];
    $lname = $_POST['Lname'];
    $name = mysqli_real_escape_string($conn, $fname . " " . $mname . " " . $lname);
    $Birthday = mysqli_real_escape_string($conn, $_POST['bmonth'] . "-" . $_POST['bday'] . "-" . $_POST['byear']);
    $age = mysqli_real_escape_string($conn, $_POST['age']);
    $cont = mysqli_real_escape_string($conn, $_POST['phoneNumber']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $address = mysqli_real_escape_string($conn, $_POST['Address'] . " " . $_POST['City'] . " " . $_POST['State'] . " " . $_POST['ZipCode']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, md5($_POST['psw']));
    $Cpassword = mysqli_real_escape_string($conn, md5($_POST['password']));
    $code = mysqli_real_escape_string($conn, md5(rand()));

    if (mysqli_num_rows(mysqli_query($conn, "Select * from user_tb where email = '$email'")) > 0) {
        $msg = '<div class="w3-container w3-card-8 w3-xlarge" style="background-color:#A3001C; color:white; font-family:STIX Two Text ">"' . $email . '" This Email Address has been Already Taken';
    } else {
        if ($password === $Cpassword) {
            $sql = "INSERT INTO user_tb (email,first_name,last_name,gender,address,cont,age,Reg_date,Pass,full_name,Code)
            VALUE('$email','$fname','$lname','$gender','$address','$cont','$age',NOW(),'$password', '$name', '$code')";

            $result = mysqli_query($conn, $sql);

            if ($result) {
                echo "<div style='display: none;'>";
                //Create an instance; passing `true` enables exceptions
                $mail = new PHPMailer(true);

                try {
                    //Server settings
                    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                    $mail->isSMTP();                                            //Send using SMTP
                    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                    $mail->Username   = 'its.safehere69@gmail.com';                     //SMTP username
                    $mail->Password   = 'yrfq qozz hogg mqed';                               //SMTP password
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
                    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                    //Recipients
                    $mail->setFrom('its.safehere69@gmail.com', 'SRMC');
                    $mail->addAddress($email, $name);

                    //Content
                    $mail->isHTML(true);                                  //Set email format to HTML
                    $mail->Subject = 'no reply';
                    $mail->Body    = 'Here is the verification link <b><a href="http://localhost/astoveza/SRMC/Dito%20muna/SRMC/?verification=' . $code . '">http://localhost/astoveza/SRMC/Dito%20muna/SRMC/?verification=' . $code . '</a></b>';

                    $mail->send();
                    echo 'Message has been sent';
                } catch (Exception $e) {
                    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                }
                echo "</div>";

                $msg = "<div class='w3-container w3-card-8 w3-xlarge' style='background-color:green; color:white; font-family:STIX Two Text '> We've Send A Verification Link On Your Email Address";
            } else {
                $msg = "<div class='w3-container w3-card-8 w3-xlarge' style='background-color:#A3001C; color:white; font-family:STIX Two Text '> Something Went Wrong!";
            }
        } else {
            $msg = '<div class="w3-container w3-card-8 w3-xlarge" style="background-color:#A3001C; color:white; font-family:STIX Two Text ">Password and Confirm password do not Match';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="style.css">
    <style>
        .image-text-container {
            display: flex;
            /* Use flexbox for layout */
            align-items: center;
            /* Center vertically */
        }

        /* Define styles for the image */
        .image-text-container img {
            max-width: 100%;
            /* Ensure the image doesn't exceed its container */
            margin-right: 10px;
            /* Add some spacing between the image and text */
        }

        .invalid {
            color: red;
        }

        .error {
            color: #FF0000;
        }
    </style>
</head>
<div class="image-text-container">
    <img src="images/v62_1412.png" width="200" height="200">
    <h1><b>New Patient Registration</b></h1>
</div>
<hr>

<body>
    <form action="#" method="POST" class="w3-container">
        <div class="w3-container auto">
            <div class="w3-row">
                <center>
                    <?php echo $msg ?>
            </div>
            </center>
            <div class="w3-col" style="width:20%;">
                <h4><label class="w3-text-black">First Name:</label></h4>
            </div>
            <div class="w3-col" style="width:70%;">
                <div>
                    <input class="w3-input w3-border-red" type="text" placeholder="Enter Your First Name" name="name" value="<?php if (isset($_POST['create'])) {
                                                                                                                                    echo $fname;
                                                                                                                                } ?>" required>
                </div>
            </div>
        </div>
        <div class="w3-row">
            <div class="w3-col" style="width:20%;">
                <h4><label class="w3-text-black">Last Name:</label></h4>
            </div>
            <div class="w3-col" style="width:70%;">
                <div>
                    <input class="w3-input w3-border-red" name="Lname" type="text" placeholder="Enter Your Last Name" value="<?php if (isset($_POST['create'])) {
                                                                                                                                    echo $lname;
                                                                                                                                } ?>" required>
                </div>
            </div>
            <div class="w3-row">
                <div class="w3-col" style="width:20%;">
                    <h4><label class="w3-text-black">Middle Name:</label></h4>
                </div>
                <div class="w3-col" style="width:70%;">
                    <div>
                        <input class="w3-input w3-border-red" name="Mname" type="text" placeholder="Enter Your Middle Name" value="<?php if (isset($_POST['create'])) {
                                                                                                                                        echo $mname;
                                                                                                                                    } ?>" required>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <hr>

        <div class="w3-container">
            <h4>Date of Birth: </h4>
            <div class="w3-row-padding">
                <div class="w3-third">
                    <select name="bmonth" class="w3-select w3-border-red" required>
                        <option value="" disabled selected>Month</option>
                        <option value="01">January</option>
                        <option value="02">February</option>
                        <option value="03">March</option>
                        <option value="04">April</option>
                        <option value="05">May</option>
                        <option value="06">June</option>
                        <option value="07">July</option>
                        <option value="08">August</option>
                        <option value="09">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>
                    </select>
                </div>
                <div class="w3-third">
                    <select name="bday" class="w3-select w3-border-red" required>
                        <option value="" disabled selected>Day</option>

                        <?php
                        if (isset($_POST['create'])) {
                            echo "<option value= " . $_POST['bday'] . "selected>" . $_POST['bday'] . "</option>";
                        }
                        for ($day = 1; $day <= 31; $day++) {
                            $dayValue = str_pad($day, 2, '0', STR_PAD_LEFT); // Add leading zero if necessary
                            echo '<option value="' . $dayValue . '">' . $day . '</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="w3-third">
                    <select name="byear" class="w3-select w3-border-red" required>
                        <option value="" disabled selected>Year</option>
                        <?php
                        for ($year = 1890; $year <= 2030; $year++) {
                            echo '<option value="' . $year . '">' . $year . '</option>';
                        }
                        ?>
                    </select>
                </div>
            </div>
        </div>
        <hr>

        <div class="w3-container">
            <div class="w3-row-padding">
                <div class="w3-third">
                    <h4>Age:</h4>
                    <input class="w3-input w3-border-red" name="age" type="number" placeholder="Enter Your Age" value="<?php if (isset($_POST['create'])) {
                                                                                                                            echo $age;
                                                                                                                        } ?>" required>
                </div>
                <div class="w3-third">
                    <h4>Gender:</h4>
                    <select name="gender" class="w3-select w3-border-red" required>
                        <?php if (isset($_POST['create'])) {
                            if ($_POST['gender'] === "Male") {
                                echo '<option value="Male" selected >Male</option>
                                        <option value="Female">Female</option>';
                            } else {
                                echo '<option value="Male">Male</option>
                                        <option value="Female" Selected >Female</option>';
                            }
                        } else {
                            echo '<option value="" disabled selected>Select Gender</option>';
                            echo '<option value="Male">Male</option>
                                        <option value="Female">Female</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="w3-third">
                    <h4>Contact Number:</h4>
                    <input class="w3-input w3-border-red" id="phoneNumber" name="phoneNumber" type="text" placeholder="Enter Your Contact Number" value="<?php if (isset($_POST['create'])) {
                                                                                                                                                                echo $cont;
                                                                                                                                                            } ?>" required>
                    <p id="messageCon"></p>
                </div>
            </div>
        </div>
        <hr>
        <div class="w3-container">
            <h4>Address:</h4>
            <div class="w3-row-padding">
                <div class="w3-quarter">
                    <input class="w3-input w3-border-red" name="Address" type="text" placeholder="Address" value="<?php if (isset($_POST['create'])) {
                                                                                                                        echo $_POST['Address'];
                                                                                                                    } ?>" required>
                </div>
                <div class="w3-quarter">
                    <input class="w3-input w3-border-red" name="City" type="text" placeholder="City" value="<?php if (isset($_POST['create'])) {
                                                                                                                echo $_POST['City'];
                                                                                                            } ?>" required>
                </div>
                <div class="w3-quarter">
                    <input class="w3-input w3-border-red" name="State" type="text" placeholder="State/Province" value="<?php if (isset($_POST['create'])) {
                                                                                                                            echo $_POST['State'];
                                                                                                                        } ?>" required>
                </div>
                <div class="w3-quarter">
                    <input class="w3-input w3-border-red" name="ZipCode" type="text" placeholder="Zip Code" value="<?php if (isset($_POST['create'])) {
                                                                                                                        echo $_POST['ZipCode'];
                                                                                                                    } ?>" required>
                </div>
            </div>
        </div>
        <hr>

        <div class="w3-container auto">
            <div class="w3-row">
                <div class="w3-col" style="width:20%;">
                    <h4><label class="w3-text-black">Email:</label></h4>
                </div>
                <div class="w3-col" style="width:70%;">
                    <div>
                        <input class="w3-input w3-border-red" name="email" onkeyup="validateEmail()" pattern="[a-zA-Z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" type="text" placeholder="Example@example.com" value="<?php if (isset($_POST['create'])) {
                                                                                                                                                                                                                    echo $email;
                                                                                                                                                                                                                } ?>" required>
                    </div>
                </div>
            </div>
            <div class="w3-row">
                <div class="w3-col" style="width:20%;">
                    <h4><label class="w3-text-black">Create Password:</label></h4>
                </div>
                <div class="w3-col" style="width:70%;">
                    <div>
                        <input class="w3-input w3-border-red" id="psw" name="psw" type="password" placeholder="Enter Your Password" minlength="8" required>
                        <input type="checkbox" id="showPassword" onchange="togglePasswordVisibility()"> Show Password
                    </div>
                    <div id="message" class="w3-container">
                        <p>Password must contain:
                            <span id="letter" class="invalid">A <b>Lowercase letter </b></span>,
                            <span id="capital" class="invalid"><b>Capital letter</b> </span>,
                            <span id="number" class="invalid"><b>Number</b></span>,
                            <span id="length" class="invalid"><b>Minimum 8 characters</b></span>
                        </p>
                    </div>
                </div>
                <div class="w3-row">
                    <div class="w3-col" style="width:20%;">
                        <h4><label class="w3-text-black">Confirm Password:</label></h4>
                    </div>
                    <div class="w3-col" style="width:70%;">
                        <div>
                            <input class="w3-input w3-border-red" id="password" name="password" type="Password" placeholder="Confirm Password" minlength="8" required>
                            <input type="checkbox" id="showPassword1" onchange="togglePasswordVisibility()"> Show Password
                            <p id="message1" style="font-size:120%;"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <p class="w3-center">By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

        <div class="w3-container auto">
            <h5><input type="submit" id="submit" name="create" class="w3-button w3-block  w3-round" style="background-color:#A3001C; color:white; font-family:STIX Two Text " value="Create Account"></button></p>
        </div>
        <center>Already have an account?<a href="login.php"> Login Now</a> </center>
    </form>
    <script>
        var contactNumberInput = document.getElementById("phoneNumber");
        var messageElement1 = document.getElementById("messageCon");

        contactNumberInput.addEventListener("input", function() {
            var contactNumber = contactNumberInput.value;

            // Define a regular expression pattern for the desired format +639xxxxxxxxx
            var pattern = /^09\d{9}$/;

            if (pattern.test(contactNumber)) {
                messageElement1.textContent = "Valid format.";
                messageElement1.style.color = "green";
            } else {
                messageElement1.textContent = "Invalid format. Please use 09XXXXXXXXX.";
                messageElement1.style.color = "red";
            }
        });

        var passwordInput = document.getElementById("psw");
        var confirmPasswordInput = document.getElementById("password");
        var messageElement = document.getElementById("message1");

        function checkPassword() {
            var password = passwordInput.value;
            var confirmPassword = confirmPasswordInput.value;

            if (password === confirmPassword) {
                messageElement.textContent = "Passwords match!";
                messageElement.style.color = "green";
            } else {
                messageElement.textContent = "Passwords do not match!";
                messageElement.style.color = "#A3001C";
            }
        }

        confirmPasswordInput.addEventListener("input", checkPassword);

        function togglePasswordVisibility() {
            var passwordField = document.getElementById("psw");
            var checkbox = document.getElementById("showPassword");

            if (checkbox.checked) {
                passwordField.type = "text"; // Show the password
            } else {
                passwordField.type = "password"; // Hide the password
            }

            var passwordField = document.getElementById("password");
            var checkbox = document.getElementById("showPassword1");

            if (checkbox.checked) {
                passwordField.type = "text"; // Show the password
            } else {
                passwordField.type = "password"; // Hide the password
            }
        }
        var myInput = document.getElementById("psw");
        var letter = document.getElementById("letter");
        var capital = document.getElementById("capital");
        var number = document.getElementById("number");
        var length = document.getElementById("length");

        myInput.onfocus = function() {
            document.getElementById("message").style.display = "block";
        }

        myInput.onblur = function() {
            document.getElementById("message").style.display = "none";
        }

        myInput.onkeyup = function() {
            var lowerCaseLetters = /[a-z]/g;
            if (myInput.value.match(lowerCaseLetters)) {
                letter.classList.remove("invalid");
                letter.classList.add("valid");
            } else {
                letter.classList.remove("valid");
                letter.classList.add("invalid");
            }

            var upperCaseLetters = /[A-Z]/g;
            if (myInput.value.match(upperCaseLetters)) {
                capital.classList.remove("invalid");
                capital.classList.add("valid");
            } else {
                capital.classList.remove("valid");
                capital.classList.add("invalid");
            }

            var numbers = /[0-9]/g;
            if (myInput.value.match(numbers)) {
                number.classList.remove("invalid");
                number.classList.add("valid");
            } else {
                number.classList.remove("valid");
                number.classList.add("invalid");
            }

            if (myInput.value.length >= 8) {
                length.classList.remove("invalid");
                length.classList.add("valid");
            } else {
                length.classList.remove("valid");
                length.classList.add("invalid");
            }
        }
    </script>
</body>
<?php include 'footer.html';
?>

</html>