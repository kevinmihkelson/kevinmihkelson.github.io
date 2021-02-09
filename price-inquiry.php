<?php
    $name = $_POST['name'];
    $visitor_email = $POST['email'];
    $visitor_number = $_POST['number'];
    $visitor_title = $_POST['title'];
    $message = $_POST['message'];


    $email_from = 'rannamaja69@gmail.com';

    $email_subject = "UUS SÕNUM";

    $email_body = "Nimi: $name.\n". "Email: $visitor_email.\n". "Telefoni nr: $visitor_number.\n". 
    "Teema: $visitor_title.\n". "Sõnum: $message.\n";

    $to = 'Kristian@visorek.eu';

    $headers = "Saatja: $email_from \r\n";

    $headers .= "Vasta: $visitor_email \r\n";

    mail($to, $email_subject, $email_body, $headers);

    header("Location: index.html");

?>