<?php
session_start();
session_destroy();
header("Location: localhost/login/login.php");
