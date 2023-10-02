<?php
include '../config.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve form data
    $loginIdentifier = $_POST["email"]; // This can be either email or username
    $password = $_POST["pass"];

    // Hash the password (you should use a better hashing algorithm)
    $hashedPassword = hash('sha256', $password);

    // Perform database query using prepared statements to prevent SQL injection
    $query = "SELECT * FROM contributers WHERE (email = ? OR username = ?) AND password = ?";
    $stmt = mysqli_prepare($conn, $query);

    // Bind parameters
    mysqli_stmt_bind_param($stmt, "sss", $loginIdentifier, $loginIdentifier, $hashedPassword);

    // Execute the statement
    mysqli_stmt_execute($stmt);

    // Get the result
    $result = mysqli_stmt_get_result($stmt);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $account_status = $row["acc_status"];
            
            if ($account_status == 1) {
                // Account is active, proceed to login
                header("Location: ../user/contributers/index.php"); // Replace with your dashboard URL
                exit();
            } else {
                // Account is not active, redirect to verify.php
                header("Location: ../verify.php?email=$email&username=$loginIdentifier");
                exit();
            }
        } else {
            $failed = true;
            header("Location: ../login.php?failed=true");
            exit();
        }
    }
}
?>
