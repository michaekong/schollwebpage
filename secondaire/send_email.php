<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    $to = 'michaelndekebai@gmail.com'; // Remplacez par votre adresse e-mail
    $subject = 'Nouveau message de contact';
    $body = "Nom: $name\nEmail: $email\nMessage: $message";
    $headers = "From: $email\r\n" .
               "Reply-To: $email\r\n" .
               "X-Mailer: PHP/" . phpversion();

    if (mail($to, $subject, $body, $headers)) {
        echo 'Message envoyé avec succès!';
    } else {
        echo 'L\'envoi du message a échoué.';
    }
}
?>