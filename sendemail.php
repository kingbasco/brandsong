<?php
if(isset($_POST['submit-form'])) {
    $to = "info@brandsong.org"; // replace with your email address
    $subject = $_POST['subject'];
    $message = "Name: " . $_POST['username'] . "\r\n";
    $message .= "Email: " . $_POST['email'] . "\r\n";
    $message .= "Phone: " . $_POST['phone'] . "\r\n";
    $message .= "Message: " . $_POST['message'] . "\r\n";
    $headers = "From: " . $_POST['email'] . "\r\n" .
        "Reply-To: " . $_POST['email'] . "\r\n" .
        "X-Mailer: PHP/" . phpversion();
    if(mail($to, $subject, $message, $headers)) {
        echo "Thank you for contacting us!";
    } else {
        echo "Oops! Something went wrong. Please try again.";
    }
}
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Thank You! | Brandsong</title>
    <!-- /SEO Ultimate -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta charset="utf-8">
    <link rel="apple-touch-icon" sizes="57x57" href="./assets/images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="./assets/images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="./assets/images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="./assets/images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="./assets/images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="./assets/images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="./assets/images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="./assets/images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="./assets/images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="./assets/images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Latest compiled and minified CSS -->
    <link href="assets/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/js/bootstrap.min.js">
    <!-- Font Awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- StyleSheet link CSS -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    <link href="assets/css/mediaqueries.css" rel="stylesheet" type="text/css">
    <link href="assets/css/owl.carousel.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/owl.theme.default.min.css" rel="stylesheet" type="text/css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="//code.tidio.co/wbv6axdepy4tfceuqnnjyypfzsowxzts.js" async></script>
</head>

<body>
<!-- 404 ERROR SECTION -->
<section class="error_section">
    <div class="container">
        <figure class="left_shape mb-0">
            <img src="./assets/images/404_left_shape.png" alt="" class="img-fluid">
        </figure>
        <figure class="va_shape mb-0">
            <img src="./assets/images/404_va_shape.png" alt="" class="img-fluid">
        </figure>
        <div class="row" data-aos="fade-up">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="error_content">
                    <a href="./index" class="text-decoration-none">
                        <figure>
                            <img src="assets/images/404_instant_logo.png" alt="" class="img-fluid">
                        </figure>
                    </a>
                    <h1>Thank you for contacting us!</h1>
                    <p>We appreciate your interest and will respond to your message as soon as possible.</p>
                    <div class="btn_wrapper"> 
                        <a class="text-decoration-none back_home_btn" href="./index">Back to Home</a>
                    </div>
                </div>
            </div>
        </div>
        <figure class="right_shape mb-0">
            <img src="./assets/images/404_right_shape.png" alt="" class="img-fluid">
        </figure>
        <figure class="bottom_shape mb-0">
            <img src="./assets/images/404_bottom_shape.png" alt="" class="img-fluid">
        </figure>
    </div>
</section>
<!-- Latest compiled JavaScript -->
<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/custom.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="assets/js/owl.carousel.js"></script>
<script src="assets/js/carousel.js"></script>
<script src="assets/js/counter.js"></script>
<script src="assets/js/animation.js"></script>
</body>
</html>