<?php
// --- CONFIGURATION ---
// SET THE EMAIL ADDRESS YOU WANT THE FORM TO SEND TO
$recipient_email = "anthropogeny2003@gmail.com"; 

// --- UPDATED FILE PATHS ---
// These paths are now in the same folder
$success_page = "success.html";
$failure_page = "failure.html";

// --- SCRIPT START ---
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // 1. Get and Sanitize Form Data
    $name = htmlspecialchars(trim($_POST["name"]));
    $message = htmlspecialchars(trim($_POST["message"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);

    // 2. Validate Form Data
    if (empty($name) || empty($message) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: $failure_page");
        exit;
    }

    // 3. Prepare Email
    $subject = "New Contact Form Submission from $name";
    $email_body = "You have received a new message from your website contact form.\n\n";
    $email_body .= "Name: $name\n";
    $email_body .= "Email: $email\n\n";
    $email_body .= "Message:\n$message\n";
    $headers = "From: webmaster@vibhavskitchen.com\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // 4. Send Email
    // --- TEMPORARY FIX FOR PRESENTATION ---
    // The mail() function is commented out because it will fail on a local XAMPP setup.
    // We will always redirect to success.html to show the form flow.
    /*
    if (mail($recipient_email, $subject, $email_body, $headers)) {
        header("Location: $success_page");
    } else {
        header("Location: $failure_page");
    }
    */
    
    // --- TEMPORARY FIX FOR PRESENTATION ---
    header("Location: $success_page");
    // --- END OF FIX ---

} else {
    // If the script was accessed directly, redirect to the contact page
    header("Location: contact.html");
}
?>