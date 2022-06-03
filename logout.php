<?php
session_start();
session_destroy();
header("location: http://localhost/BOOTSTRAP/BELAJAR_WEB/contents/login.php");
?>