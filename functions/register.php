<?php
include '../config.php';

// Function to generate a random 4-digit OTP
function generateOTP() {
    return sprintf("%04d", mt_rand(0, 9999));
}

// Handle the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $otp = generateOTP(); // Generate a 4-digit OTP

    // Check if the password is at least 6 characters long
    if (strlen($password) < 6) {
        header("Location: ../register.php?failed=true&message=Password error");
        exit();
    }

    // Hash the password
    $password = hash('sha256', $password);

    // Check if the username or email already exists
    $checkSql = "SELECT * FROM contributers WHERE username = ? OR email = ?";
    $checkStmt = $conn->prepare($checkSql);
    $checkStmt->bind_param("ss", $username, $email);
    $checkStmt->execute();
    $result = $checkStmt->get_result();

    if ($result->num_rows > 0) {
        header("Location: ../register.php?failed=true&message=You have already register");
        exit();
    } else {
        // Prepare and execute the query to insert the new user
        $insertSql = "INSERT INTO contributers (username, email, password, otp) VALUES (?, ?, ?, ?)";
        $insertStmt = $conn->prepare($insertSql);

        // Bind parameters
        $insertStmt->bind_param("ssss", $username, $email, $password, $otp);

        if ($insertStmt->execute()) {

            // Redirect to send_mail.php with the email parameter
            header("Location: send_email.php?email=$email&username=$username&otp=$otp");
        } else {
            echo "Error: " . $insertStmt->error;
        }
    }
}
?>
