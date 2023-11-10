<?php
include "config.php";
$value1 = $_POST['value1'];
$value2 = $_POST['value2'];
$value3 = $_POST['value3'];
$sql = "INSERT INTO Nama Tabel (Kolom1, Kolom2, Kolom3) VALUES ('$value1', '$value2', '$value3')";
$query = $conn->query($sql);
// redirect ke tempat form
// header("Location: localhost/login.php");
