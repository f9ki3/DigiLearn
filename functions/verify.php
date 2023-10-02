<?php
include '../config.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve form data
    $email = $_POST["email"];
    $username = $_POST["username"];
    $one = $_POST["a"];
    $two = $_POST["b"];
    $three = $_POST["c"];
    $four = $_POST["d"];

    $otp = $one . $two . $three . $four;

    // Check if either email or username is provided
    if (!empty($email)) {
        $field = "email";
        $value = $email;
    } elseif (!empty($username)) {
        $field = "username";
        $value = $username;
    } else {
        // Handle the case when neither email nor username is provided
        // You can redirect or display an error message as needed
        echo "Please provide either email or username.";
        exit();
    }

    // Prepare and execute a query to retrieve email, username, and otp from the "contributers" table based on the chosen field
    $stmt = $conn->prepare("SELECT email, username, otp FROM contributers WHERE $field = ?");
    $stmt->bind_param("s", $value);
    $stmt->execute();
    $stmt->bind_result($dbEmail, $dbUsername, $dbOTP);
    $stmt->fetch();
    $stmt->close();

    // Compare the retrieved OTP with the user input
    if ($dbOTP === $otp) {
        // OTPs match, update the acc_status to 1
        $stmt = $conn->prepare("UPDATE contributers SET acc_status = 1 WHERE $field = ?");
        $stmt->bind_param("s", $value);
        if ($stmt->execute()) {
            header("Location: ../success.php");
        } else {
            echo "Error: Failed to update account status";
        }
        $stmt->close();
    } else {
        $failed = true;
        header("Location: ../verify.php?failed=true&$field=$value");
        exit();
    }
}
?>
