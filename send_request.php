<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "printatsmartz@gmail.com"; 
    $subject = "New Request";
    $message = $_POST["request"];
    $headers = "From: " . $_POST["email"];

    if (mail($to, $subject, $message, $headers)) {
        echo "Request sent successfully.";
    } else {
        echo "Error sending request.";
    }
}
?>
