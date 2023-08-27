<?php

if(isset($_POST['btnsubmit'])) {
    // Retrieve form data
    $email = $_POST['email'];

    // Validate email address
    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Save email to database or send email to admin
        // You can use PHP's built-in mail() function to send an email
        mail('info@brandsong.org', 'New Newsletter Subscriber', 'Email: '.$email);

        // Redirect user to a thank you page
        header('Location: thank_you.php');
        exit();
    } else {
        // Invalid email address
        echo '<p class="error">Invalid email address</p>';
    }
}

?>
