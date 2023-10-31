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
        // dashboard yang di inginkan
        if($data['level'] == 1){
            $_SESSION['level'] = $data['level'];
            header("Location: akses1.php");
        }else if($data['level'] == 2){
            $_SESSION['level'] = $data['level'];
            header("Location: akses2.php");
        }else{
            header("Location: login.php");
        }

    }else{
        // username password salah
        header("Location: localhost/login/login.php");
        exit();
    }
}
