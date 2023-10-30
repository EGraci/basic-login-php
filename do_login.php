<?php
include "config.php";
// var_dump($_POST);
session_start();

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $akun = $conn->query("SELECT * FROM akun WHERE username = '$username' AND password = '$password' LIMIT 1");
    if($akun->num_rows > 0){
        $data = $akun->fetch_assoc();
        $_SESSION['level'] = $data['level'];
        // dashboard yang di inginkan
        if($data['level'] == 1){
            header("Location: localhost/login/akses1.php");
        }else if($data['level'] == 2){
            header("Location: localhost/login/akses2.php");
        }else{
            header("Location: localhost/login/login.php");
        }

    }else{
        // username password salah
        header("Location: localhost/login/login.php");
        exit();
    }
}
