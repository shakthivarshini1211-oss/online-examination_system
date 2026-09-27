<?php

session_start();

if (!isset($_SESSION["admin_id"])) {
    header("Location: admin_login.php");
    exit();
}

include "../db.php";

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $question = $_POST["question"];
    $option_a = $_POST["option_a"];
    $option_b = $_POST["option_b"];
    $option_c = $_POST["option_c"];
    $option_d = $_POST["option_d"];
    $correct_answer = $_POST["correct_answer"];

    $sql = "INSERT INTO questions
            (question, option_a, option_b, option_c, option_d, correct_answer)
            VALUES
            ('$question', '$option_a', '$option_b', '$option_c', '$option_d', '$correct_answer')";

    if (mysqli_query($conn, $sql)) {

        $message = "Question added successfully.";

    } else {

        $message = "Question could not be added.";

    }
}

?>

<!DOCTYPE html>
<html>

<head>

    <title>Add Question</title>

    <link rel="stylesheet" href="admin.css">

</head>

<body>

    <h1>Add Question</h1>

    <p><?php echo $message; ?></p>

    <form method="POST">

        <p>Question</p>

        <textarea
            name="question"
            required
        ></textarea>

        <p>Option A</p>

        <input
            type="text"
            name="option_a"
            required
        >

        <p>Option B</p>

        <input
            type="text"
            name="option_b"
            required
        >

        <p>Option C</p>

        <input
            type="text"
            name="option_c"
            required
        >

        <p>Option D</p>

        <input
            type="text"
            name="option_d"
            required
        >

        <p>Correct Answer</p>

        <select name="correct_answer" required>

            <option value="">Select Correct Answer</option>

            <option value="A">A</option>

            <option value="B">B</option>

            <option value="C">C</option>

            <option value="D">D</option>

        </select>

        <br><br>

        <button type="submit">
            Add Question
        </button>

    </form>

    <br>

    <a href="admin_dashboard.php">
        Back to Dashboard
    </a>

</body>

</html>