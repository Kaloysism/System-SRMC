<?php
include 'config.php';
session_start();
unset($_SESSION['id']);
session_destroy();
header("Location: Login.php");
setcookie('auth_token', '', time() - 3600); // Expire the cookie
$query = "UPDATE users SET token = NULL, token_expiry = NULL WHERE email = '{$_SESSION['email']}'";
$result = mysqli_query($conn, $query);
