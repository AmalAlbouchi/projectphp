
<?php
if (isset($_POST['text']) && isset($_POST['mail'])) {
$to      = 'nobody@example.com';
if (isset($_POST['subject']) $subject = $_POST['subject'];
$message = $_POST['text'];
$message = wordwrap($message, 70, "\r\n");
$headers = 'From:'.$_POST['mail'];

if(mail($to, $subject, $message, $headers)){
    header('Location: /projectphp');
} else header('Location: /projectphp/pages/contact');

} else header('Location: /projectphp/pages/contact');


?>
