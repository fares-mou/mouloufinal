<?php
session_start();
require_once '../db/config.php';


$username = $_POST['username'];
$password = $_POST['password'];

$result = $conn->query("SELECT * FROM users WHERE username='$username' AND password='$password'");

if($result->num_rows > 0) {
    $_SESSION['user'] = $username;
    header("Location: ../dashboard.php");
    exit();}
else {
        $error = "خطأ في اسم المستخدم أو كلمة المرور";
    }

?>