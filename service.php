<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['name'])) {$name = $_POST['name'];}
    if (isset($_POST['tel'])) {$tel = $_POST['tel'];}
    if (isset($_POST['email'])) {$email = $_POST['email'];}
    if (isset($_POST['formData'])) {$formData = $_POST['formData'];}
    $to = "7yatan@gmail.com";
    $headers = "Content-type: text/plain; charset = utf-8";
    $subject = "$formData";
    $message = "$formData\n\nName: $name \n\nPhone: $tel \n\n$email";
    $send = mail ($to, $subject, $message, $headers);
    if ($send == 'true')
    {
    echo "<center>Thank you for sending your message!</center>";
    }
    else 
    {
    echo "<center><b>Error. Message not sent!</b></center>";
    }
} else {
    http_response_code(403);
    echo "Try again";
}
?>