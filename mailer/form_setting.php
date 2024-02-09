<?php
	/*Form settings*/
	$subj = "New message from the site 'You Site Name'"; //letter subject
	$to = 'vguxd14@gmail.com'; // Enter Your E-mail
	$from = 'admin@you-site-name.com'; // Admin e-mail
	$fromName = 'Your Company Name'; // Your company name
	$charset = 'UTF-8';
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $tel = $_POST["tel"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Email address to receive form submissions
    $to = "vguxd14@gmail.com";

    // Email subject
    $email_subject = "New Contact Form Submission: $subject";

    // Email headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    // Compose email message
    $email_message = "Name: $name\n";
    $email_message .= "Phone: $tel\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Subject: $subject\n\n";
    $email_message .= "Message:\n$message";

    // Send email
    mail($to, $email_subject, $email_message, $headers);

    // You can add additional actions here, such as redirecting to a thank you page
    // header("Location: thank-you.html");
    // exit();
}
?>