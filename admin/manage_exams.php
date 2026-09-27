<?php

session_start();

if (!isset($_SESSION["admin_id"])) {
    header("Location: admin_login.php");
    exit();
}

?>

<!DOCTYPE html>
<html>

<head>

    <title>Manage Exams</title>

    <link rel="stylesheet" href="admin.css">

</head>

<body>

    <h1>Manage Exams</h1>

    <table border="1" cellpadding="10">

        <tr>

            <th>Exam Name</th>

            <th>Total Questions</th>

            <th>Duration</th>

            <th>Status</th>

        </tr>

        <tr>

            <td>PHP Online Examination</td>

            <td>20</td>

            <td>10 Minutes</td>

            <td>Active</td>

        </tr>

    </table>

    <br>

    <a href="admin_dashboard.php">
        Back to Dashboard
    </a>

</body>

</html>