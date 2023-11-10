<?php
include "config.php";
$id = $_POST['id'];
$value1 = $_POST['value1'];
$value2 = $_POST['value2'];

$sql = "UPDATE Nama Tabel SET value1 = '$value1', value2= '$value2' WHERE id = $id";
$query = $conn->query($sql);
// redirect ke tempat form
// header("Location: localhost/login.php");