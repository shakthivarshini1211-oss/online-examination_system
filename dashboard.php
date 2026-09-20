<?php

session_start();

if (!isset($_SESSION["student_id"])) {
    header("Location: login.php");
    exit();
}

?>

<!DOCTYPE html>
<html>

<head>

    <title>Student Dashboard</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

    <div class="form-container">

        <h1>Student Dashboard</h1>

        <h2>Welcome, <?php echo $_SESSION["student_name"]; ?>!</h2>

        <p>Select an option below.</p>

        <a href="exam.php">Start Exam</a>

        <a href="result.php">View Result</a>

        <a href="logout.php">Logout</a>

    </div>

</body>

</html>