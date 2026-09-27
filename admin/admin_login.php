<?php

session_start();

include "../db.php";

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM admins
            WHERE username='$username'
            AND password='$password'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {

        $admin = mysqli_fetch_assoc($result);

        $_SESSION["admin_id"] = $admin["id"];
        $_SESSION["admin_username"] = $admin["username"];

        header("Location: admin_dashboard.php");
        exit();

    } else {

        $message = "Invalid username or password.";

    }
}

?>

<!DOCTYPE html>
<html>

<head>

    <title>Admin Login</title>

    <link rel="stylesheet" href="admin.css">

</head>

<body>

    <div class="login-container">

        <h1>Admin Login</h1>

        <form method="POST">

            <input
                type="text"
                name="username"
                placeholder="Username"
                required
            >

            <input
                type="password"
                name="password"
                placeholder="Password"
                required
            >

            <button type="submit">
                Admin Login
            </button>

        </form>

        <p><?php echo $message; ?></p>

    </div>

</body>

</html>