<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = htmlspecialchars($_POST['name']);
    $email   = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Gara Animal Feed email
    $to = "achsairankunda4@example.com"; 

    $subject = "New Contact Form Message from $name";
    $body = "You have received a new message:\n\n".
            "Name: $name\n".
            "Email: $email\n".
            "Message:\n$message\n";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Message delivery failed.";
    }
}
?>
