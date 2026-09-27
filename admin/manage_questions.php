<?php

session_start();

if (!isset($_SESSION["admin_id"])) {
    header("Location: admin_login.php");
    exit();
}

include "../db.php";

$sql = "SELECT * FROM questions ORDER BY id DESC";

$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html>

<head>

    <title>Manage Questions</title>

    <link rel="stylesheet" href="admin.css">

</head>

<body>

    <h1>Manage Questions</h1>

    <table border="1" cellpadding="10">

        <tr>

            <th>ID</th>

            <th>Question</th>

            <th>Option A</th>

            <th>Option B</th>

            <th>Option C</th>

            <th>Option D</th>

            <th>Correct Answer</th>

        </tr>

        <?php

        while ($row = mysqli_fetch_assoc($result)) {

        ?>

        <tr>

            <td><?php echo $row["id"]; ?></td>

            <td><?php echo $row["question"]; ?></td>

            <td><?php echo $row["option_a"]; ?></td>

            <td><?php echo $row["option_b"]; ?></td>

            <td><?php echo $row["option_c"]; ?></td>

            <td><?php echo $row["option_d"]; ?></td>

            <td><?php echo $row["correct_answer"]; ?></td>

        </tr>

        <?php

        }

        ?>

    </table>

    <br>

    <a href="add_question.php">
        Add New Question
    </a>

    <br><br>

    <a href="admin_dashboard.php">
        Back to Dashboard
    </a>

</body>

</html>