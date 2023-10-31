<body>
<?php
session_start();
if(isset($_SESSION['level'])){
    // akses 1
    if($_SESSION['level'] == 1){
        header("Location: localhost/login.php");
    }
    // akses 2
    else if($_SESSION['level'] == 2){
        header("Location: localhost/login.php");
    }
}else{
    $_SESSION['level'] = 0;
} ?>
<form action="do_login.php" method="post">
    <input type="text" name="username" />
    <br>
    <input type="text" name="password">
    <br>
    <button type="submit" name="submit">LogIn</button>
</form>
</body>