<?php
    session_start();
    function check_login() {
        if (!isset ($_SESSION['username'])) {
            header("location: http://localhost/BOOTSTRAP/BELAJAR_WEB/contents/login.php");
        }
    }
?>