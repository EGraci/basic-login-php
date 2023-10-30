<body>
<?php
session_start();
    if(isset($_SESSION['level'])){
        if($_SESSION['level'] != 1){
            header("Location: localhost/login/login.php");
        }
    }else{
        header("Location: localhost/login/login.php");
    }
?>
    <h1>Akses 1</h1>
    <br>
    <a href="singout.php">sing out</a>
</body>