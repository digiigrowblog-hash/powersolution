<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $message = htmlspecialchars($_POST['message'] ?? '');

    $to = 'info@nucleuspower.com'; // Replace with your email
    $subject = 'New Contact Form Submission from Nucleus Power Solution';
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email\r\nReply-To: $email\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo 'success: Message sent successfully!';
    } else {
        echo 'error: Failed to send message. Please try again.';
    }
} else {
    echo 'error: Invalid request method.';
}
?>
