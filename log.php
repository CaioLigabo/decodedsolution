<?php
// Simulate a simple login check
$username = $_POST["username"];
$password = $_POST["password"];

// Validate the credentials (you would typically check against a database)
if ($username === "admin" && $password === "admin123") {
    $response = ["success" => true];
} else {
    $response = ["success" => false];
}

// Send the JSON response back to the JavaScript
header('Content-Type: application/json');
echo json_encode($response);
?>
