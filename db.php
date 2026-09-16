<?php

$conn = mysqli_connect("localhost", "root", "", "online_exams");

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

?>