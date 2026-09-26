<?php
session_start();

if (!isset($_SESSION["student_id"])) {
    header("Location: login.php");
    exit();
}

$answers = [
    "q1" => "PHP Hypertext Preprocessor",
    "q2" => "$",
    "q3" => "<?php",
    "q4" => "print",
    "q5" => ".php",
    "q6" => "const",
    "q7" => ".",
    "q8" => "if",
    "q9" => "for",
    "q10" => "count()",
    "q11" => '$_POST',
    "q12" => '$_GET',
    "q13" => "session_start()",
    "q14" => "include",
    "q15" => "strlen()",
    "q16" => "mysqli_connect()",
    "q17" => "mysqli_query()",
    "q18" => "class",
    "q19" => "new",
    "q20" => "password_hash()"
];

$total = count($answers);
$score = 0;
$answered = 0;

for ($i = 1; $i <= $total; $i++) {
    $question = "q" . $i;

    if (isset($_POST[$question]) && is_string($_POST[$question])) {
        $answered++;

        if ($_POST[$question] === $answers[$question]) {
            $score++;
        }
    }
}

$wrong = $answered - $score;
$unanswered = $total - $answered;
$percentage = ($total > 0) ? ($score / $total) * 100 : 0;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exam Result</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="exam-container">

        <h1>Online Examination System</h1>
        <h2>Exam Result</h2>

        <div class="result-box">

            <h3>Congratulations on completing your examination!</h3>

            <p>
                <strong>Total Questions:</strong>
                <?php echo $total; ?>
            </p>

            <p>
                <strong>Questions Answered:</strong>
                <?php echo $answered; ?>
            </p>

            <p>
                <strong>Correct Answers:</strong>
                <?php echo $score; ?>
            </p>

            <p>
                <strong>Wrong Answers:</strong>
                <?php echo $wrong; ?>
            </p>

            <p>
                <strong>Unanswered Questions:</strong>
                <?php echo $unanswered; ?>
            </p>

            <p>
                <strong>Your Score:</strong>
                <?php echo $score; ?> / <?php echo $total; ?>
            </p>

            <p>
                <strong>Percentage:</strong>
                <?php echo number_format($percentage, 2); ?>%
            </p>

            <br>

            <a href="dashboard.php">Back to Dashboard</a>
            <a href="logout.php">Logout</a>

        </div>

    </div>

</body>
</html>