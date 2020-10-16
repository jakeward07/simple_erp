<?php
// Make Connection to our database
$host = "localhost";
$user = "root";
$passwd = "";
$db = "simple_erp";

$conn = mysqli_connect($host, $user, $passwd, $db);

if (!$conn) {
echo "Connection Error!";
}