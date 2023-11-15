<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Validate and store data
    if (!empty($email) && !empty($password)) {
        $data = "Email: " . $email . "\nPassword: " . $password . "\n\n";
        $filePath = "F:\sdf\php"; // Specify the full path
        file_put_contents($filePath, $data, FILE_APPEND | LOCK_EX);
        echo "Sign up successful!";
    } else {
        echo "Please fill in all fields.";
    }
}
?>
