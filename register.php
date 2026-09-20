<?php

include "db.php";

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    if ($password != $confirm_password) {

        $message = "Passwords do not match.";

    } else {

    $password = password_hash($password,PASSWORD_DEFAULT);

        $sql = "INSERT INTO students (fullname, email, username, password)
                VALUES ('$fullname', '$email', '$username', '$password')";

        if (mysqli_query($conn, $sql)) {

            $message = "Registration successful!";

        } else {

            $message = "Registration failed: " . mysqli_error($conn);

        }
    }
}

?>

<!DOCTYPE html>
<html>

<head>

    <title>Student Registration</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

    <div class="form-container">

        <h1>Student Registration</h1>

        <?php
        if ($message != "") {
            echo "<p>$message</p>";
        }
        ?>

        <form action="" method="POST">

            <label>Full Name</label>

            <input type="text"
                   name="fullname"
                   placeholder="Enter your full name"
                   required>


            <label>Email</label>

            <input type="email"
                   name="email"
                   placeholder="Enter your email"
                   required>


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


            <label>Confirm Password</label>

            <input type="password"
                   name="confirm_password"
                   placeholder="Confirm your password"
                   required>


            <button type="submit">Register</button>

        </form>


        <p>
            Already have an account?
            <a href="login.php">Login here</a>
        </p>

    </div>

</body>

</html>