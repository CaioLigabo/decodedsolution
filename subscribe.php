<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate email
    $email = filter_var($_POST["caio.ligabo@gmail.com"], FILTER_SANITIZE_EMAIL);
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Save the email to a file, database, or send it via email
        // Here, we'll just print it for demonstration purposes
        echo "Thank you for subscribing! Your email address is: " . $email;
    } else {
        // Invalid email
        echo "Please enter a valid email address.";
    }
} else {
    // Redirect back to the form if accessed directly
    header("Location: index.html");
    exit;
}
?>
