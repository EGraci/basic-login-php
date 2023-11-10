<?php
include "config.php";
$sql = "SELECT * FROM namatabel";
$query = $conn->query($sql);
while($data = $query->fetch_assoc()){
    echo $data['nama kolom']."<br>";
}