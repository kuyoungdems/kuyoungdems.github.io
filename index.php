<?php
    if($_POST["sumbit"]){
        $name = $_POST['name'];
        $email = $_POST['email'];

        $message = $_POST['New member'];
        $from = 'Demo contact form';
        $to = 'chad.jayhawk@gmail.com';
        $subject = '[new kuyd member]';

        $body = 'From: $name\n E-mail: $email\n Message: $message\n';
    }

    if(mail ($to, $subject, $body, $from) ) {
        $result='<div class="alert alert-success">Thank you for signing up!</div>';
    }
?>
