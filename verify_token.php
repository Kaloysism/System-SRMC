<?php
if (!isset($_COOKIE['auth_token'])) {
    header('location: Login.php');
}

$token = $_COOKIE['auth_token'];
$query = "SELECT * FROM user_tb WHERE token = '{$_COOKIE['auth_token']}' AND token_expiry > NOW()";
$result = mysqli_query($conn, $query);
?>