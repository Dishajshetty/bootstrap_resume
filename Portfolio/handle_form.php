<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Print the form data
    echo "<h2>Form Data</h2>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Subject:</strong> $subject</p>";
    echo "<p><strong>Message:</strong> $message</p>";
} else {
    // If form is not submitted, redirect back to the form page
    header("Location: index.html");
    exit();
}
?>
