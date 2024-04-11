<?php
session_start();
require_once('include/connection.php');
$errmsg_arr = array();
$errflag = false;

function clean($con, $str)
{
    $str = trim($str);
    $str = mysqli_real_escape_string($con, $str);
    return $str;
}

$email = isset($_POST['email']) ? clean($conn, $_POST['email']) : '';
$password = isset($_POST['pass']) ? clean($conn, $_POST['pass']) : '';

if ($email === '') {
    $errmsg_arr[] = 'Email is missing';
    $errflag = true;
}
if ($password === '') {
    $errmsg_arr[] = 'Password is missing';
    $errflag = true;
}

if ($errflag) {
    $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
    session_write_close();
    header("location: admin_login.php");
    exit();
}

// Create query
$qry = "SELECT * FROM tm_admin WHERE admin_email='$email' AND admin_pass='$password'";
$result = mysqli_query($conn, $qry);

// Check whether the query was successful or not
if ($result) {
    if (mysqli_num_rows($result) > 0) {
        session_regenerate_id();
        $member = mysqli_fetch_assoc($result);
        $_SESSION['ADMIN_ID'] = $member['admin_id'];
        $_SESSION['ADMIN_NAME'] = $member['admin_name'];
        $_SESSION['ADMIN_EMAIL'] = $member['admin_email'];
        $_SESSION['ADMIN_PASS'] = $member['admin_pass'];
        session_write_close();
        header("location: admin_profile.php");
        exit();
    } else {
        // Login failed
        $errmsg_arr[] = 'Email and password not found';
        $errflag = true;
        if ($errflag) {
            $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
            session_write_close();
            header("location: admin_login.php");
            exit();
        }
    }
} else {
    die("Query failed");
}
?>
