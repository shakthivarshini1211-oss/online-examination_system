<?php

session_start();

include "db.php";

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM students WHERE username = '$username'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {

        $student = mysqli_fetch_assoc($result);

        if (password_verify($password, $student["password"])) {

            $_SESSION["student_id"] = $student["id"];
            $_SESSION["student_name"] = $student["fullname"];
            $_SESSION["username"] = $student["username"];

            header("Location: dashboard.php");
            exit();

        } else {

            $message = "Invalid username or password.";

        }

    } else {

        $message = "Invalid username or password.";

    }
}

?>

<!DOCTYPE html>
<html>

<head>

    <title>Student Login</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

    <div class="form-container">

        <h1>Student Login</h1>

        <?php
        if ($message != "") {
            echo "<p>$message</p>";
        }
        ?>

        <form action="" method="POST">

            <label>Username</label>

            <input type="text"
                   name="username"
                   placeholder="Enter your username"
                   required>


            <label>Password</label>

            <input type="password"
                   name="password"
                   placeholder="Enter your password"
                   required>


            <button type="submit">Login</button>

        </form>

        <p>
            Don't have an account?
            <a href="register.php">Register here</a>
        </p>

    </div>

</body>

</html>