<?php
include "config.php";
$id = $_GET['id'];

$sql = " DELETE FROM Nama tabel WHERE id = $id";
$query = $conn->query($sql);
// redirect ke tempat form
// header("Location: localhost/login.php");