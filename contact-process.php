<?php
include './admin/auth/connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    function cleanInput($conn, $input)
    {
        return htmlspecialchars(mysqli_real_escape_string($conn, $input), ENT_QUOTES, 'UTF-8');
    }

    $name     = cleanInput($conn, $_POST['name']);
    $email    = cleanInput($conn, $_POST['email']);
    $phone    = cleanInput($conn, $_POST['full_phone']);
    $message = !empty($_POST['message']) ? cleanInput($conn, $_POST['message']) : "nill";
    $lang    = !empty($_POST['lang']) ? cleanInput($conn, $_POST['lang']) : "nill";
    $captcha  = $_POST['g-recaptcha-response'];

    $secretKey = "6LcORpsrAAAAANo9UQ9JQ5f8u4215n1kQybXOzdq";
    $referer = $_SERVER['HTTP_REFERER'];
    $clean_url = parse_url($referer, PHP_URL_SCHEME) . '://' . parse_url($referer, PHP_URL_HOST) . parse_url($referer, PHP_URL_PATH);
    $referer = $clean_url;

    if ($referer == "contact-us.php") {
        // Verify captcha
        $verifyResponse = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secretKey}&response={$captcha}&remoteip=" . $_SERVER['REMOTE_ADDR']);
        $responseData = json_decode($verifyResponse);
        if (!$captcha) {
            header("Location: {$referer}?error=⚠ Please complete the reCAPTCHA.");
            exit;
        }
    } else {
        $responseData = new stdClass();
        $responseData->success = true; // Bypass reCAPTCHA for other pages
    }

    if ($responseData->success) {
        $query = "INSERT INTO contact_us (name, email, phone_no, message, lang) VALUES ('$name', '$email', '$phone', '$message', '$lang')";
        if (mysqli_query($conn, $query)) {
            header("Location: {$referer}?success=✅ Message sent successfully!");
        } else {
            header("Location: contact-us.php?error=database");
            exit;
        }
    } else {
        header("Location: {$referer}?error=❌ reCAPTCHA failed. Please try again.");
    }
} else {
    $referer = $_SERVER['HTTP_REFERER'];
    header("Location: {$referer}?error=⚠ Invalid request.");
}
