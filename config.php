<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "login";
$conn = new mysqli($host, $user, $password, $db);
if ($conn -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
}