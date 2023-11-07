<?php

$errors = array();
$errorMessage = '';

if (!empty($_POST)) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if (empty($name)) {
        $errors[] = 'Name is empty';
    }

    if (empty($email)) {
        $errors[] = 'Email is empty';
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Email is invalid';
    }

    if (empty($message)) {
        $errors[] = 'Message is empty';
    }

    if (empty($errors)) {
        $toEmail = 'biuro@masza.com.pl';
        $emailSubject = 'Nowa wiadomosc ze strony masza';
        $headers = "From: {$name} <{$email}>\r\n";
        $headers .= "Reply-To: <{$email}>\r\n";
        $headers .= "Subject: {$emailSubject}\r\n";

        $bodyParagraphs = array("Name: {$name}", "Email: {$email}", "Message:", $message);
        $body = join(PHP_EOL, $bodyParagraphs);

        $mailSent = mail($toEmail, $emailSubject, $body, $headers); 
    } else {
        $errorMessage = join('<br/>', $errors);
    }
}

// render result
if ($mailSent) {
    $content =  $_SERVER['DOCUMENT_ROOT'].'/../resources/pages/message-sent.php';
}
else {
    $content = $_SERVER['DOCUMENT_ROOT'].'/../resources/pages/error.php';
}

include $_SERVER['DOCUMENT_ROOT'].'/../resources/layout/layout.php';

?>