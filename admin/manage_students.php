<?php

session_start();

if (!isset($_SESSION["admin_id"])) {
    header("Location: admin_login.php");
    exit();
}

include "../db.php";

$sql = "SELECT id, fullname, email FROM students ORDER BY id DESC";

$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html>

<head>

    <title>Manage Students</title>

    <link rel="stylesheet" href="admin.css">

</head>

<body>

    <h1>Registered Students</h1>

    <table border="1" cellpadding="10">

        <tr>

            <th>ID</th>

            <th>Name</th>

            <th>Email</th>

        </tr>

        <?php

        while ($row = mysqli_fetch_assoc($result)) {

        ?>

        <tr>

            <td><?php echo $row["id"]; ?></td>

            <td><?php echo $row["fullname"]; ?></td>

            <td><?php echo $row["email"]; ?></td>

        </tr>

        <?php

        }

        ?>

    </table>

    <br>

    <a href="admin_dashboard.php">
        Back to Dashboard
    </a>

</body>

</html>