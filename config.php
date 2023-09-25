<?php
define('DB_RIVER', 'mysqli');
define('DB_HOSTNAME','localhost');
define('DB_USERNAME', 'root');
define('dB_PASSWORD', '');
define('DB_DATABASE', 'srmc');
require('./vendor/autoload.php');
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
# redirection location is the path to login.php
$conn = new mysqli(DB_HOSTNAME, DB_USERNAME, dB_PASSWORD, DB_DATABASE);
?>
