<?php
session_start();
include("dbconnect.php");
$email = $_POST['email'];
$password = $_POST['password'];
$admin = 1;
$user = 0;

$sql = "SELECT * FROM member WHERE email='" . $email . "' AND password='" . $password . "' AND usertype='" . $admin . "'";
$output = $conn->query($sql);

if ($output->num_rows > 0) {
    $_SESSION['email'] = $email;
    header('location:adminhome.php');
} elseif (!isset($_SESSION['email'])) {
    $sql = "SELECT * FROM member WHERE email='" . $email . "' AND password='" . $password . "' AND usertype='" . $user . "'";
    $output = $conn->query($sql);

    if ($output->num_rows > 0) {
        $_SESSION['email'] = $email;
        header('location:home.php');
    } else {
        if (!isset($_SESSION['attempt'])) {
            $_SESSION['attempt'] = 0;
        }

        $_SESSION['attempt'] += 1;

        if ($_SESSION['attempt'] === 3) {
            $_SESSION['message'] = "Too many fails! Try again in 10 minutes.";
            $_SESSION['check'] = 1;
            $_SESSION['fail_attempt'] = time() + (10 * 60);
        } else {
            $_SESSION['message'] = "Please Enter Correct Email and Password";
        }
        header('location:login.php');
    }
}
