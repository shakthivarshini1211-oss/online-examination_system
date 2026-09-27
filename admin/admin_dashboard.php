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

    <title>Admin Dashboard</title>

    <link rel="stylesheet" href="admin.css">

</head>

<body>

    <h1>Admin Dashboard</h1>

    <h2>Welcome, <?php echo $_SESSION["admin_username"]; ?>!</h2>

    <p>Select an option:</p>

    <p>
        <a href="add_question.php">Add Question</a>
    </p>

    <p>
        <a href="manage_questions.php">Manage Questions</a>
    </p>

    <p>
        <a href="manage_students.php">Manage Students</a>
    </p>

    <p>
        <a href="manage_exams.php">Manage Exams</a>
    </p>

    <p>
        <a href="admin_logout.php">Logout</a>
    </p>

</body>

</html>