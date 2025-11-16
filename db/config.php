<?php
$conn = new mysqli("localhost", "root", "", "login");

if ($conn->connect_error) {
    die("فشل الاتصال: " . $conn->connect_error);
}
;
?>