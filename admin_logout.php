<?php
session_start();
unset($_SESSION['ADMIN_ID']);
unset($_SESSION['ADMIN_NAME']);
unset($_SESSION['ADMIN_PASS']);
header('location:main.php');
?>