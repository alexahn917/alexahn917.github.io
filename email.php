<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $to = 'alexahn917@gmail.com';
    $subject = 'Message sent from sanghyeonahn.com!';
    $body = "From: $name\n E-Mail: $email\n Message:\n\n $message";
    mail($to, $subject, $body, $name);
    $response = 'Thank you for reaching out to me! \n I will get right back to you soon :)';
    echo "<script type='text/javascript'>alert('$response');</script>";
?>