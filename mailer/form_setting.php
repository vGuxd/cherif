<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Construct the email content
    $formcontent = "From: $name\nPhone: $tel\nEmail: $email\nSubject: $subject\nMessage: $message";

    // Set recipient email address
    $recipient = "vguxd14@gmail.com"; // My Email

    // Set email subject
    $email_subject = "Contact Form Submission: $subject";

    // Set the "From" header
    $mailheader = "From: $email\n";

    // Send the email
    mail($recipient, $email_subject, $formcontent, $mailheader) or die("Error sending message.");

    // Display a thank you message to the user
    echo "Thanks, your message has been sent successfully. We will contact you shortly!";
}
?> 